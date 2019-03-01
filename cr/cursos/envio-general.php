<?php
require 'PHPMailerAutoload.php';
date_default_timezone_set('America/Argentina/Buenos_Aires');
// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
//$email_to = "sdesigncba@gmail.com";
//$email_to = "carlosdanielgutierrez@gmail.com";


$email_to = "francocelan2016@gmail.com";

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];
$pais = $_REQUEST['pais'];


$email_subject = "Consulta General";

$user_subject = "Finalizar inscripcion";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['pais']) ||
!isset($_POST['message'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "<h1>Consulta General</h1><br>";
$email_message .= "<p>Nombre y Apellido: " . $_POST['name'] ."</p>";
$email_message .= "<p>Teléfono: " . $_POST['phone'] ."</p>";
$email_message .= "<p>Mail: " . $_POST['email'] ."</p>";
$email_message .= "<p>Pais: " . $_POST['pais'] ."</p>";
$email_message .= "<p>Mensaje: " . $_POST['message'] ."</p>";

//inicio script grabar datos en csv
$fichero = 'Consulta General';//nombre archivo ya creado
//crear linea de datos separado por coma
$fecha=date("d-m-y H:i:s");
$linea = $fecha.";".$name.";".$phone.";".$email.";".$message."\n";
// Escribir la linea en el fichero
file_put_contents($fichero, $linea, FILE_APPEND | LOCK_EX);
//fin grabar datos
// $message=$message.' local='.$local;
// $mail = new PHPMailer;
// $mail->isSMTP();

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';

$mail->Host = 'mail.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'sprados@chimpancedigital.com.ar';
$mail->Password = 'Chimpance951#$';
$mail->setFrom('contamemas@meexperiencias.com', 'ME Experiencias');

$mail->addReplyTo('sprados@chimpancedigital.com.ar','ME Experiencias');
$mail->addAddress('sprados@chimpancedigital.com.ar','ME Experiencias');
// $mail->addCc('ralseff@chimpancedigital.com.ar','chimpance');
$mail->isHTML(true);
$mail->Subject = $email_subject;
$mail->Body    = $email_message;
$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
)
); 
$mail->Send();


$mail->ClearAddresses();

$mail->AddAddress($email);
$mail->Subject = $user_subject;
$mail->Body = $email_message;
$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
)
); 
$mail->Send();


$mail->CharSet = 'UTF-8';
if (!$mail->send()) {
    $mail_enviado=false;
    $mail_error .= 'Mailer Error: '.$mail->ErrorInfo;
} else {
    $mail_enviado=true;
    $mail_error='Mensaje Enviado, Gracias';
}
// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: Ralseff <info@ralseff.com>' . "\r\n" .
   'Reply-To: noreply@ralseff.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
$mail_enviado = @mail($email_to, utf8_decode($email_subject), utf8_decode($email_message), $headers);


if($mail_enviado)
{
echo "<script>location.href='gracias-general.php';</script>";

}
else
{
	echo "no se pudo enviar" ;
}

// Envia un e-mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e-mail sera respondido. 
// $mensaje2  = "Hola" . $_POST['name'] . ". Gracias por contactarnos. Un asesor se comunicará con usted a la brevedad..."; 
// $mensaje2 .= "PD - No es necesario responder este mensaje."; 
// $envia =  mail($_POST['email'],"Su mensaje fué recibido!",$mensaje2,$headers);



?>