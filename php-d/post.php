<?php 
		header("Content-type: text/html;charset=\"utf-8\"");
		if($_POST)
		{
			$usuarios=array("Jose","Pepe","Antonio");
			$bandera=false;
			foreach ($usuarios as $value) {
				if($value==$_POST["nombre"]){
					$bandera=true;
				}
			}
			if($bandera)
			{
				echo "<h1>Bienvenido ".$_POST["nombre"]."</h1>";
			}
			else
			{
				echo "<h1>Incorrecto</h1>";
			}

		}		
?>
<form method="POST">
	<label for="numero">Cuál es tu nombre?</label>
	<input type="text" name="nombre">
	<input type="submit" name="enviar">
</form>