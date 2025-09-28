<?php
$host ="localhost";
<<<<<<< HEAD
$password =  "";  
$user = "root"; 
$banco = "db_moonrunner";
$conexao = new mysqli($host, $user, $password, $banco);
=======
$password ="";  
$user ="root"; 
$db = "db_moonrunner";
$conexao = new mysqli($host, $user, $password, $db);
>>>>>>> 11b26fb8377b29cdf3d8b60aebff4b49b7d9493e


if($conexao->connect_errno){
    
    echo "Falha ao conectar MySQL".$conexao->connect_error;
    exit();
}

?>