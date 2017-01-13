<?php 
		header("Content-type: text/html;charset=\"utf-8\"");
		$emailTo="omar.rosadio@unmsm.edu.pe";
		$subject="Omar gay";
		$body="Eres adoptado.";
		$headers="From: luz.rosadio@example.com";
		if(mail($emailTo, $subject,$body,$headers))
			{
				echo "Envio exitoso";
			}
			else
			{
				echo "Error.";
			}
?>