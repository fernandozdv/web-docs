<?php
header("Content-type:text/html;charset=\"utf-8\"");
$prevision="";
$error="";
function quitar_tildes($cadena) {
$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
$texto = str_replace($no_permitidas, $permitidas ,$cadena);
return $texto;
}
if($_GET)
{
	$ciudad=str_replace(' ','',$_GET["ciudad"]);
	$ciudad=quitar_tildes($ciudad);
	$file="http://es.weather-forecast.com/locations/".$ciudad."/forecasts/latest" ;
	$file_headers=@get_headers($file);
	if($file_headers[0]=='HTTP/1.1 404 Not Found')
	{
		$error="No hemos podido encontrar la ciudad";
	}
	else
	{	
		$pagina=file_get_contents($file);
		$array1=explode('1 - 3 Días:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">',$pagina);
		if(sizeof($array1)>1)
		{
			$array2=explode('</span></span></span></p><div class="forecast-cont"><div class="units-cont">',$array1[1]);
			if(sizeof($array2)>0)
			{
				$prevision=$array2[0];
			}
			else
			{
				$error="No hemos podido encontrar la ciudad";
			}
		
		}
		else
			{
				$error="No hemos podido encontrar la ciudad";
			}
	
	}

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
    		background: url(parapente.jpg) no-repeat center center fixed;
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
