<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile()
    {
        $user = auth()->user();
        $profile = $user->profile;
        return view('pages.profile', compact('profile'));
    }
}
