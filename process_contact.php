<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $to = "amosmuhanguzi43@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message:\n" . $message;
  $headers = "From: " . $email;

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message. We will get back to you shortly.";
    // Optionally redirect to a thank-you page:
    // header("Location: thank_you.html");
  } else {
    echo "There was a problem sending your message. Please try again later.";
  }
} else {
  echo "Invalid request.";
}
?>