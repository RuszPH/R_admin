<?php 
require 'db.php';

$newuser = "admin";
$newpass= "password";
$role = "admin";
$hashpass = password_hash($newpass, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sss",$newuser,$hashpass,$role);

//$stmt->execute();

//echo "new user added"
?>