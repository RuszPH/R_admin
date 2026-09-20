<?php
$password = "password";
$hash = '$2y$10$uWYX3y9RHBWr1i/m7n03yeqjFaJGM50zgGjohL';

if(password_verify($password, $hash)) {
    echo "correct";
}
else {
    echo "Incorrect";
}

?>
