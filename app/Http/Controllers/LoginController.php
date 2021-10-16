<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller 
{
    public function create() {
        return view('auth.login');
    }

    public function store( Request $request, Redirector $redirect) {
        
        $credentials = request() ->validate([
            'cedula_u' => ['required'],
            'password' => ['required', 'string']
        ]);

        if(Auth::attempt($credentials)){  

            request() ->session()->regenerate(); //Evita Session Fixation
          
           return redirect()
           ->intended('dashboard'); //Intended: Para direccionar al usuario para la url escogida antes de autenticarse
        }

        throw ValidationException::withMessages([
            'cedula_u'=>'La cedula ingresada no conincide con nuestros registros',
            'password'=>'El contraseña ingresada no conincide con nuestros registros'
        ]);
    }

    public function destroy() {
        Auth::logout();
        return redirect()->to('/');
    }
}
