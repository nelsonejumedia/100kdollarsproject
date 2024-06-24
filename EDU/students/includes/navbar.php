<?php 

if (!isset($_SESSION['userid']))
{
  header("Location: ../../public/authentication/index?page=login");
  exit(0);
}

?>