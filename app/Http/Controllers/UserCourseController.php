<?php

namespace App\Http\Controllers;

use App\Courses;
use App\User;
use Illuminate\Http\Request;

class UserCourseController extends Controller
{

    public function __invoke(User $user)
    {
        $user::Auth()->courses()->sync([1]);
    }


}
