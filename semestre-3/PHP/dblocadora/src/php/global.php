<?php
include_once 'ClassCliente.php';
include_once 'dbconnect.php';
if(isset($_POST['cadastrar-cliente'])){
    $nome = $_POST['nome-cliente'];
    $cpf = $_POST['cliente-cpf'];
    $endereco = $_POST['cliente-endereco'];
    $cliente = new Cliente($nome, $cpf, $endereco, $conexao);
    $cliente->insereCliente();

    
}

if(isset($_POST['Listar']))
$nome="";$endereco="";$cpf='';
$cliente = new Cliente($nome, $cpf, $endereco, $conexao);
$cliente->listarCliente();

?>