<?php
	$nombre = $_POST['nombre'];
	$email  = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	
	$destino = "quintana.martin1988@gmail.com";
				
	$cuerpo = "$nombre te envía el siguiente comentario $mensaje . Contactalo a $email";

	mail(
		$destino,
		"Mail desde web",
		$cuerpo
	);
	
	$cabeceras = 'From: Mensajes y avisos <contacto@coachdebasquet.com>';
	
	mail(
		$email,
		"Recibimos tu mensaje",
		"Te contestaremos a la brevedad, agendanos como contacto",
		$cabeceras
	);
	
	echo "Mensaje enviado";
?>
