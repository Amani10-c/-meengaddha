<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AuthController extends Controller
{

public function register(Request $request){

    $request->validate([
        'email'=>'required|string|email|max:255|unique:user,email',
        'password'=>'required|string|min:8|confirmed'
    ]);
    $user=User::create([
        'email'=>$request->email,
        'password'=>FacadesHash::make($request->password),
        'name'=>$request->name
    ]);
    return response()->json([
        'massage'=>'User registered Succsessfully',
        'User'=>$user
    ,201]);
    }   

public function login (Request $request) {
        $request->validate([
        'email'=>'required|string|email',
        'password'=>'required|string'
    ]);
    if(!Auth::attempt($request->only('email','password')))
    return response()->json([
        'message'=>'invalid email or password']
        ,401);
        $user=User::where('email',$request->email)->firstOrFail();
        $token=$user->createToken('auth_Token')->plainTextToken;
            return response()->json([
        'massage'=>'login Succsessful',
        'User'=>$user,
        'token'=>$token
    ,201]);
    }

public function logout(Request $request){
$request->user()->currentAccessToken()->delete();
            return response()->json([
        'massage'=>'logout Succsessful']);
    }

}
