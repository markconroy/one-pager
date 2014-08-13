<?php
  // Get values from the form
  $name=$_POST['name'];
  $location=$_POST['location'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  $to = "info@adesignforlife.net";
  $subject = "From Contact Form";
  $body = " Name: " . $name . "\r\n Location: " . $location . "\r\n Phone: " . $phone . "\r\n Email: " . $email . "\r\n Message: \r\n " . $message;


  $from = "$name";
  $headers = "From:" . $from . "\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

  if(@mail($to,$subject,$body,$headers)) {
    print "<script>document.location.href='success.php';</script>";
    } else{
        echo "Error! Please try again.";
      }
?>
