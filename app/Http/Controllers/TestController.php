<?php

namespace App\Http\Controllers;

use App\InstagramProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function index()
    {
        $users = User::all();
        // foreach ($users as $user) {
        //     return dd($user->remember_token);
        // }

        // dd($users->map(function ($user) {
        //     return $user->remember_token;
        // }));
        $user = User::find(1);
        dd($user->instagramProfiles);
    }
}
