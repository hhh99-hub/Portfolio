<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Set recipient email address
  $to = "hemang.huria13@gmail.com"; // Replace with your own email address

  // Set email headers
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";

  // Send email
  if (mail($to, $subject, $message, $headers)) {
    echo "success";
  } else {
    echo "Error sending email.";
  }
} else {
  echo "Invalid request.";
}
?>
