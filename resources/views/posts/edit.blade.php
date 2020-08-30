<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
      
    </head>
    <body>
        <div style="height:70px;">@include('layouts.headline')</div>

<div style="width: 80%; margin-left: 10%; margin-bottom: 50px;">


<form id="forma" action="/post/{{ $postq->id }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH') 
  <div class="row">
    <div class="col-8 offset-2">
      <div style="margin-bottom: 25px;" class="row">
        <h1>Edit Project</h1>
      </div>
        <div style="margin-bottom: 25px;" class="row">
            <label style="font-size: 17px;">Project title</label>
            <textarea class="form-control" id="title"  name="title">{{ old('title') ?? $postq->title }}</textarea>

        </div>

        <div style="margin-bottom: 25px;" class="row">
            <label>Project instruction</label>
              <textarea id="instruction"  name="instruction">{{ old('instruction') ?? $postq->instruction }}</textarea>

            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <script>
                CKEDITOR.replace( 'instruction' );
            </script>
        </div>

        <div style="margin-bottom: 25px;" class="row">
            <label for="post_photo_1" class="col-md-4 col-form-label ">Project photo 1</label>
              <input type="file" class="form-control-file" id="post_photo_1" name="post_photo_1"> 
               @error('image')
               <strong>{{ $errors->first('image') }}</strong>
              @enderror  
        </div>

        <div style="margin-bottom: 25px;" class="row">
            <label for="post_photo_2" class="col-md-4 col-form-label ">Project photo 2</label>
              <input  type="file" class="form-control-file" id="post_photo_2" name="post_photo_2"> 
               @error('image')
               <strong>{{ $errors->first('image') }}</strong>
              @enderror  
        </div>

         <div style="margin-bottom: 25px;" class="row">
            <label for="post_photo_3" class="col-md-4 col-form-label ">Project photo 3</label>
              <input  type="file" class="form-control-file" id="post_photo_3" name="post_photo_3"> 
               @error('image')
               <strong>{{ $errors->first('image') }}</strong>
              @enderror  
        </div>

         <div style="margin-bottom: 25px;" class="row">
            <label for="post_photo_4" class="col-md-4 col-form-label ">Project photo 4</label>
              <input  type="file" class="form-control-file" id="post_photo_4" name="post_photo_4"> 
               @error('image')
               <strong>{{ $errors->first('image') }}</strong>
              @enderror  
        </div>

         <div style="margin-bottom: 25px;" class="row">
            <label for="post_photo_5" class="col-md-4 col-form-label ">Project photo 5</label>
              <input value="{{ old('post_photo_5') ?? $postq->post_photo_5 }}"  type="file" class="form-control-file" id="post_photo_5" name="post_photo_5"> 
               @error('image')
               <strong>{{ $errors->first('image') }}</strong>
              @enderror  
        </div>

        <div style="margin-bottom: 25px;" class="row">
            <label for="code" class="col-md-4 col-form-label ">Code</label>
              <textarea value="{{ old('code') ?? $postq->code }}"  class="form-control" id="code" name="code"></textarea>
        </div>


        <div style="margin-bottom: 25px;" class="row">
            <label for="video_url" class="col-md-4 col-form-label ">Video URL</label>
              <input value="{{ old('video_url') ?? $postq->video_url }}"  type="text" class="form-control" id="video_url" name="video_url"> 
        </div>


            <div style="margin-bottom: 25px;" class="row pt-3">
              <button class="btn btn-primary">Edit project</button>
            </div>
          </div>
      </div>
    </form>

</div>


        
    </body>
</html>
