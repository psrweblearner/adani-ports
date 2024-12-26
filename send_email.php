<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$user_subject = $_POST['subject'];
$message = $_POST['message'];
// Set up email parameters
$to = 'pushkar.singh@inchbrick.com'; // Replace with your email address
$subject = 'New Contact Form Submission';
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// Compose the email body
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Mobile: $mobile\n";
$body .= "Subject: $user_subject\n";
$body .= "Message: $message";

// Attempt to send the email
if ($email!=NULL) {
  mail($to, $subject, $body, $headers);
} else {
  echo "error";
}
?>
