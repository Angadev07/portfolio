<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Change the email address to your desired recipient
    $to = "angadev.al@experionglobal.com"; // Change this to the email you want to receive the form data
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\nMessage:\n$message\n\nFrom: $name <$email>";
    
    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        http_response_code(200);
    } else {
        // Failed to send email
        http_response_code(500);
    }
} else {
    // Not a POST request
    http_response_code(403);
}
?>
