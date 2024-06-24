<?php

require "database/conn.php";
require "session_messages.php";


// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check for empty inputs
    if (!$email || !$password) {
        set_message("Fill in the required fields!", "danger");
        header("Location: index?page=login");
        exit(0);
    } else {
        // Retrieve user from database
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // verify password
            if (password_verify($password, $user['password'])) {
                $_SESSION['userid'] = $user['url_address'];
                $_SESSION['email'] = $user['email'];
                header("Location: ../../students/index?page=home");
                exit(0);
            } else {
                set_message("Invalid email or password!", "danger");
                header("Location: index?page=login");
                exit(0);
            }
        } else {
            set_message("No user found with that email.", "danger");
            header("Location: index?page=login");
            exit(0);
        }
    }
}
