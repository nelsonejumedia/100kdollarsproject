<?php 

$localhost = "localhost";
$root = "root";
$password = "";
$database = "educhamps";

$conn = mysqli_connect($localhost, $root, $password, $database);

if (!$conn)
{
    die("<h1>Error connecting to database</h1>". mysqli_connect_error());
}

?>