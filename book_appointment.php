<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : 'N/A';
    $message = htmlspecialchars($_POST['message']);

    $to = "pushpraj@nationalmarketingprojects.com";
    $subject = "New Appointment Request";
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<h2>Appointment Request</h2>";
    $body .= "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Phone:</strong> $phone</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    if ($date !== 'N/A') {
        $body .= "<p><strong>Preferred Date:</strong> $date</p>";
    }
    $body .= "<p><strong>Message:</strong><br/>$message</p>";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank_you.html");
        exit();

    } else {
        echo "There was a problem sending your appointment request. Please try again.";
    }
}
?>
