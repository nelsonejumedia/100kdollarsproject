<?php 

// Include PHPMailer classes manually.
require "PHPMailer-master/src/Exception.php";
require "PHPMailer-master/src/PHPMailer.php";
require "PHPMailer-master/src/SMTP.php";

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_mail($fullname, $email, $phone, $message)
{
    $mail = new PHPMailer(true);

    try
    {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'danielidah806@gmail.com';
        $mail->Password = 'BestoftheBest@2024';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('danielidah806@gmail.com', 'Mailer');
        $mail->addAddress('danielidah806@gmail.com', 'Daniel Idah');

        $mail->isHTML(true);
        $mail->Subject = '<b>NEW MESSAGE FROM CONTACT FORM!</b>';
        $mail->Body = "
            <p>You have received a new email from the contact form on your website.</p>
            <p><strong>Full name:</strong> {$fullname}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Mobile number:</strong> {$phone}</p>
            <p><strong>Message:</strong> {$message}</p>
        ";
        $mail->AltBody = "
            You have received a new message from the contact form on your website. \n
            Full name: {$fullname} \n
            Email: {$email} \n
            Mobile number: {$phone} \n
            Message: {$message}
        ";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Message could not be sent! Mailer Error: {$mail->ErrorInfo}";
    }
}

?>