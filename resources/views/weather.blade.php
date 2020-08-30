<html>
  <head>
    <title>JSON Custom Search API Example</title>
  </head>
  <body>


<form id="forma" action="/weathercity" method="post">
  @csrf
  <div class="row">
    <div class="col-8 offset-2">

        <div style="margin-bottom: 25px;" class="row">
            <label style="font-size: 17px;">Įveskite miestą</label>
            <input type="text" class="form-control" id="city"  name="city">
        </div>

            <div style="margin-bottom: 25px;" class="row pt-3">
              <button class="btn btn-primary">SUŽINOTI PROGNOZĘ</button>
            </div>
          </div>
      </div>
    


 
  </body>
</html>
