<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Perform any necessary form validation and data processing here
  // ...

  // Send an email with the form data
  $to = 'hemang.huria13@gmail.com'; // Replace with your email address
  $subject = 'New form submission';
  $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

  if (mail($to, $subject, $body)) {
    // Email sent successfully
    echo "Form submitted successfully. Thank you!";
  } else {
    // Error sending email
    echo "An error occurred while submitting the form. Please try again.";
  }
}
?>
