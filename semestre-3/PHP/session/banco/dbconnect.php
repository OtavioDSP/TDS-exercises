<?php
$host ="localhost";
$password ="";  
$user ="root"; 
// $db = "session-atv";
$db = 'bdlogin';

$conexao = new mysqli($host, $user, $password, $db);


if($conexao->connect_errno){
    echo "Falha ao conectar MySQL".$conexao->connect_error;
    exit();
}

?>