<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    $mail = new PHPMailer(true); // Create a new PHPMailer instance
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use your email provider's SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = '16sainiankur@gmail.com'; // Your email address
        $mail->Password = 'HeavyDriver&#420'; // Your email password (or app password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom('16sainiankur@gmail.com', 'FOrm'); // Sender's email
        $mail->addAddress('ankusaini@gmail.com '); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'New Registration Form Submission';
        $mail->Body    = "Name: $name<br>Email: $email<br>Phone: $phone<br>Address: $address<br>City: $city<br>Country: $country";

        $mail->send();
        echo 'Thank you for registering! Your information has been sent.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Please submit the form properly.";
}
?>
