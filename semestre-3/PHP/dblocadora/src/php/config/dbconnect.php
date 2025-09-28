<?php
$host ="localhost";
$password =  "";  
$user = "root"; 
$banco = "db_moonrunner";
$conexao = new mysqli($host, $user, $password, $banco);


if($conexao->connect_errno){
    
    echo "Falha ao conectar MySQL".$conexao->connect_error;
    exit();
}

?>