<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "2024.alessandro.salvetti@uwcisak.jp"; // Email address to receive the mail
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $subject = "Feedback from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html\r\n";

    $mail_body = "<h3>Feedback from $name</h3>";
    $mail_body .= "<p><strong>Email:</strong> $email</p>";
    $mail_body .= "<p><strong>Message:</strong></p>";
    $mail_body .= "<p>$message</p>";

    $smtp_host = "mail.ralsa.tech"; // Replace with your SMTP mail server address
    $smtp_port = "587"; // Replace with your SMTP mail server port
    $smtp_username = "info"; // Replace with your SMTP username
    $smtp_password = "t>a)w3*=UJV)]*"; // Replace with your SMTP password

    // Send the email using PHP's mail function with SMTP settings
    ini_set("SMTP", $smtp_host);
    ini_set("smtp_port", $smtp_port);
    ini_set("sendmail_from", $smtp_username);
    ini_set("auth_username", $smtp_username);
    ini_set("auth_password", $smtp_password);

    if (mail($to, $subject, $mail_body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send the email.";
    }
}
?>
