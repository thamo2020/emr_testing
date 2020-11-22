<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function loginSubmit(Request $request)
    {

        $validateData = $request->validate(
            [
                'fullname' => 'required',
                'slmcnumber' => 'required|min:5|max:5',
                'hospital' => 'required',
                'password' => 'required|min:6|max:12',
                'retypepassword'=>'required|password'

            ]
            );
        $input = $request->all();
        $fullname = $request->input('fullname');
        $slmcnumber = $request->input('slmcnumber');
        $hospital = $request->input('hospital');
        $password = $request->input('password');
        $retypepassword = $request->input('retypepassword');
        return "Full Name:".$fullname . "slmc number" .$slmcnumber . "hospital:" . $hospital . "password:" . $password;

    }
}
