<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){


       $to      = 'info@eratg.com';
       $from    = filter_var($_POST["sender"], FILTER_SANITIZE_STRING);
       $subject = filter_var( $_POST["subject"], FILTER_SANITIZE_STRING);
       $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
       $headers = 'From:'.$from . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
       
       mail($to, $subject, $message, $headers);
      echo "<p class='success'>Thank you For sending us an email</p>";

 }
 else{
    echo "<p class='success'>Mail Faild.</p>";
 }
    ?>