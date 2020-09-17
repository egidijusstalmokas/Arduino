<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Lesson;
use Illuminate\Http\Request;

class IndexController extends Controller
{

      public function showPosts()
    {
      
        $postA = Post::where('type', 'arduino')->get();
        $postE = Post::where('type', 'electronics')->get();
        $postAu = Post::where('type', 'automatics')->get();
        $postR = Post::where('type', 'robotics')->get();
        $postONE = Post::find(1);
        $posts = Post::where('id', '>', 1)->get();
        $postALL = Post::all('id', 'title', 'type');
        

        $lessonA = Lesson::where('type', 'arduino')->get();
        $lessonE = Lesson::where('type', 'electronics')->get();
        $lessonAu = Lesson::where('type', 'automatics')->get();
        $lessonR = Lesson::where('type', 'robotics')->get();
          
         return view('index', compact('postALL', 'posts', 'postONE', 'postA', 'postE', 'postAu', 'postR', 'lessonA', 'lessonE','lessonAu', 'lessonR'));
    }

    public function about()
    {
        $postA = Post::where('type', 'arduino')->get();
        $postE = Post::where('type', 'electronics')->get();
        $postAu = Post::where('type', 'automatics')->get();
        $postR = Post::where('type', 'robotics')->get();
        $postONE = Post::find(1);
        $posts = Post::where('id', '>', 1)->get();
        $postALL = Post::all('id', 'title', 'type');
        

        $lessonA = Lesson::where('type', 'arduino')->get();
        $lessonE = Lesson::where('type', 'electronics')->get();
        $lessonAu = Lesson::where('type', 'automatics')->get();
        $lessonR = Lesson::where('type', 'robotics')->get();

        return view('aboutus', compact('postALL', 'posts', 'postONE', 'postA', 'postE', 'postAu', 'postR', 'lessonA', 'lessonE','lessonAu', 'lessonR'));
    }


    

 
 }
    


