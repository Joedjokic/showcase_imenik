<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\podaci;
use Illuminate\Support\Facades\DB;

class DisplayDataController extends Controller
{
    //fetch data
    public function getListData(Request $request){
        $data = podaci::getListData($request->keyword);   
        return view('/list')->with('data', $data);
    }
    public function getGraphData(){
        $data = podaci::getGraphData();       
        return view('/graph')->with('data', $data);
    }

    public function getMapData(){
        $data = podaci::getMapData();       
        return view('/map')->with('data', $data);
    }


}
