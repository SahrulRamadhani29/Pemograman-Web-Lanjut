<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function profile($id, $name)
    {
        return view('user.profile', compact('id', 'name'));
    }
}