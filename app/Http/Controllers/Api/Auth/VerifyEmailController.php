<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifyEmailController extends Controller
{
    //api verify email with token
    public function verify(Request $request)
    {
        //validate incoming request
        $this->validate($request, [
            'email' => 'required|string',
            'token' => 'required|string',
        ]);

        //check if the email has this token
        $otp = Otp::where('email', $request->email)->where('token', $request->token)->first();
        
        //if the email has this token
        if ($otp) {
            //update the user email_verified_at
            $user = User::where('email', $request->email)->first();
            $user->email_verified_at = now();
            $user->save();
            //delete the token
            $otp->delete();
            return response()->json(['message' => 'Email verified successfully'], 200);
        }
    }
}
