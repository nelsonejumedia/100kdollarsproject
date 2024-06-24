<?php 

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page)
{
    case 'home':
        include 'home.php';
        break;
    
    default:
        include '404.php';
        break;

}

?>