<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
public function register(RegisterRequest $request)
{
    $data = $request->validated();
    $user=User::create(  $data);

    return response()->json([
        'massage'=>'User registered Succsessfully',
        'User'=>$user
    ,201]);
    }   
    
public function login (LoginRequest $request) {
    if(!Auth::attempt($request->only('email','password')))
    return response()->json([
        'message'=>'invalid email or password']
        ,401);
        $user=User::where('email',$request->email)->FirstOrFail();
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

    public function update(UpdateRequest $request)
    {
        $user = $request->user();  

        $user->name  = $request->name;
        $user->email = $request->email;
        $user->save();

        return response()->json(['message' => 'User information updated successfully.'], 200);
    }
     public function reset(ResetPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'Email not found.'
            ], 404);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            'message' => 'Password has been reset successfully.'
        ], 200);
    }
}
