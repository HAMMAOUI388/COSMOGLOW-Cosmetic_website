<?php
// forgotpassword.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve the email from the submitted form
  $email = $_POST["email"];

  // Include the PHPMailer autoloader
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';

  // Create a new PHPMailer instance
  $mail = new PHPMailer\PHPMailer\PHPMailer();

  // SMTP configuration (for Gmail)
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'your_email@gmail.com';
  $mail->Password = 'your_password';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  // Set the sender and recipient
  $mail->setFrom('your_email@gmail.com', 'Your Name');
  $mail->addAddress($email);

  // Generate a random 6-digit code
  $code = sprintf('%06d', mt_rand(0, 999999));

  // Database code and email content

  // Set the email subject and message
  $mail->Subject = 'Password Reset Code';
  $mail->Body = "Your password reset code is: $code";

  // Send the email
  if ($mail->send()) {
    // Email sent successfully
    header("Location: entercode.php");
    exit();
  } else {
    // Failed to send email
    echo "Failed to send code.";
  }
}
?>
