
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
.fencecon {
  margin-left: 19%;
  width: 70%;
  font-size: 15px;
}

  


@media (max-width: 800px) {
  .fencecon {
    width: 90%;
    margin-left: 5%;
    margin-right: 5%;
  }
  
    
}
  

  </style>         <!-- Styles -->
        
    </head>
    <body>
<div>@include('layouts.fenceheadline')</div>
<div style="height:59px;">@include('layouts.fencemenu')</div>

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
<div class="fencecon">
        <div  class="row">
         <h1>Kontaktai</h1>
        </div>
        <div class="row">
         <p>Jūsų kontaktiniai duomenys</p>
         <p>Jei norite galime sukurti kontaktine formą, pridėti žemėlapį su pažymėtu jūsų adresu.</p>

        </div>
</div>



    </body>
</html>