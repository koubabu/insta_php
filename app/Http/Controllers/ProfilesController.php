<?php

namespace App\Http\Controllers;

use \App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        //        \App\User::find($user);
        $user = User::findOrFail($user);
        //dd($user);
        return view('profiles.index', ['user' => $user,]);
    }

    public function edit(\App\User $user)
    {
        return view('profiles.edit', compact('user'));
    }
}
