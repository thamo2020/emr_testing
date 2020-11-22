<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class patientController extends Controller
{
    public function index()
    {

    }
    public function show()
    {
        return view('patientSignup');
    }

    public function signupSubmit(Request $request)
    {

        $validateData = $request->validate(
            [
                
                'email' => 'required|unique:users,email',
                'password' => 'required|min:6|max:12',
                

            ]);

               // patientsignup::create($validateData);
                //return Redirect::to('profile')->withsuccess('Greate| you have succefully registered');

        $input = $request->all();
      
        $email = $request->input('email');
        $password = $request->input('password');
       
    }

}
