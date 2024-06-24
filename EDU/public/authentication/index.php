<?php 

$page = isset($_GET['page']) ? $_GET['page'] : 'login';

switch ($page)
{
    case 'login':
        include 'login.php';
        break;
    case 'signup':
        include 'signup.php';
        break;
    default:
        include '404.php';
        break;

}

?>