<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorController extends Controller
{   
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:doctor');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('doctor');
    }




    public function show()
    {
        return view('doctorSignup');
    }

    public function signupSubmit(Request $request)
    {

        $validateData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6|max:12',
                'passwordcongif'=>'required|'

            ]
            );
        $input = $request->all();
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordcongif = $request->input('passwordcongif');
        return "Full Name:".$name ;

    }
}
