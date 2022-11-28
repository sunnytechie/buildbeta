<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\Otp;
use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    //api register
    public function register(Request $request)
    {
        //validate incoming request
        $this->validate($request, [
            'username' => 'required|string|unique:users',
            'referral_id' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email|unique:'.User::class,
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'referral_id' => $request->referral_id,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        $user = User::where('email', $request->email)->first();
        //generate 5 digit token
        $token = mt_rand(10000, 99999);
        $email = $user->email;

        Mail::to($request->email)->send(new VerifyEmail($token, $email));

        //Save the token to the database
        Otp::create([
            'token' => $token,
            'email' => $email,
        ]);

        //token
        //$token = auth()->$user->createToken('auth_token')->plainTextToken;

        //send email verification token to the user
        //$user->sendEmailVerificationNotification();

        //return with user details
        return response()->json([
            'message' => 'Successfully registered',
            'user' => $user
        ], 201);

        //return $this->respondWithToken($token);
    }
}
