<?php 
		header("Content-type: text/html;charset=\"utf-8\"");
		if($_GET)
		{
			$temp=array();
			$temp=$_GET;
			$numero=$temp["numero"];
			if(is_numeric($numero))
			{
				if($numero>1&&$numero==round($numero,0))
				{
					$cont=2;
					$raiz=floor(sqrt($numero));
					$bandera=false;
					while($cont<=$raiz&&$bandera==false)
					{
						$temp=$numero/$cont;
						if($temp==round($temp,0))
						{
							$bandera=true;
						}
						$cont++;
					}
					if($bandera==true)
					{
						echo "No es primo<br>";
					}
					else{
						echo "Es primo<br>";
					}

				}
				else{
					echo "Ingrese un numero entero diferente a 1.<br>";
				}
			}
			else
			{
				echo "No es un número.<br>";
			}
			
		}
		
?>
<form>
	<label for="numero">Ingrese un numero:</label>
	<input type="text" name="numero">
	<input type="submit" name="enviar">
</form>