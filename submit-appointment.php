<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $serviceType = $_POST["serviceType"];
    $comment = $_POST["comment"];

    // Configure email
    $to = "waleed.fida2@gmail.com"; // Replace with your actual email address
    $subject = "New Appointment";
    $message = "Name: $name\nPhone: $phone\nEmail: $email\nService Type: $serviceType\nComment: $comment";

    // Send email
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Failed to send email";
    }
} else {
    echo "Invalid request method";
}
?>
