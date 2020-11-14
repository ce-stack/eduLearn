<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Events;
use App\Http\Requests\StoreUserToCourse;
use App\Lesson;
use App\Mail\Course;
use App\News;
use App\Teachers;
use App\User;
use App\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class CoursesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['justCourses', 'search', 'show', 'assingCourse']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Cache::remember('courses', now()->addSeconds(5), function () {
            return Courses::latest()->withCount('users')->get();
        });
        //  dd(Courses::findOrFail(4));
        $events = Cache::remember('events', now()->addSeconds(300), function () {
            return Events::all();
        });

        $teachers = Cache::remember('teachers', now()->addSeconds(300), function () {
            return Teachers::all();
        });

        $news = Cache::remember('news', now()->addSeconds(300), function () {
            return News::all()->random(1);
        });

        $newsAll = Cache::remember('newsAll', now()->addSeconds(300), function () {
            return News::all()->random(1);
        });

        $coursesCount = Cache::remember('coursesCount', now()->addSeconds(300), function () {
            return Courses::count();
        });

        $teachersCount = Cache::remember('teachersCount', now()->addSeconds(300), function () {
            return Events::count();
        });

        $studentsCount = Cache::remember('studentsCount', now()->addSeconds(300), function () {
            return User::count();
        });

        $users = Cache::remember('users', now()->addSeconds(0), function () {
            return User::whereHas('comments')->with(['comments' => function ($query) {
                return $query->orderBy('id', 'desc')->limit(1);
            }])->inRandomOrder()->limit(3)->get();
        });

        return view(
            '/.index',
            [
                'courses' => $courses,
                'events' =>  $events,
                'teachers' => $teachers,
                'news' => $news,
                'newsAll' => $newsAll,
                'coursesCount' => $coursesCount,
                'teachersCount' => $teachersCount,
                'studentsCount' => $studentsCount,
                'users' => $users
            ]
        );
    }

    public function showRelatedCourses()
    {
        $courses = Cache::remember('courses', now()->addSeconds(5), function () {
            return Courses::latest()->withCount('users')->get();
        });
        //return view('courses-details' , ['courses' => $courses]);
    }

    public function justCourses()
    {
        return view('courses', ['courses' => Courses::latest()->withCount('users')->get()]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {



        $course = Cache::remember('course', 10, function () use ($id) {
            return Courses::findOrFail($id);
        });

        $courses = Cache::remember('courses', now()->addSeconds(5), function () {
            return Courses::latest()->withCount('users')->get();
        });

        $courseLesson = Cache::remember('courseLesson', now()->addSeconds(5), function () use ($id) {
            return Lesson::where('course_id', $id)->get();
        });

        // dd($courseLesson);

        return view('courses-details', [
            'course' => $course,
            'courses' => $courses,
            'courseLesson' => $courseLesson
        ]);
    }


    public function search(Request $request)
    {
        $request->validate([
            'q' => 'required',
        ]);

        $q = $request->q;

        $filterCoursed = Cache::remember('courses', 10, function () use ($q) {
            return Courses::where('name', 'like', '%' . $q . '%')->get();
        });

        $filterCourse = $filterCoursed;

        if ($filterCourse->count()) {
            return view('courses')->with([
                'courses' => $filterCourse,

            ]);
        } else {
            return redirect('course-no-filter')->with(['status' => 'search failed try with another name ']);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function subs(Request $request , Courses $course)
    {
        $course = Courses::find($request->input('course_id'));
        $user = new User();
        $user = Auth::user()->id;
        $user_course = DB::table('user_course')
            ->where('user_id', '=', Auth::user()->id)
            ->where('courses_id', '=', $course->id)
            ->first();
        if (is_null($user_course)) {
            $course->users()->attach($user);
            Mail::to($course->users)->send(
                new Course($course)
            );
           $user = User::findOrFail( $user);
            
            return redirect('');
        } else {
            return abort(403, 'you alrady in');
        }
    }

    // public function profile ($id) {
    //     // $user = new User();
    //     // $user = Auth::user()->id;
    //     $profile = User::findOrFail($id);
    //     dd($profile);
    //     return view('user' , ['profile' => $profile]);
    // }
}
