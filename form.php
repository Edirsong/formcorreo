<?php

// Conecto mi form / name / con el server a traves de los name
$nombre| = $_POST ['nombre'];
$mail = $_POST ['email'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];
// Vamos a mostrar un texto plano
$header .= "Content-Type: text/plain";

// Como me va llegar el cuerpo del mail a mi, o sea lo que la gente escribió en el form - \r\n es para hacer sa
$mensaje = "Este mensaje fue enviado por" . $nombre . " \r\n"
$mensaje .= "Su e-mail es:". $mail . " \r\n";
$mensaje .= "El asunto es: ". $asunto ." \r\n";
$mensaje .= "Mensaje: " . $_POST ['mensaje']. " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time ());

$para = "20200098@une.edu.pe"; // El mail a donde van a llegar los mensajes
$asunto = 'Mensaje de mi sitio web'; // El asunto de los mails que me llegan

// La función mail envía un correo electrónico. y el orden es:
// A quien se lo envia? - El titulo del correo - El mensaje - Header para añadir
mail($para, $asunto, utf8_decode($mensaje), $header);

// Redireccion al haber enviado el form

header('Location:exito.html');

?>