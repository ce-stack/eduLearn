<?php

namespace App\Providers;

use App\Courses;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //  'App\Model' => 'App\Policies\ModelPolicy',
        // 'App\Courses' => 'App\Policies\CoursePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('subs' , function (User $user , Courses $course) {
            return DB::table('user_course')->where($user, $course)->first();
        });
    }
}
