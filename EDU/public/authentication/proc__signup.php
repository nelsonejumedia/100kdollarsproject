<?php 

require "database/conn.php";
require "session_messages.php";
require "includes/functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $firstName = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['firstname']));
    $lastName = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['lastname']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
    $gender = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['gender']));
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password']));
    $confirmPassword = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['cpassword']));
    
    // Generate hub id
    $result = $conn->query("SELECT COUNT(*) AS count FROM users");
    $row = $result->fetch_assoc();
    $userCount = $row['count'];
    // Increment the user count to reflect the new user's position
    $newUserPosition = $userCount + 1;

    // Format the position with leading zeros
    $hubId = sprintf("00%d", $newUserPosition);
    $urlAddress = strtolower($firstName . '.' . $lastName . '.' . $hubId);
    $urlAddress = preg_replace('/[^a-z0-9.]/', '', $urlAddress);

    if (!$firstName || !$lastName || !$email || !$gender || !$password || !$confirmPassword)
    {
        set_message("Fill in all the fields", "danger");
        header("Location: index?page=signup");
        exit(0);
    } else {
        $query = "SELECT * FROM users WHERE email='$email'";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0)
        {
            set_message("You provided an existing email address!", "danger");
            header("Location: index?page=signup");
            exit(0);
        } else if ($password != $confirmPassword) {
            set_message("Passwords mismatched!", "danger");
            header("Location: index?page=signup");
            exit(0);
        } else if (strlen($password) < 8 || strlen($password) > 20) {
            set_message("Password must be between 8 and 20 characters!", "danger");
            header("Location: index?page=signup");
            exit(0);
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            $query = "INSERT INTO users (`firstname`, `lastname`, `email`, `password`, `url_address`, `gender`, `hub_id`) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword', '$urlAddress', '$gender', '$hubId')";
            $query_run = mysqli_query($conn, $query);

            if ($query_run)
            {
                set_message("You have signed up successfully! <br> click <a href='test-verification?id=$urlAddress' name='verification_link'>here</a> to verify your account", "success");
                header("Location: index?page=signup");
                exit (0);
            }
        }

    }
}

?>