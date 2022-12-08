<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Personalize;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function createBbforce()
    {
        return view('auth.bbforceRegister');
    }

    public function createSeller()
    {
        return view('auth.sellerRegister');
    }


    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'referral_id' => ['max:255'],
            'user_type' => ['string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'username' => $request->username,
            'referral_id' => $request->referral_id,
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'phone' => $request->phone,
            'user_type' => $request->user_type,
            'password' => Hash::make($request->password),
        ]);

        if($request->user_type == 'bbforce' || $request->user_type == 'seller') {
            $personalize = new Personalize();
                $personalize->user_id = $user->id;
                $personalize->designers = 1;
                $personalize->contractors = 1;
                $personalize->buildings = 1;
                $personalize->services = 1;
                $personalize->artisans = 1;
                $personalize->wares = 1;
                $personalize->properties = 1;
                $personalize->others = 1;

                $personalize->save();
        }

        event(new Registered($user));

        Auth::login($user);

        //return redirect(RouteServiceProvider::HOME);
        return redirect()->route('market');
    }
}
