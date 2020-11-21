<?php

namespace App\Http\Controllers;

use App\Courses;
use App\User;
use App\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile($id)
    {

        $user = User::find($id);

        return view('user', ['user' => $user]);
    }
}
