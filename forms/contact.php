<?php

  $result="";

  if(isset($_POST['sumbit'])){
    require '../phpmailer/PHPMailerAutoload.php'
    $mail = new PHPMailer;

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'uttamsharealerts@gmail.com';
    $mail->Password = '9870388063';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('uttamsharealerts@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission : '.$_POST['subject'];
    $mail->Body='Name : '.$_POST['name'].'<br>Email : '.$_POST['email'].'<br>Message : '.$_POST['message'].'<br>';

    if(!$mail->send()){
      $result="Something went wrong. Please try again."
    }
    else{
      $result="Thanks ".$POST['name']." for contacting us. We'll get back to you soon!";
    }
  }

 ?>
