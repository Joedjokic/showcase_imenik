<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\podaci;

class apiController extends Controller
{
    public function getByCity(Request $request){
        $json = podaci::getByCity($request->grad);
        return $json;
    }
    public function getByName(Request $request){
        $list = podaci::getByName($request->ime);
        return $list;
    }
}
