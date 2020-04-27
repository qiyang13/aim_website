<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $to_email = 'qyleong13@gmail.com';

  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  mail($to_email,$subject,$message, $headers);
?>
