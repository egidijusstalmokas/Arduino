<head>
	<link href="{{ asset('css/bootstrapcdn.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
	<link href="{{ asset('css/headline_menu.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <link href="{{ asset('css/content.css') }}" rel="stylesheet">
  <script src="{{ asset('js/galleria.min.js') }}" crossorigin="anonymous"></script>

  <script src="{{ asset('js/prism.js') }}" crossorigin="anonymous"></script>
   <link href="{{ asset('css/prism.css') }}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

	 <style>
body {
  width: 100%;
}
.medt {
  margin-left: 19%;
  width: 70%;
  font-size: 15px;
}
.galleria {
    height: 450px;
    width: 100%;
  }

@media (max-width: 1300px) {
  .galleria {
    width: 100%;
  }
}


@media (max-width: 1100px) {
.galleria {
    height: 400px;
    width: 100%;
  }




@media (max-width: 1000px) {
.galleria {
    height: 370px;
    width: 100%;
  }
  


@media (max-width: 800px) {
  .medt {
    width: 90%;
    margin-left: 5%;
    margin-right: 5%;
  }
  .galleria {
    height: 350px;
    width: 98%;
  }
    


@media (max-width: 600px) {
.galleria {
    height: 300px;
    width: 98%;
  }

@media (max-width: 500px) {
.galleria {
    height: 270px;
    width: 98%;
  }
  

@media (max-width: 400px) {
.galleria {
    height: 250px;
    width: 98%;
}

@media (max-width: 350px) {
.galleria {
    height: 200px;
    width: 98%;
}
  

  </style>


</head> 
 <div>@include('layouts.fenceheadline')</div>
<div style="height:59px;">@include('layouts.fencemenu')</div>
<!-- Side menu bar/ height: 100% -->

<div style="font-size: 15px" id="side" class="w3-sidebar w3-light-grey w3-bar-block" >
 
    <a style="padding: 25px; border: 1px solid grey; margin: 0px;" class="w3-bar-item w3-button" href="/fence/skat">Skardinės tvoros</a>
    <a style="padding: 25px; border: 1px solid grey; margin: 0px;" class="w3-bar-item w3-button" href="/fence/medt">Medinės tvoros</a> 
    <a style="padding: 25px; border: 1px solid grey; margin: 0px;" class="w3-bar-item w3-button" href="/fence/segt">Segmentinės tvoros</a> 
    <a style="padding: 25px; border: 1px solid grey; margin: 0px;" class="w3-bar-item w3-button" href="/fence/mett">Metalinės tvoros</a> 
    <a style="padding: 25px; border: 1px solid grey; margin: 0px;" class="w3-bar-item w3-button" href="/fence/kiev">Kiemo vartai</a> 
    <a style="padding: 25px; border: 1px solid grey; margin: 0px;" class="w3-bar-item w3-button" href="/fence/garv">Garažo vartai</a> 
    <a style="padding: 25px; border: 1px solid grey; margin: 0px;" class="w3-bar-item w3-button" href="/fence/autv">Automatika</a> 
    <a style="padding: 25px; border: 1px solid grey; margin: 0px;" class="w3-bar-item w3-button" href="/fence/kelu">Kelio užtvaros</a> 
   
</div>

<!-- Side menu bar end -->


<div class="medt" id="medt">

  <div class="row">
    <h1>Medinės tvoros</h1>
    <p>(teksto pavyzdys)Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
  </div>
<div class="row">
    <div style="height: 450px;width: 1100px;" class="galleria mb-5">
      <img src="https://homepages.cae.wisc.edu/~ece533/images/monarch.png">
      <img src="https://homepages.cae.wisc.edu/~ece533/images/monarch.png">
      <img src="https://homepages.cae.wisc.edu/~ece533/images/monarch.png">
      <img src="https://homepages.cae.wisc.edu/~ece533/images/monarch.png">
      <img src="https://homepages.cae.wisc.edu/~ece533/images/monarch.png">
    </div>
        <script>
            (function() {
                Galleria.loadTheme('/js/twelve/galleria.twelve.js');
                Galleria.run('.galleria');
            }());
        </script>
</div>
</div>



