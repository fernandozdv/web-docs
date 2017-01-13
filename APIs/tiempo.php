<?php
header("Content-type:text/html;charset=\"utf-8\"");
$prevision="";
$error="";

if($_GET)
{
$url= file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET["ciudad"]."&appid=1275d78a8670aa3d06703ac5fbdfb6cf&lang=es");
$array= json_decode($url,true);
$prevision="El tiempo en ".$_GET["ciudad"]." es actualmente: ".$array["weather"][0]["description"];
$temperatura=$array["main"]["temp"]-273;
$prevision.=". La temperatura es de ".intval($temperatura)."&deg;C";
$tempMin=$array["main"]["temp_min"]-273;
$tempMax=$array["main"]["temp_max"]-273;
$prevision.=" oscilando entre ".$tempMin."&deg;C de mínima y ".$tempMax."&deg;C de máxima.";
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>¿El Clima?</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style type="text/css">
    	body{
    		background: url(../php/parapente.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
    	}
    	.container{
    		text-align:center;
    		margin-top:175px;
    		width:450px;
    	}
    	input{
    		margin:20px 0;
    	}
    	#previsiontiempo{
    		margin-top:15px;
    	}
    </style>
  </head>
  <body>
    
  	<div class="container">
  		<h1>¿Qué tiempo hace?</h1>
  		<form>
  			<fieldset class="form-group">
  				<label for="ciudad">Introduce el nombre de una ciudad:</label>
  				<input type="text"  class="form-control" name="ciudad" id="ciudad">
  			</fieldset>
			<button type="submit" class="btn btn-primary" id="enviar">Enviar</button>
		</form>
		<div id="previsiontiempo">
			<?php
				if($prevision)
				{
					echo '<div class="alert alert-success" role="alert"><strong>'.$prevision.'</strong></div>';
				}
				elseif ($error!="") 
				{
					echo '<div class="alert alert-danger" role="alert"><strong>'.$error.'</strong></div>';
				}
			 ?>
		</div>
  	</div>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  </body>
</html>
