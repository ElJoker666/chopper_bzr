<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function show (){
        if(auth::check()){
            return redirect('/home');
        }
        return view('/registro');
    }
    public function register (RegisterRequest $request){
       $user = User::create($request->validated());
       return redirect('/login')->with('Success', 'Tu cuenta se creo con exito!');
    }
}
