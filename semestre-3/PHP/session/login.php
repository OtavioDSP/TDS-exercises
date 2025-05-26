<?php
session_start();
include "banco/dbconnect.php";
    if(isset($_POST['botao'])){
        $login = $_POST['login'];
        // $senha = md5($_POST['senha']);
        $senha = ($_POST['senha']);
        $sql = "SELECT * FROM usuario WHERE login_usuario = '$login' AND senha_usuario = '$senha'";
        $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) == 1){
        $registro = mysqli_fetch_array($resultado);
        $_SESSION['nome'] = $registro['nome_usuario'];
        $_SESSION['login'] = $login;
        header("Location: index.php");
    } else{
        header("Location: login.html");
    }
    }
?>