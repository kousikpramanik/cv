<?php
if(isset($_POST['submit'])){
    $to = "kousikpramanik539@gmail.com"; // this is your Email address
    $from = $_POST['exampleInputEmail1']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['exampleFormControlTextarea1'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['exampleFormControlTextarea1'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: <".$from. ">" ;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
