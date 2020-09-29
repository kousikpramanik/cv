<?php
$fname = $_REQUEST['first_name'];
$lname-$_REQUEST['last_name']
$email = $_REQUEST['exampleInputEmail1'];

$message= $_REQUEST['exampleFormControlTextarea1'];

//cHECK INPUT array_count_values
if (empty($name) || empty($email) || empty($message)) {

  echo "Please field all the fields";
}
else {
  mail("kousikpramanik539@gmail.com", "Service Request", $message, "From: $name < $email");
  echo "<script type='text/javascript'>alert('Your message sent successfully');

  window.history.log(-1);

  </script>";
}



 ?>
