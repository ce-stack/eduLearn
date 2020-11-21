<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comments;
use App\Courses;
use Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
  

  public function comments($courseId) {
    $comments = Comments::whereCourses_id($courseId)->get();
    return response()->json(['status' , 'comments',$comments], 200);
  }

    public function store(Request $request)
    {
      $comment = new Comments();
      $comment->user_id = Auth::id();
      $comment->course_id = $request->course_id;
      $comment->body = $request->body;
      if($comment->save()) {
        if($request->ajax()) {
          return response()->json(['status' , 'success' , 'msg' => 'comment was added'],200);
        }
        Session::flash('success' , 'comment created');
        return Redirect::back();
      } else {
        
        return response()->json(['status' , 'failed' , 'msg' => 'comment creation failed'],422);
      }
      Session::flash('error' , 'comment creation failed');
      return Redirect::back();
      }

      public function index($id) {
        // Product
        // return BlogPost::with('comments' , 'user' , 'comments.user')
        // ->findOrFail($id);
        $comments = Comments::where('courses_id', $id)->get();
        return response()->json([$comments]);
      }
  }
