<?php

 if(isset($_POST['submit_btn']))
 {
  $username = $_POST['name'];
  $password = $_POST['exampleFormControlTextarea1'];
  $text = $username . "," . $password . "\n";
  $fp = fopen('data.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo 'saved';

    }
fclose ($fp);
}
?>
