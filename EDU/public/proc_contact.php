<?php 

require "session__messages.php";
require "includes/functions.php";



if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    if (!$fullname || !$email || !$phone || !$message)
    {
        set_message("Please fill in all the fields!", "danger");
        header("Location: index?page=contact");
        exit (0);
    } else {
        $result = send_mail($fullname, $email, $phone, $message);

        if ($result === true)
        {
            set_message("Your message has been sent successfully!", "success");
            header("Location: index?page=contact");
            exit (0);
        } else {
            set_message('Error: ' . $result, "danger");
            header("Location: index?page=contact");
            exit (0);
        }
    }
} else {
    set_message("Invalid request method!", "danger");
    header("Location: index?page=contact");
    exit (0);
}



?>