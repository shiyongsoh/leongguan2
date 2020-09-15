<?php

namespace App\Http\Controllers;

use Socialite;
use Google_Client;
use Google_Service_People;
use Illuminate\Http\Request;

class googleController extends Controller
{
    $user = Socialite::driver('google')->user();
    dd($user);
    return back()->with("user",$user);
}
