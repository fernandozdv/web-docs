	<?php 
		header("Content-type: text/html;charset=\"utf-8\"");
		$arr=array("pepito","jose","claudio");
		$i=0;
		while($i<sizeof($arr))
		{
			$numero=5*$i;
			echo "<p>".$arr[$i]."</p>";
			$i+=1;
		}

	 ?>