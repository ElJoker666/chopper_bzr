<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return redirect(('/home'));
        }
        return view('/login');
    }
    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();
    
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                // Otro tipo de usuario
                return redirect()->route('indexuser');
            }
        } else {
            // Autenticación fallida
            return redirect()->to('/login')->withErrors('Fallo tu inicio de sesión, checa tus credenciales');
        }
        
    }
    public function authenticated(Request $request, $user){
        return redirect('/home');
    }
}
