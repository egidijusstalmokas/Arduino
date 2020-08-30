<?php

namespace App\Http\Controllers;


use App\User;
use App\Post;
use App\Lesson;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Routing\Redirector;

class PostsController extends Controller
{


    public function create()

    {
        if(auth()->user())
        {
            if(auth()->user()->isAdmin())
            {
    	   return view('posts.create');
            }
            return abort(404);
        }
        return abort(404);
    }

    public function store()
    {
    	$data = request()->validate([
    		'title' => 'required',
            'instruction' => 'required',
            'code' => 'required',
            'video_url' => 'required', 
            'type'	=> 'required',	
            'post_photo_1' => ['required', 'image'],      
            'post_photo_2' => ['required', 'image'],        
            'post_photo_3' => ['required', 'image'],        
            'post_photo_4' => ['required', 'image'],       
            'post_photo_5' => ['required', 'image'],
          

    	]);


        $imagePath1 = request('post_photo_1')->store('uploads', 'public');
        $imagePath2 = request('post_photo_2')->store('uploads', 'public');
        $imagePath3 = request('post_photo_3')->store('uploads', 'public');
        $imagePath4 = request('post_photo_4')->store('uploads', 'public');
        $imagePath5 = request('post_photo_5')->store('uploads', 'public');

    	auth()->user()->posts()->create([
            'title' => $data['title'],
            'instruction' => $data['instruction'],
            'video_url' => $data['video_url'],
            'type' => $data['type'],
            'code' => $data['code'],
            'post_photo_1' => $imagePath1,
            'post_photo_2' => $imagePath2,
            'post_photo_3' => $imagePath3,
            'post_photo_4' => $imagePath4,
            'post_photo_5' => $imagePath5,
           

        ]);

        return redirect('/post/create');

    }

    public function getposts()
    {
        return redirect('/post/1');
    }


     public function show($id)
    {
      
        $postA = Post::where('type', 'arduino')->get();
        $postE = Post::where('type', 'electronics')->get();
        $postAu = Post::where('type', 'automatics')->get();
        $postR = Post::where('type', 'robotics')->get();
        $postq = Post::findOrFail($id);

        $lessonA = Lesson::where('type', 'arduino')->get();
        $lessonE = Lesson::where('type', 'electronics')->get();
        $lessonAu = Lesson::where('type', 'automatics')->get();
        $lessonR = Lesson::where('type', 'robotics')->get();

       
         return view('posts.showpost', compact('postA', 'postE', 'postAu',  'postR', 'postq', 'lessonA', 'lessonE','lessonAu', 'lessonR'));
    }


    public function edit($id)
    {
     
        $postq = Post::findOrFail($id);

        if(auth()->user())
        {
            if(auth()->user()->isAdmin())
            {
            return view('posts.edit')->with('postq', $postq);     
            }
            return abort(404);
        } 
        return abort(404);
    }


    

    public function update($id)
    {
        $data = request()->validate([
            'title' => 'required',
            'instruction' => 'required',
            'video_url' => 'required',
            'type' => '',
            'post_photo_1' => '',
            'post_photo_2' => '',
            'post_photo_3' => '',
            'post_photo_4' => '',
            'post_photo_5' => '',

        ]);

        $postq = Post::findOrFail($id);
        $postq->update($data);

        return redirect("/post/{$postq->id}");
    
    }

     public function delete($id)
    {
        $postq = Post::findOrFail($id);

        if(auth()->user())
        {
            if(auth()->user()->isAdmin())
            {
            return view("posts.delete", compact('postq'));
            }
            return abort(404);
        }
        return abort(404);
    }

    public function deleteconfirm($id)
    {   
        $postq = Post::findOrFail($id);

        if(auth()->user())
        {
            if(auth()->user()->isAdmin())
            {
                $postq->delete();
                return redirect("admin");
            }
                return abort(404);
        }
       return view('auth.login');
    }

}