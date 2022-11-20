<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    session_start();
        if (isset($_SESSION['username']))
        {
           
            session_unset();
            session_destroy();
           header("Location:index.php");
        }
        
    
        
    ?>
    <br>
    <a href="login.php">Go to Login Page</a>
</body>
</html>
