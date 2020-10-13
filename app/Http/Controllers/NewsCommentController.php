<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComment;
use App\News;
use Illuminate\Http\Request;

class NewsCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store']);
    }
    public function __invoke  (News $news , StoreComment $request) {
    
        
    
        $news->comments()->create([
            'content' => $request->input('content'),
            'user_id' => $request->user()->id,
            
        ]);

      

       $request->session()->flash('status', 'Comment was created!');

        return redirect()->back();
    }
}
