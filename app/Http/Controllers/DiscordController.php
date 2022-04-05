<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;

class DiscordController extends Controller
{
    public function redirect(Request $req) {
        return Socialite::driver('discord')->redirect();
    }

    public function callback(Request $req) {
        try {
            $user = Socialite::driver('discord')->user();
        } catch (InvalidStateException) {
            return redirect(route('discord.redirect'));
        }
        $isUser = User::query()->where('source', $user->id)->first();
        if ($isUser) {
            Auth::loginUsingId($isUser->id);
            return redirect(route('welcome'));
        } else {
            $newUser = new User();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->password = "nonono";
            $newUser->discord_id = $user->getId();
            $newUser->save();
            Auth::login($newUser);
            return redirect(route('welcome'));
        }
    }
}
