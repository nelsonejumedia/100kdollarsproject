<?php 

if (!isset($_SESSION['userid']))
{
  header("Location: ../../public/authentication/index?page=login");
  exit(0);
}

require "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= ucfirst($page); ?> | Edu-Champs Students</title>
</head>
<body>
  
</body>
</html>