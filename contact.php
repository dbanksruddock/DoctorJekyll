<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate and process the data (you can add further validation here)

    // Send the email
    $to = "operator@example.com"; // Replace with the actual email address of the operator
    $subject = "Contact Form Submission";
    $headers = "From: $email";
    $mailBody = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $mailBody, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        // Error sending email
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
