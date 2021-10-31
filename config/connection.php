<?php
$server = 'localhost';
$username = 'root';
$password = "";
$db_name = "walmartdb";

$conn = new mysqli($server, $username, $password, $db_name);

if($conn -> connect_error){
    die('Connection Failed');
}
?>