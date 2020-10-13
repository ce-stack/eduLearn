<?php

namespace App\Http\Controllers;
use App\Courses;
use Illuminate\Support\Facades\Cache;
class CoursesDetailsController extends Controller
{
   
    public function index () {

        $course = Cache::remember('courses', now()->addSeconds(5), function () {
            return Courses::latest()->withCount('users')->get();

       });

       return view('./courses-detail' , ['courses' => $course]);
    }

    
}