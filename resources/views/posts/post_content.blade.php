<head>
	<script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
	<link href="{{ asset('css/headline_menu.css') }}" rel="stylesheet">
  <link href="{{ asset('css/post.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <link href="{{ asset('css/content.css') }}" rel="stylesheet">
  <script src="{{ asset('js/galleria.min.js') }}" crossorigin="anonymous"></script>

	


</head>
<!-- Side menu bar/ height: 100% -->
<div id="side" class="w3-sidebar w3-light-grey w3-bar-block" >
  <h3 class="w3-bar-item">Arduino</h3>
  	@foreach($postA AS $post) 
 		<a href="/post/{{ $post->id }}" class="{{ (request()->segment(2) == $post->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button">{!!$post->title!!}</a> 
	@endforeach
 <h3 class="w3-bar-item">Electronics</h3>
  @foreach($postE AS $post) 
    <a href="/post/{{ $post->id }}" class="{{ (request()->segment(2) == $post->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button">{!!$post->title!!}</a> 
  @endforeach
   <h3 class="w3-bar-item">Robotics</h3>
  @foreach($postR AS $post) 
    <a href="/post/{{ $post->id }}" class="{{ (request()->segment(2) == $post->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button">{!!$post->title!!}</a> 
  @endforeach
   <h3 class="w3-bar-item">Automatic</h3>
  @foreach($postAu AS $post) 
    <a href="/post/{{ $post->id }}" class="{{ (request()->segment(2) == $post->id ) ? 'active_side_item' : '' }} w3-bar-item w3-button">{!!$post->title!!}</a> 
  @endforeach
</div>
<!-- Side menu bar end -->

<!-- Page Content -->

<div class="post-container p-3">
  <div class="row justify-content-center mb-3 ">
		<h1 class="title">{!!$postq->title!!}</h1>
	</div>
<!-- Image slidshow -->
    <div class="galleria mb-5">
      <img src="/storage/{{ $postq->post_photo_1 }}">
      <img src="/storage/{{ $postq->post_photo_2 }}">
      <img src="/storage/{{ $postq->post_photo_3 }}">
      <img src="/storage/{{ $postq->post_photo_4 }}">
      <img src="/storage/{{ $postq->post_photo_5 }}">
    </div>
        <script>
            (function() {
                Galleria.loadTheme('/js/twelve/galleria.twelve.js');
                Galleria.run('.galleria');
            }());
        </script>
<!-- Image slidshow end -->     

<div class="content_text" style="line-height: 100%;" >
  <div >{!!$postq->instruction!!}</div>
</div>

<div class="code">
  {!!$postq->code!!}
</div>

<div class="content_text">
    <h2 class="m-3">Projekto vaizdo įrašas</h2>
    <iframe src="{{$postq->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

