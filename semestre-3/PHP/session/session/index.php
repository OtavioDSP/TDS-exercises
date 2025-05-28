<?php
// Iniciando a sessão
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
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    echo "As variáveis de sessão foram definidas.";
    

    ?>
    
</body>
</html>