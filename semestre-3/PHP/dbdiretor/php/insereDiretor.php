<?php
$host = "localhost";
$root = "root";
$password = ""; 
$db = "dbcinema";

$conexao = new mysqli($host,$root, $password,$db);

if($conexao->connect_errno){
    echo "Falhou ao conectar MySQL: ".$conexao->connect_error;
    exit();
}

include_once 'classDiretor.php';

$cod = $_POST['cod_dir'];
$nome = $_POST['nome_dir'];

$dir = new Diretor($cod, $nome, $conexao);
$dir->insereDiretor();

?>