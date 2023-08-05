<<<<<<< HEAD
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "affiliatemarketingcontractcopy@gmail.com";
    $subject = "Contact Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400); // Bad Request
        exit("Invalid email format");
    }

    // Build email content
    $content = "Name: $name\nEmail: $email\n\n$message";

    // Set additional headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $content, $headers)) {
        http_response_code(200); // OK
        echo "Thank you! Your message has been sent successfully.";
    } else {
        http_response_code(500); // Internal Server Error
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo "Method not allowed";
}
?>
=======
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "affiliatemarketingcontractcopy@gmail.com";
    $subject = "Contact Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400); // Bad Request
        exit("Invalid email format");
    }

    // Build email content
    $content = "Name: $name\nEmail: $email\n\n$message";

    // Set additional headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $content, $headers)) {
        http_response_code(200); // OK
        echo "Thank you! Your message has been sent successfully.";
    } else {
        http_response_code(500); // Internal Server Error
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo "Method not allowed";
}
?>
>>>>>>> 90a78cd51aacce1934bfda2630776261b362a1be
