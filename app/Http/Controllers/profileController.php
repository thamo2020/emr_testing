<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller

{
    public function index()
    {
        return view('profile');
    }

    
    public function profileSubmit(Request $request)
    {

        $validateData = $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'idnumber' => 'required|min:11|max:11',
                'telnumber' => 'required|min:10|max:10',
                'DOB' => 'required',
                'inputAddress' => 'required',
                'inputAddress2' => 'required',
                'inputCity' => 'required',
                'password' => 'required|min:6|max:12',
                'retypepassword'=>'required|password'

            ]
            );
        $input = $request->all();
        
    }
    public function store(Request $request)

    {
        echo "hello world";
    }




    
    }

