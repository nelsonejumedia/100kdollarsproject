<?php
session_start();

function set_message($message, $type = 'success') {
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $type;
}

function display_message() {
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        $message_type = $_SESSION['message_type'];
        $alert_class = $message_type === 'danger' ? 'alert-danger' : 'alert-success';

        echo "<div class='alert {$alert_class}' role='alert'>{$message}</div>";

        // Unset message after displaying
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    }
}
?>
