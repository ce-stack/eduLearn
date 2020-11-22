<?php

namespace App\Http\Controllers;

use App\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TeachersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $teachers = Cache::remember('teachers', now()->addSeconds(300), function () {
            return Teachers::all();
        });
        //dd(\App\Teachers::all());
        return view(
            'teachers',
            [
                'teachers' => $teachers
            ]
        );
    }
    public function search(Request $request)
    {
        $request->validate([
            'q' => 'required',
        ]);

        $q = $request->q;

        $filterTeachered = Cache::remember('teachers', 10, function () use ($q) {
            return Teachers::where('name', 'like', '%' . $q . '%')->get();
        });

        $filterTeacher = $filterTeachered;

        if ($filterTeacher->count()) {
            return view('teachers')->with([
                'teachers' => $filterTeacher
            ]);
        } else {
            return redirect('teachers-no-filter')->with(['status' => 'search failed try with another name ']);
        }
    }
    public function show($id)
    {
        $teacher = Cache::remember('teacher', now()->addSeconds(10), function () use ($id) {
            return Teachers::findOrFail($id);
        });

        return view('teachers-single', ['teacher' => $teacher]);
    }
}
