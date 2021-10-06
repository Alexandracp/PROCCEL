<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;


class LoginController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store() {

        if (auth() -> attempt(request(['usuario','password']))== false)
        {  
            return back()->withErrors([
                'message'=> 'Usuario o password son incorrectos, vuelve a intentarlo',
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy() {

        auth()->logout();
        return redirect()-> to('/');
    }
}
