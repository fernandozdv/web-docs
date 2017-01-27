<?php 
		header("Content-type: text/html;charset=\"utf-8\"");
		$emailTo="alonso.reynoso@unmsm.edu.pe";
		$subject="Omar gay";
		$body="ggggggg";
		$headers="From: me.duele.mi.ano@example.com";
		if(mail($emailTo, $subject,$body,$headers))
			{
				echo "Envio exitoso";
			}
			else
			{
				echo "Error.";
			}
?>