<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;

class SpotifyController extends Controller
{
    public function redirect(Request $req) {
        return Socialite::driver('spotify')->redirect();
    }

    public function callback(Request $req) {
        try {
            $user = Socialite::driver('spotify')->user();
        } catch (InvalidStateException) {
            return redirect(route('spotify.redirect'));
        }
        $isUser = User::query()->where('spotify_id', $user->id)->first();
        if (!$isUser) {
            $authUser = Auth::user();
            $authUser->spotify_id = $user->getId();
            $authUser->save();
            Auth::login($authUser);
        }
        return redirect(route('welcome'));
    }
}
