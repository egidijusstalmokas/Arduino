

 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
         <div id="up" style="height:70px;">@include('layouts.headline')</div>
        <div style="height:59px;">@include('layouts.menu')</div>
        <div style="height:100%;">@include('layouts.content')</div>
        <div id="down">@include('layouts.footer')</div>


    </body>
</html>
