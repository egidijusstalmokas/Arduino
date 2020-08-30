<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function create()
    {
        return view('projects.create'); 
    }

    public function store()	
    {
    $data = request()->validate([
            'title' => 'required',
            'components_list' => 'required',
            'instruction' => 'required',
            'schema_caption' => 'required',
            'code' => 'required',
            'schema' => ['required', 'image'],
        ]);

        $imagePath = request('schema')->store('uploads', 'public');

        auth()->user()->projects()->create([
            'title' => $data['title'],
            'components_list' => $data['components_list'],
            'instruction' => $data['instruction'],
            'schema_caption' => $data['schema_caption'],
            'code' => $data['code'],
            'schema' => $imagePath,

        ]);
    	
            dd(request()->all());
    }
}
