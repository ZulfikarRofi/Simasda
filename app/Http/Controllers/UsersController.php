<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function userManage()
    {
        $user = User::all();
        return view('pages.usersmanage', compact('user'));
    }
}
