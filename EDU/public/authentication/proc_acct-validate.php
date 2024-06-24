<?php

require "database/conn.php";
require "session_messages.php";

// Get the url address from the query string
$user_id = $_GET['id'];

// Prepare and bind
$stmt = $conn->prepare("UPDATE users SET status = 'active' WHERE url_address = ?");
$stmt->bind_param("s", $user_id);

// Execute the statement
if ($stmt->execute()) {
    set_message("Your account have been validated! <br /> Proceed to login.", "success");
    header("Location: index?page=login");
    exit(0);
} else {
    set_message("An error occured!", "danger");
    header("Location: index?page=signup");
    exit(0);
}

// Close statement and connection
$stmt->close();
$conn->close();
