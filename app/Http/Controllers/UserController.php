<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function profile(User $user)
    {
        $images = $user->images()->get();
        return view('users.profile', compact('user', 'images'));
    }
}
