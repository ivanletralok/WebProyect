<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$email_user = "ivanletralok@gmail.com";
$email_password = "alexyque";
$the_subject = "Phpmailer prueba by Evilnapsis.com";
$address_to = "dicksonceron@gmail.com";
$from_name = "Votaciones Unimagdalena";
$mensaje = $_POST['mensaje'];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $email_user;                 // SMTP username
    $mail->Password = $email_password;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($mail->Username, $from_name);
    $mail->AddAddress($address_to); // recipients email


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Envio certificado electoral';
    $mail->Body    = $mensaje;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 0;
}

?>