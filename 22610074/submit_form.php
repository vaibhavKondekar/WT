<?php

$to = 'contact@scoopdreams.com';
$subject = 'New Contact Form Submission';
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
$headers = "From: $email" . "\r\n" .
           "Reply-To: $email" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

$emailBody = "You have received a new message from the contact form.\n\n".
             "Here are the details:\n\nName: $name\n\n".
             "Email: $email\n\nMessage:\n$message";

// Uncomment the below line to enable email sending
// mail($to, $subject, $emailBody, $headers);

echo "<script>alert('Thank you for contacting us! We\'ll get back to you shortly.');</script>";
echo "<script>window.location.href = 'index.html';</script>";
?>
