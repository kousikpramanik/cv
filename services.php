<?php
    if(isset($_POST['submit'])) {

    $name = $_POST['nome'];
    $email = $_POST['exampleInputEmail'];
    $message = $_POST['exampleFormControlTextarea1'];

    $to = "kousikpramanik@gmail.com";
    $subject = "Site contact form";

    $header = "From: ".$exampleInputEmail."\r\n";
    $header .= "Cc: ".$exampleInputEmail."\n";
    $header .= "Reply-To : ".$exampleInputEmail."\r\n";
    $header .= "Return-Path : ".$exampleInputEmail."\r\n";
    $header .= "X-Mailer: PHP\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/plain; charset=iso-8859-1\r\n";

    if(mail($to, $subject, $message, $header))
    {
      echo "Mail Sent Successfully";
    }else{
      echo "Mail Not Sent";
    }

    }
    ?>
