<html>
  <head>
    <title>JSON Custom Search API Example</title>

    <style>
      body {
        width: 100%;
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 11%, rgba(0,212,255,1) 100%);
      }

      .full-container {
        width: 100%;
      }

      .info-block {
        background-color: white;
        width: 30%;
        height: 500px;
        border-radius: 7px;
        border: 1px solid darkgrey;
        padding: 15px;
      }

       .city {
        font-size: 27px;
        font-weight: bold;
      }

      .temp {
        font-size: 20px;
        font-weight: 200px;
      }

      .temp-info {
        font-size: 20px;
        font-weight: 200px;
      }

    </style>
  </head>
  <body>

<div class="full-container">
  <div class="info-block">
    <div class="city">Miestas<div>
      <hr>
    <div class="temp">Temperatūra</div>
    <div class="temp-info">{{ $tempreal }} celcijumi</div>
    <hr>
    <div class="row">
      <div class="col">
        <div class="temp">Vėjo stiprumas</div>
        <div class="temp-info">{{ $winds }} metrų per sekundę</div>
      </div>
    </div>
    <hr>
    <div class="temp">Drėgnumas</div>
    <div class="temp-info">{{ $humidity }} procentų.</div>
    <hr>


  </div>


  
</div>
 
  </body>
</html>
