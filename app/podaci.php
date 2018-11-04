<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class podaci extends Model
{
    protected $table = 'podaci';
    //
    public static function getGraphData(){
         //SELECT grad,COUNT(*) as count FROM podaci GROUP BY grad ORDER BY count DESC;
         $data =  DB::table('podaci')
         ->select(DB::raw('grad, COUNT(*) as count'))
         ->groupBy('grad')
         ->orderBy('count', 'DESC')
         ->get();
         return($data);
    }
    public static function getListData($keyword = ""){
        $keyword == ""? $criteria = '':$criteria = $keyword;
        $data =  DB::table('podaci')
         ->orderBy('grad', 'ASC')
         ->orderBy('prezime', 'ASC')
         ->where('ime','LIKE', '%%'.$criteria.'%%')
         ->orWhere('prezime','LIKE', '%%'.$criteria.'%%')
         ->orWhere('ulica','LIKE', '%%'.$criteria.'%%')
         ->get();
        return($data);
    }
    public static function getMapData($keyword = ""){
        $keyword == ""? $criteria = '':$criteria = $keyword;
        $data =  DB::table('podaci')->get();
        return($data);
    }
    public static function getByCity($grad=''){
        $data =  DB::table('podaci')
         ->select(DB::raw('ime, prezime, telefonski_broj'))
         ->where('grad', '=' , $grad)
         ->orderBy('prezime', 'ASC')
         ->get();
         $data = json_encode ($data);
        return($data);

    }
    public static function getByName($ime=''){
        $data =  DB::table('podaci')
         ->select(DB::raw('ime'))
         ->where('ime', 'LIKE' , '%%'.$ime.'%%')
         ->orderBy('ime', 'ASC')
         ->groupBy('ime')
         ->get();
         $return="";
         foreach ($data as $item){
             $return .= '<div onclick="use_sugestion(this)">'.$item->ime.'</div>';
         }
        return($return);

    }

}
