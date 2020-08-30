<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Lesson;

class AdminController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        if(auth()->user())
        {
            if(auth()->user()->isAdmin())
            {
            return view('admin');
            }
            return abort(404);
        }
        return abort(404);
    }

    public function showPosts()
    {
    	$posts = Post::all('id', 'title');
        $lessons = Lesson::all('id', 'title');

            if(auth()->user())
        {
            if(auth()->user()->isAdmin())
            {
            return view('admin', compact('posts', 'lessons'));
            }
            return abort(404);
        }
        return abort(404);
    }
    

}
