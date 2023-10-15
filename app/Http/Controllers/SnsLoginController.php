<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SnsLoginController extends Controller
{
    public function getGoogleAuth()
    {
        return Socialite::driver('google')->redirect();
    }

    public function authGoogleCallback()
    {
        try {
            $socialiteUser = Socialite::driver('google')->user();
            $email = $socialiteUser->email;

            $user = User::firstOrCreate(['email' => $email], [
                'name' => $socialiteUser->name,
            ]);

            Auth::login($user);

            return redirect()->intended('dashboard');
        } catch (Exception $e) {
            Log::error($e);
            throw $e;
        }
    }
}
