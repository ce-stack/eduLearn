<?php

namespace App\Policies;

use App\Courses;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    // 

    public function subs (User $user, Courses $course) {
//         $exists = DB::table('user_course')->where($user, $course)->first();
// if(!$exists)
// abort(403 , 'you already subscribe');
        
    }
}
