<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\podaci;

class InputFormController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'ime' => 'required',
            'prezime' => 'required',
            'grad' => 'required',
            'ulica' => 'required',
            'broj' => 'required',
            'telefonski_broj' => 'required'

        ]);
        //write data
        $data = new podaci;
        $data->ime = $request->input('ime');
        $data->prezime = $request->input('prezime');
        $data->grad = $request->input('grad');
        $data->ulica = $request->input('ulica');
        $data->broj = $request->input('broj');
        $data->telefonski_broj = $request->input('telefonski_broj');
            
        $data->save();

        //redirect
        return redirect('/unos')->with('success', 'Podaci su uspesno upisani u bazu!');
    }
}
