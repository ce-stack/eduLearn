<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile ($id) {
        $profile = User::findOrFail($id);
      //  dd($profile);
        return view('user' , ['user' => $profile]);
    }
}
