<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordRequest;

class ForgotPasswordController extends Controller
{
   /*     public function sendResetLink(ForgotPasswordRequest $request)
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return response()->json([
            'message' => __($status),
        ], 200);
    } **/
}
