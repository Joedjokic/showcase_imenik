<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    
    public function submit(Request $request )
{

        // create our user data for the authentication
        $userdata = array(
            'name'     => $request->input('ime'),
            'password'  => $request->input('password')
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {

            // validation successful!

            return redirect('/unos');

        } else {        

            // validation not successful, send back to form 
            return redirect('/login');

        }

    }
}
