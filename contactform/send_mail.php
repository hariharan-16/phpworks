<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mes = $_POST['comments'];
  $tel = $_POST['tel'];

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';
  $mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'harioz1515@gmail.com';                     //SMTP username
    $mail->Password   = 'mjdmmqrgdtovsixj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('harioz1515@gmail.com', 'HARI');
    $mail->addAddress($email);     //Add a recipient

    $message = "We have recieved your valued informations from $email  $name .! Hope you get Enjoyed Visiting Site.! Good Day.! After evaluating your informations we send you mail.!";
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recieved your informations..!';
    $mail->Body    = $message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
