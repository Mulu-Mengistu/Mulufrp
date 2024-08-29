<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'mulumengistu1@gmail.com'; // Your email address
    $headers = "From: $email";

    $mail_sent = mail($to, $subject, $message, $headers);

    if ($mail_sent) {
        echo "Message sent successfully.";
    } else {
        echo "Message could not be sent.";
    }
}
?>
