<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Post;
use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Routing\Redirector;

class LessonController extends Controller
{
      public function create()
    {
        if(auth()->user())
        {
            if(auth()->user()->isAdmin())
            {
            return view('lessons.create');
            }
            return abort(404);
        }
    	return abort(404);
    }

     public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
      
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
      
            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
 
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore); 
            $msg = 'Image successfully uploaded'; 
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
            // Render HTML output 
            @header('Content-type: text/html; charset=utf-8'); 
            echo $re;
        }
    }

    public function store()
    {
    	$lessonData = request()->validate([
    		'title' => 'required',
        'instruction' => 'required',
        'video_url' => 'required',
            'type'  => 'required',

    	]);

    	auth()->user()->lessons()->create([
            'title' => $lessonData['title'],
            'instruction' => $lessonData['instruction'],
            'video_url' => $lessonData['video_url'],
            'type' => $lessonData['type'],

          

        ]);

        return redirect('/lesson/create');

    }

     public function getlesson()
    {
        return redirect('/lesson/1');
    }

    public function show($id)
    {
      

        $lessonA = Lesson::where('type', 'arduino')->get();
        $lessonE = Lesson::where('type', 'electronics')->get();
        $lessonAu = Lesson::where('type', 'automatics')->get();
        $lessonR = Lesson::where('type', 'robotics')->get();
        $lessonq = Lesson::findOrFail($id);

        $postA = Post::where('type', 'arduino')->get();
        $postE = Post::where('type', 'electronics')->get();
        $postAu = Post::where('type', 'automatics')->get();
        $postR = Post::where('type', 'robotics')->get();

       
         return view('lessons.showlesson', compact('lessonA', 'lessonE', 'lessonAu', 'lessonR', 'lessonq', 'postA', 'postE', 'postAu',  'postR'));
    }

     public function edit($id)
    {
        $lessonq = Lesson::findOrFail($id);
        if(auth()->user())
        {
            if(auth()->user()->isAdmin())
            {
            return view('lessons.edit')->with('lessonq', $lessonq);
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
            'type' => 'required',
            

        ]);

        $lessonq = Lesson::findOrFail($id);
        $lessonq->update($data);

        return redirect("/lesson/{$lessonq->id}");
    }

      public function delete($id)
    {
        $lessonq = Lesson::findOrFail($id);
        if(auth()->user())
        {
            if(auth()->user()->isAdmin())
            {
            return view("lessons.delete", compact('lessonq'));
            }
            return abort(404);
        }
        return abort(404);
    }

    public function deleteconfirm($id)
    {
        $lessonq = Lesson::findOrFail($id);
        if(auth()->user())
        {
            if(auth()->user()->isAdmin())
            {
                $lessonq->delete();
                return redirect("admin");
            }
            return abort(404);
        }
        return view('auth.login');
    }
}
