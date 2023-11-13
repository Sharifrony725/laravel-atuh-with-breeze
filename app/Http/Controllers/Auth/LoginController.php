<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        //authenticate
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'Invalid Email or Password');
        }
        return redirect()->intended('/');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('home');
    }

}
