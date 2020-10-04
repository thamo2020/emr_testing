<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function uploadform()
    {
        return view ('home');
    }

    public function uploadimages(Request $req)
    {
        $req->images->store('public');
        return "file has been uploaded successfully";
        $this->validate($req,['images'=>'required|image|mimes:jpeg,png,jpg|max:2048']);
    }


}
