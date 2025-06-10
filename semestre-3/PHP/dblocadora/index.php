<?php
    include_once 'src/php/config/dbconnect.php';
    include_once 'src/php/classes/Class-Adm.php';
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
    
<form method="post" action="">

    <label for="nome_adm"></label>
    <input type="text" name="nome_adm" id="">
    <label for="senha_adm"></label>
    <input type="text" name="senha_adm" id="">
    <input type="submit" value="Enviar" name="cad_adm">

</form>

<?php 
if(isset($_POST['cad_adm'])){
    $login = $_POST['nome_adm'];
    $senha = $_POST['senha_adm'];

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $adm = new adm('',$login,$senha,$conexao);
    $adm->insereAdm();
    header("Location:src/php/routes/home.php");
}



?>


</body>
</html>