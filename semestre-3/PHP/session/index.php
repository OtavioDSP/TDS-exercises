<?php
// Iniciando a sessão
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <?php
    $login = $_POST['login'];
    $senha = $_POST['senha'] 

    $_SESSION['login'] = "vermelho" ;
    $_SESSION['senha'] = "cachorro" ;
    echo "As variáveis de sessão foram definidas.";

    ?>
</body>
</html>