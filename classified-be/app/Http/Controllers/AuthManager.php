<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AccessCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    
    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            "alias" => "required",
            "password" => "required",
        ]);

        $credentials = $request->only('alias', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Unauthorized access.");
    }

    function registerPost(Request $request){
        $request->validate([
            "access_codes" => "required",
        ]);

        $accessCode = AccessCode::where('access_codes', $request->input('access_codes'))->first();

        if ($accessCode) {
            return redirect()->route('registry');
        }

        return redirect(route('register'))->with("error", "Invalid access code.");
    }

    function agent_registryPost(Request $request){
        $request->validate([
            "alias" => "required",
            "password" => "required",
            "branch" => "required",
            "ign" => "required",
            "discord" => "required",
            "email" => "required|email|unique:users",
        ]);

        $data['alias'] = $request->alias;
        $data['password'] = Hash::make($request->password);
        $data['branch'] = $request->branch;
        $data['ign'] = $request->ign;
        $data['discord'] = $request->discord;
        $data['email'] = $request->email;

        //51:39

    }
}
