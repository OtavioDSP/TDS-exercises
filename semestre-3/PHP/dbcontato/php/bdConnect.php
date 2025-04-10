
<?php
$host = "localhost";
$root= "root";
$password = "";
$db = "dbcontato";

$conexao = new mysqli($host, $root, $password, $db);


if($conexao ->  connect_errno){
    echo "Falha ao conectar MySQL".$conexao->connect_error;
    exit();
}


?>