<?php

namespace App\Providers;

use App\Courses;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class SubsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('subs' , function (User $user , Courses $course) {
            return $user->id == $course->user_id;
        });

        // Gate::define('subs' , 'App\Policies\CoursePolicy@subs');
       // Gate::resource('subs' , 'App\Policies\CoursePolicy');    
    }
}
