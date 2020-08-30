<head>
<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
<link rel="stylesheet" href="{{ asset('css/control_panel.css') }}">
</head>

@include('layouts.app')

<div style="margin-top: -45px; border-top: 2px solid #BA2F11" class="all">
<div id="side" class="w3-sidebar w3-light-grey w3-bar-block" >
  <h3 class="w3-bar-item">Menu</h3>
  	
</div>

<div style="margin-left: 17%; border-left: 5px solid #BA2F11;" class="content">
	<div class="row">
	<div style="padding-right: 0px; border-right: 5px solid #BA2F11;" class="col-8">
    	<div class="control_panel_headline">
    		<a href="#">
    			<img style="width: 35px; height: 35px;" src="/svg/create.svg" alt="My SVG Icon">
    		Create new</a>
        </div>
          <div class="create_options d-flex">
            <div class="col-sm for_options">
              <a href="/lesson/create"><img style="width: 45px; height: 45px;" src="/svg/lesson.svg" alt="My SVG Icon">Create new lesson</a> 
            </div>
            <div class="col-sm for_options">
              <a href="/post/create"><img style="width: 45px; height: 45px;" src="/svg/project.svg" alt="My SVG Icon">Create new project</a> </div>
            <div class="col-sm for_options"></div>
          </div>

          <div class="control_panel_headline">
        <a href="#">
          <img style="width: 35px; height: 35px;" src="/svg/edit.svg" alt="My SVG Icon">
       Edit/Delete</a>
        </div>
          <div class="create_options d-flex">
            <div class="col-sm for_options">
              <a onclick="showLessons()" href="#"><img style="width: 45px; height: 45px;" src="/svg/lesson.svg" alt="My SVG Icon">Lessons</a> 
            </div>
            <div class="col-sm for_options">
              <a onclick="showProjects()" href="#"><img style="width: 45px; height: 45px;" src="/svg/project.svg" alt="My SVG Icon">Projects</a> </div>
            <div class="col-sm for_options"></div>
          </div>
	</div>

    <div class="col-4" style="padding-left: 0px;">
      
      <div id="showProjects">
      <h3 style="text-align: center; margin: 5px;">Projects</h3>
      @foreach($posts AS $post)
      <div style="margin: 0px;" class="row projects_list">
        <div class="col-6">
      <a class="align-middle" href="/post/{{ $post->id }}/edit">
          {!!$post->title!!}
        </a>
      </div>
      <div class="col-2">
        <a href="/post/{{ $post->id }}"><img style="width: 25px; height: 25px; float: right;" src="/svg/view-black.svg"></a>
      </div>
      <div class="col-2">
        <a href="/post/{{ $post->id }}/edit"><img style="width: 25px; height: 25px; float: right;" src="/svg/edit-black.svg"></a>
      </div>
      <div class="col-2">
        <a href="/post/{{ $post->id }}/delete"><img style=";width: 25px; height: 25px; float: right;" src="/svg/delete.svg"></a>

      </div>
    </div>
      @endforeach
    </div>

    <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">Example Modal</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
     labas
    </div>
  </div>
  <div id="overlay"></div>
  

      <div id="showLessons">
        <h3 style="text-align: center; margin: 5px;">Lessons</h3>
      @foreach($lessons AS $lesson)
      <div style="margin: 0px;" class="row projects_list">
        <div class="col-6">
      <a class="align-middle" href="/lesson/{{ $lesson->id }}/edit">
          {!!$lesson->title!!}
        </a>
      </div>
      <div class="col-2">
        <a href="/lesson/{{ $lesson->id }}"><img style="width: 25px; height: 25px; float: right;" src="/svg/view-black.svg"></a>
      </div>
      <div class="col-2">
        <a href="/lesson{{ $lesson->id }}/edit"><img style="width: 25px; height: 25px; float: right;" src="/svg/edit-black.svg"></a>
      </div>
      <div class="col-2">
        <a href="/lesson/{{ $lesson->id }}/delete"><img style=";width: 25px; height: 25px; float: right;" src="/svg/delete.svg"></a>
      </div>
    </div>
      @endforeach
    </div>

<script>
    function showProjects() {
   document.getElementById('showProjects').style.display = "block";
   document.getElementById('showLessons').style.display = "none";
}
  function showLessons() {
    document.getElementById('showProjects').style.display = "none";
    document.getElementById('showLessons').style.display = "block";
  }
</script>

    </div>
	</div>
</div>
</div>