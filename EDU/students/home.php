<?php 

require "includes/session_messages.php";

if (!isset($_SESSION['userid']))
{
    set_message("You are required to login in order to access this page!", "danger");
    header("Location: ../public/authentication/index?page=login");
    exit(0);
}

include "includes/header.php";

?>
<h1>Home page!</h1>