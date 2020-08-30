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

    public function weather()
    {
        return view('weather');
    }

    public function weathercity()
    {

        $city = request('city');
        $apiurl = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q={$city}&appid=4944d7cdc918a2c5279955a77732e44c");
        $json = json_decode($apiurl, true);
        $temp =  $json['main']['temp'];
        $tempreal = $temp - 274;
        $winds = $json['wind']['speed'];
        $windd = $json['wind']['deg'];
        $humidity =  $json['main']['humidity'];




        return view('weatherbycity', compact('tempreal', 'winds', 'windd', 'humidity'));
    }

     public function fence()
    {

        return view('fences.fence');
    }

      public function fencepas()
    {

        return view('fences.fencepas');
    }

      public function fencecon()
    {

        return view('fences.fencecon');
    }

     public function skat()
    {

        return view('fences.skat');
    }

     public function medt()
    {

        return view('fences.medt');
    }

     public function segt()
    {

        return view('fences.segt');
    }

     public function mett()
    {

        return view('fences.mett');
    }

     public function kiev()
    {

        return view('fences.kiev');
    }

     public function garv()
    {

        return view('fences.garv');
    }

     public function autv()
    {

        return view('fences.autv');
    }

     public function kelu()
    {

        return view('fences.kelu');
    }

    

 
 }
    


