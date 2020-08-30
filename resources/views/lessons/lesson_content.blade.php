<head>
	<link href="{{ asset('css/bootstrapcdn.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
	<link href="{{ asset('css/headline_menu.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <link href="{{ asset('css/content.css') }}" rel="stylesheet">
  <script src="{{ asset('js/galleria.min.js') }}" crossorigin="anonymous"></script>
  <link href="{{ asset('css/post.css') }}" rel="stylesheet">

  <script src="{{ asset('js/prism.js') }}" crossorigin="anonymous"></script>
   <link href="{{ asset('css/prism.css') }}" rel="stylesheet">

	


</head>
<!-- Side menu bar/ height: 100% -->
<div id="side" class="w3-sidebar w3-light-grey w3-bar-block" >
  <h3 class="w3-bar-item">Arduino</h3>
  	@foreach($lessonA AS $lesson) 
 		<a class="{{ (request()->segment(2) == $lesson->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button" href="/lesson/{{ $lesson->id }}" >{!!$lesson->title!!}</a> 
	@endforeach
   <h3 class="w3-bar-item">Electronics</h3>
    @foreach($lessonE AS $lesson) 
    <a href="/lesson/{{ $lesson->id }}" class="{{ (request()->segment(2) == $lesson->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button">{!!$lesson->title!!}</a> 
  @endforeach
   <h3 class="w3-bar-item">Robotics</h3>
    @foreach($lessonR AS $lesson) 
    <a href="/lesson/{{ $lesson->id }}" class="{{ (request()->segment(2) == $lesson->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button">{!!$lesson->title!!}</a> 
  @endforeach
   <h3 class="w3-bar-item">Automatic</h3>
    @foreach($lessonAu AS $lesson) 
    <a href="/lesson/{{ $lesson->id }}" class="{{ (request()->segment(2) == $lesson->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button">{!!$lesson->title!!}</a> 
  @endforeach
</div>
<!-- Side menu bar end -->

<!-- Page Content -->
<div class="post-container p-3">
  <div class="row justify-content-center mb-3 ">
		<h1 class="title">{!!$lessonq->title!!}</h1>
	</div>

<div class="content_text">
  {!!$lessonq->instruction!!}
</div>

<div class="content_text">
    <h2 class="m-3">Pamokos vaizdo įrašas</h2>
    <iframe src="{{$lessonq->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>

