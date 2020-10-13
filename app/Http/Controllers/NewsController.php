<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
//use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
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
        return view('blog', ['news' => News::withCount('comments')->get()]);
        // dd(\App\News::withCount('comments')->get());
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
     * @param  \App\News
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $newsAll =  News::with('comments', 'user', 'comments.user')->findOrFail($id);
        
//dd($newsAll);
        return view(
            'blog-details',
            [
                'newsAll' =>
                $newsAll
            ]

        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    public function search(Request $request)
    {


        $request->validate([
            'q' => 'required',
        ]);

        $q = $request->q;

        $filterNewsed = Cache::remember('news' , 10 , function() use ($q) {
            return News::where('name', 'like', '%' . $q . '%')->get();
        });

        $filterNews = $filterNewsed;

        if ($filterNews->count()) {
            return view('blog')->with([
                'news' => $filterNews,

            ]);
        } else {
            return redirect('blog-no-filter')->with(['status' => 'search failed try with another name ']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
