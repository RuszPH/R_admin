<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "r_admin";
$port = 3307;

$conn = new mysqli($host,$username,$password,$database,$port);

if(!$conn) {
    die("Database not connected: ". mysqli_connect_error());
}


?>