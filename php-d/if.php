<?php
	header("Content-type: text/html;charser=\"utf-8\"");
	$pp="pepe";
	if($pp=="pepe" && $pp=="kk")
	{
		echo " es pepe";
	}
	else
	{
		echo "no es pepe";
	}
	$edad=16;
	if($edad<18)
	{
		echo "<h1>$pp No es mayor de edad</h1>";
	}
	else
	{
		echo $pp." Puede entrar";
	}

 ?>