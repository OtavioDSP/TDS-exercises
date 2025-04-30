<?php
include_once 'dbconnect.php';
include_once 'ClassCliente.php';
include_once 'Class-Veiculo.php';

if(isset($_POST['cadastrar-cliente'])){
    $nome = $_POST['nome-cliente'];
    $cpf = $_POST['cliente-cpf'];
    $endereco = $_POST['cliente-endereco'];
    $cliente = new Cliente($nome, $cpf, $endereco, $conexao);
    $cliente->insereCliente();

    
}

if(isset($_POST['listar-cliente'])){
    $nome="";$endereco="";$cpf='';
    $cliente = new Cliente($nome, $cpf, $endereco, $conexao);
    $cliente->listarCliente();


}


if(isset($_POST['cadastrar-carro'])){

    $carro_desc = $_POST['carro_desc'];
    $carro_marca = $_POST['carro_marca'];
    $carro_placa = $_POST['carro_placa'];
    $carro_desc; $carro_placa; $carro_marca;
    $cliente = new Veiculo($carro_placa, $carro_marca, $carro_desc, $conexao);
    $cliente->inserirVeiculo();

}if(isset($_POST['listar-carro'])){
    
    $carro_desc = ""; $carro_placa=""; $carro_marca="";
    $carro = new Veiculo($carro_placa, $carro_marca, $carro_desc, $conexao);
    $carro->listarVeiculos();


}







?>