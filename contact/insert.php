\<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $website = $_POST["website"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "nextgenixdatasolutions@company.com";

    // Set the subject of the email
    $subject = "New Contact Form Submission";

    // Build the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Website: $website\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    $headers = "From: $email";

    // Check if mail is sent successfully
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Error sending message.";
    }
} else {
    echo "Invalid request.";
}

?>
