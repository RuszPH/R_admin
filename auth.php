<?php 
session_start();
$timer = 10;

if(isset($_SESSION['last-action'])) {
    if(time() - $_SESSION['last-action'] > $timer){
        echo "<?script> alert('Login Expired') </script>";
        session_unset();
        session_destroy();
        header("Location:index.php");
        
        
    }
}

$_SESSION['last-action'] = $timer;

?>