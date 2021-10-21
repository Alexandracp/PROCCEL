<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\User; 
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller 
{
    public function create() {
        return view('auth.login');
    }

    public function store( Request $request, Redirector $redirect) {
        
        $credentials = request() ->validate([
            'cedula_u' => ['required','string'],
            'password' => ['required', 'string']
        ]);

        if(Auth::attempt($credentials)){  

            request()->session()->regenerate(); //Evita Session Fixation
            if(auth()->user()->id_rol == 2){

                return redirect()->route('admin.index');

            }else {
                return redirect()
                ->intended('dashboard'); //Intended: Para direccionar al usuario para la url escogida antes de autenticarse
            }

        }

        throw ValidationException::withMessages([
            'error'=>'Número de Cedula o contraseña incorrecta'
        ]);
    }

    public function logout(Request $request, Redirector $redirect) {
      
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect ->to('/');
    }
}
