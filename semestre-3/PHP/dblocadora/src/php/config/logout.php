<?php

if (!isset($_POST["adm_log"])) {
    header("Location: ../../../index.php");
    exit;
}
if ($tempo_inativo > $tempo_maximo) {
    // Destrói a sessão e redireciona para a página de login ou outro lugar
    session_unset();  // Limpa todas as variáveis de sessão
    session_destroy(); // Destrói a sessão
    header("Location: login.php"); // Redireciona para a página de login
    exit(); // Encerra o script após o redirecionamento
}







?>