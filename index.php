<?php 
    require 'test.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <main class="login-form">
        <div class="login-container">
            <h1>Login</h1>
            <form action="login-process.php" method="post">
                <label>
                    Username:
                    <input name="username" type="text" id="username">
                </label><br>
                <label>
                    Password:
                    <input name="password" type="password" id="password">
                    <button id="see-password" type="button"><i class="fa-solid fa-eye"></i></button>
                </label><br>
                
            <button type="submit">Login</button>
            </form>
        </div>
    </main>
</body>
</html>