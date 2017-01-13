	<?php 
		header("Content-type: text/html;charset=\"utf-8\"");
		$arr= array("gloria","pedro","mario");
		$arr2["leche"]="gloria";
		$arr2["nombre1"]="pedro";
		$arr2["nombre2"]="mario";
		for ($i=0;$i<sizeof($arr);$i++)
		{
			echo "<p>".$arr[$i]."</p>";
		}
		echo "<br><br>";
		foreach ($arr2 as $key => $value) {
			echo"<h1>".$key."</h1>";
			echo "<p>".$value."</p>";

		}
	 ?>