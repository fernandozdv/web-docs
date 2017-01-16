<?php
	header('Content-type:text/html;charset="utf-8"');
	if(array_key_exists('username',$_POST) OR array_key_exists('password', $_POST))
	{
		$enlace =mysqli_connect("localhost","root","","usuarios");
		if(mysqli_connect_error())
		{
			die("ERROR XD");
		}
		if($_POST['username']=='')
		{
			echo "campo username obligatorio.";
		}
		else if($_POST['password']=='')
		{
			echo "campo contraseñá obligatoria";
		}
		else
		{
			//bien xd
			$query="SELECT username FROM usuariostb WHERE username='".$_POST['username']."'";
			$result=mysqli_query($enlace,$query);
			if(mysqli_num_rows($result)>0)
			{
				echo "Usuario ya registrado e.e";
			}
			else
			{
				$query="INSERT INTO usuariostb(username,password) VALUES('".$_POST['username']."','".$_POST['password']."')";
				if(mysqli_query($enlace,$query))
				{
					echo "registro exitoso";
				}
				else
				{
					echo "Error al registrar.";
				}
			}
		}
		mysqli_close($enlace);
	}


	/*$enlace =mysqli_connect("localhost","root","","usuarios");
	if(!$enlace)
	{
		echo "Error: No se pudo conectar a MySQL.".PHP_EOL;
		echo "Depuración:".mysqli_connect_errno().PHP_EOL;

	}
	else
	{
		echo "ÉXITO!".PHP_EOL;
		echo "Información del host:".mysqli_get_host_info($enlace).PHP_EOL;
		OBTENIENDO DATOS
		$query= "SELECT * from usuariostb";
		if($result=mysqli_query($enlace,$query))
		{
			$fila=mysqli_fetch_array($result);
			echo "Nombre de usuario: ".$fila['username'];
			echo " Contraseña: ".$fila['password'];
		}
		
		$query="INSERT INTO usuariostb(username,password) VALUES('nuevo','23')";
		$query="UPDATE usuariostb SET password='555' WHERE id=5";
		$query="ALTER TABLE usuariostb ADD email TEXT";
 		$query="SELECT * FROM usuariostb";
		if($result=mysqli_query($enlace,$query))
		{
			while($fila=mysqli_fetch_array($result))
			{
				echo $fila['username']."<br>";
			}
		}
	}*/
	//mysqli_close($enlace);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>FORM XD</title>
 </head>
 <body>
 	<h1>Registro</h1>
 	<form method="POST">
 		<input type="text" name="username">
 		<input type="password" name="password">
 		<input type="submit" value="Registrar">
 	</form>
 </body>
 </html>