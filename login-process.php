<?php 
require 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];


    $stmt = $conn->prepare(
        "SELECT * FROM users WHERE username = ?"
    );
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();
    

    if ($result->num_rows === 1){
        $users = $result->fetch_assoc();

       if(password_verify($pass, $users['password'])) {
            //echo "login successful";
            header("Location: dashboard.php");
            
            exit();
       }
       else {
        echo "Wrong credentials";
       }
    }
}
?>