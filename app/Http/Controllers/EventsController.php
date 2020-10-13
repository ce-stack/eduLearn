<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class EventsController extends Controller
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
        $event = Cache::remember('events', now()->addSeconds(300), function () {
            return Events::all();
        });
        return view('events', ['events' =>  $event]);
    }


    public function search(Request $request)
    {

        $request->validate([
            'q' => 'required',
        ]);

        $q = $request->q;

        $filterEventsed = Cache::remember('events' , 10 , function() use ($q) {
            return Events::where('name', 'like', '%' . $q . '%')->get();
        });

        $filterEvents = $filterEventsed;

        if ($filterEvents->count()) {
            return view('events')->with([
                'events' => $filterEvents,

            ]);
        } else {
            return redirect('events-no-filter')->with(['status' => 'search failed try with another name ']);
        }
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

        $events = Cache::remember('event', now()->addSeconds(10), function () use ($id) {
            return Events::findOrFail($id);
        });
        return view('events-details', ['event' => $events]);
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
