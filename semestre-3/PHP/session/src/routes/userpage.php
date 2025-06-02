<?php

session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print_r($_SESSION);
    
    
        if (isset($_SESSION['tempo']) && (time() - $_SESSION['tempo'] > 60)) {
            // last request was more than 30 minutes ago
            session_unset();     // unset $_SESSION variable for the run-time 
            session_destroy();   // destroy session data in storage
            header("Location: ../index.php");
        }
    
    ?>
    
</body>
</html>