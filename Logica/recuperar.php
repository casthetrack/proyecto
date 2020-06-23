<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exeption;

require '../vendor/autoload.php';
require '../logica/conexion_db.php';

$email=$_POST['email'];
$query = "SELECT UsuEmail,UsuClave,MusPrimerNombre,MusPrimerApellido FROM usuario  INNER JOIN musico ON UsuMusicoId=MusDocumento WHERE UsuEmail ='$email'";
$resultado=$conn->query($query);
$datos=$resultado->fetch_array();

include('SED.php');


$desencriptada=SED::decryption($datos['UsuClave']);
$datos['UsuClave']=$desencriptada;
$UsuarioNombre=$datos['MusPrimerNombre']." ".$datos['MusPrimerApellido'];

if (count($resultado) > 0){


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'juagno19@gmail.com';                     // SMTP username
    $mail->Password   = '3135888212';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('juagno19@gmail.com', 'Junior');
    $mail->addAddress($email, 'JDAN');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'SASPA';
    $mail->Body    = '<p>Hola, '.$UsuarioNombre.'</p>

    Parece que has olvidado la contraseña de tu cuenta en S.A.S-P.A.
    
        <p>Tu contraseña es: '.$datos['UsuClave'].', no la olvides.<br>Te recomendamos ir al apartado de tu perfil y
        realizar el cambio de contraseña si la actual te resulta difícil de recordar.</p>
    
        <p>Te deseamos un buen día de parte del equipo S.A.S-P.A.</p>';
    $mail->AltBody = 'bery good';

    $mail->send();
    echo 'Mensaje enviado';
} catch (Exception $e) {
    echo "Mensaje no enviado. Mailer Error: {$mail->ErrorInfo}";
}
}
else
 {
     echo "correo invalido";
     echo '<a href="../vistas/recuperar_contrasena.php">volver</a>';
 }