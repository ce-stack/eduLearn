<?php

namespace App\Http\Controllers;

use App\Events;
use App\Mail\EventSubs;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

    public function show($id)
    {

        $user = new User();
        $user = Auth::user()->id;
        $userSubsEvent = DB::select(DB::raw("select * from user_event where user_id = '$user' AND events_id = '$id' "));
        $events = Cache::remember('event', now()->addSeconds(10), function () use ($id) {
            return Events::findOrFail($id);
        });
        return view('events-details', ['event' => $events , 'userSubsEvent' => $userSubsEvent]);
    }

    public function subs(Request $request, Events $event)
    {
        $event = Events::find($request->input('event_id'));
        $user = new User();
        $user = Auth::user()->id;

        $user_event = DB::table('user_event')
            ->where('user_id', '=', Auth::user()->id)
            ->where('events_id', '=', $event->id)
            ->first();
        if (is_null($user_event)) {
            $event->users()->attach($user);
            Mail::to($event->users)->queue(
                new EventSubs($event)
            );
            $user = User::findOrFail($user);

            return redirect('')->with('success' , 'you booked a event check your email');
        } else {
            return abort(403, 'you alrady in');
        }
    }
}
