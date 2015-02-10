<?php
  // Get values from the form
  // Get name and strip any tags.
  $name = $_POST['name'];
  $name = strip_tags($name);
  echo "$name";
  // Get location and strip any tags.
  $location=$_POST['location'];
  $location = strip_tags($location);
  echo "$location";
  // Get phone number and strip any tags.
  $phone=$_POST['phone'];
  $phone = strip_tags($phone);
  echo "$phone";
  // Get email and strip any tags.
  $email=$_POST['email'];
  $email = strip_tags($email);
  echo "$email";
  // Get message and strip any tags, except p and br.
  $message=$_POST['message'];
  $message = strip_tags($message);
  echo "$message";

  // What gets sent, in what manner, in the email.
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
