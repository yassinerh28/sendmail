<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';

  $message = htmlspecialchars($_REQUEST['message']);
  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "learnersix0006@gmail.com";
  $mail->Password   = "RutUPa9BAPfMXy4";

  $mail->IsHTML(true);
  $mail->AddAddress("bexab13446@200cai.com", "somebody");
  $mail->SetFrom("learnersix0006@gmail.com", "me");
  $mail->AddReplyTo("reply-to-email", "reply-to-name");
  $mail->AddCC("cc-recipient-email", "cc-recipient-name");
  $mail->Subject = "test";
  $content = $message;

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    echo "Email sent successfully";
  }
?>