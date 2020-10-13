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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Cache::remember('teachers', now()->addSeconds(300), function () {
            return Teachers::all();
        });
        //dd(\App\Teachers::all());
        return view('teachers' ,
            [
            'teachers' => $teachers
            ]
         );
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

    public function search(Request $request)
    {
        $request->validate([
            'q' => 'required',
        ]);

        $q = $request->q;

        $filterTeachered = Cache::remember('teachers' , 10 , function () use($q) {
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
        $teacher = Cache::remember('teacher', now()->addSeconds(10), function () use ($id) {
            return Teachers::findOrFail($id);
        });

        return view('teachers-single', ['teacher' => $teacher]);
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
}
