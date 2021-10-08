<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Usuario;


class LoginController extends Controller 
{
    public function create() {
        return view('auth.login');
    }

    public function store() {
        
        $credentials = request() -> only('usuario','password');

        if(Auth::attempt($credentials)){  
            request() ->session()->regenerate(); //Evitar Session Fixation
            return redirect()->to('/');
        }   

        return redirect()->to('/login');
    }

    public function destroy() {
        Auth::logout();
        return redirect()->to('/');
    }
}
