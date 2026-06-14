<?php

$host = "127.0.0.1";
$user = "root";
$password = "gandharv@1234";
$database = "tour";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>