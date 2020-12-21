<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorLoginController extends Controller
{
    
    public function __construct(){
         
        $this->middleware('guest:doctor')->except('logout');

    }

    public function showLoginForm(){

        return view('auth.doctor-login');

    }

    public function login(Request $request)
    {
    
        // Validate form data
        $this->validate($request,
            [
                'email' => 'required|string|email',
                'password' => 'required|string|min:8'
            ]
        );

        // Attempt to login as doctor
        if (Auth::guard('doctor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // If successful then redirect to intended route or doctor dashboard
            return redirect()->intended(route('doctor.dashboard'));
        }

        // If unsuccessful then redirect back to login page with email and remember fields
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('doctor')->logout();
        return redirect('/');
    }


}
