<?php 

require "session_messages.php";

$urlAddress = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Verification | EduChamps</title>
</head>
<body>

    <h1>Validate your account</h1>

    <input type="hidden" value=<?= $urlAddress ?>>
    <p>This email is to validate it. Click <a name="acct_validate" href='proc_acct-validate?id=<?= $urlAddress ?>'>validate</a> to complete the process</p>
    
</body>
</html>