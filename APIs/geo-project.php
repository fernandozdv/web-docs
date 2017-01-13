<?php
header("Content-type:text/html;charset=\"utf-8\"");
  if($_GET)
  {
      $obtener=$_GET;
      $origen=str_replace(" ", "+", $obtener["origen"]);
      $destino=str_replace(" ", "+", $obtener["destino"]);
      $urlo=file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$origen."&key=AIzaSyC3Tlh595WARHWHwxpn874Y6QV8dZlym2E");
      $urld=file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$destino."&key=AIzaSyC3Tlh595WARHWHwxpn874Y6QV8dZlym2E");
      $arrayo=json_decode($urlo,true);
      $arrayd=json_decode($urld,true);
      $latitudo= $arrayo["results"]["0"]["geometry"]["location"]["lat"];
      $longitudo= $arrayo["results"]["0"]["geometry"]["location"]["lng"];
      $latitudd= $arrayd["results"]["0"]["geometry"]["location"]["lat"];
      $longitudd= $arrayd["results"]["0"]["geometry"]["location"]["lng"];
      $cororigen="Origen. Latitud:".$latitudo." Longitud:".$longitudo;
      $cordestino="Destino. Latitud:".$latitudd." Longitud:".$longitudd;
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style type="text/css">
       body{
        background: url(ruta.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      height: 100%;
        margin: 0;
        padding: 0;
      }
      html{
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #cont{
        text-align:center;
        margin-top:175px;
        width:400px;
      }
      .container-fluid{
        margin-top:300px;
      }
      #origen{
        border-color:green;
        color:green;
      }
      #divorigen{
        color:white;
      }
      #destino{
        border-color:#B41333;
        color:#B41333;
      }
      #divdestino{
        color:white;
      }
      #form{
        margin-top:30px;
      }
      #map {
        height: 100%;
      }
      h1{
        color:#E2E1DD;
      }
      small{
        font-size:120%;
      }
    </style>
  </head>
<body>
  <div class="container" id="cont">
    <h1>¿Desea saber la ruta óptima?</h1>
    <form id="form">
      <fieldset id="divorigen" class="form-group">
        <label for="origen"><strong>Ingrese el origen:</strong></label>
        <input type="text" class="form-control" id="origen" name="origen" aria-describedby="origendesc" placeholder="Por ejm. Lima,Perú">
        <small id="origendesc" class="form-text text-muted">Dirección de partida.</small>
      </fieldset>
      <fieldset id="divdestino" class="form-group">
        <label for="destino"><strong>Ingrese el destino:</strong></label>
        <input type="text" class="form-control" id="destino" name="destino" aria-describedby="destinodesc" placeholder="Por ejm. Buenos Aires,Argentina">
        <small id="destinodesc" class="form-text text-muted">Dirección de destino</small>
      </fieldset>
      <button id="enviar" type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
    <div id="map" class="container-fluid"></div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <script>
       $("#map").hide();
       $("#enviar").submit(function(e){
          alert("xcxc");
          $("#map").show();
          function initMap() {

          https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyC3Tlh595WARHWHwxpn874Y6QV8dZlym2E
          var lato='<?php echo $latitudo ?>';
          var longo='<?php echo $longitudo ?>';
          var latd='<?php echo $latitudd ?>';
          var longd='<?php echo $longitudd ?>';
          var origen= {lat: parseFloat(lato), lng: parseFloat(longo)};
          var destino = {lat: parseFloat(latd), lng: parseFloat(longd)};

          var map = new google.maps.Map(document.getElementById('map'), {
            center: origen,
            scrollwheel: false,
            zoom: 7
          });

          var directionsDisplay = new google.maps.DirectionsRenderer({
            map: map
          });

          // Set destination, origin and travel mode.
          var request = {
            destination: destino,
            origin: origen,
            travelMode: 'DRIVING'
          };

          // Pass the directions request to the directions service.
          var directionsService = new google.maps.DirectionsService();
          directionsService.route(request, function(response, status) {
            if (status == 'OK') {
              // Display the route on the map.
              directionsDisplay.setDirections(response);
            }
          });
        }
       })


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3Tlh595WARHWHwxpn874Y6QV8dZlym2E&callback=initMap"
        async defer></script>
  </body>
</html>