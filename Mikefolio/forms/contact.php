<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Add your email address where you want to receive the form submissions
  $to = "solijonmikelennard@gmail.com";
  $subject = "New Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send the email
  if (mail($to, $subject, $body)) {
    echo "Thank you for your message!";
  } else {
    echo "There was a problem sending your message.";
  }
}
?>
