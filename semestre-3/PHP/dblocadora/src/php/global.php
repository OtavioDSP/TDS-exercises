<?php
include_once 'dbconnect.php';
include_once 'ClassCliente.php';
include_once 'Class-Veiculo.php';
include_once 'Class-Locacao.php';
include_once 'Class-Marca.php';

if(isset($_POST['cadastrar-cliente'])){
    $nome = $_POST['nome-cliente'];
    $cpf = $_POST['cliente-cpf'];
    $endereco = $_POST['cliente-endereco'];
    $cliente = new Cliente($cpf, $nome, $endereco, $conexao);
    $cliente->insereCliente();

    
}

if(isset($_POST['listar-cliente'])){
    $nome="";$endereco="";$cpf='';
    $cliente = new Cliente($cpf, $nome, $endereco, $conexao);
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
if(isset($_POST['cadastrar-locacao'])){
    $loc_veiculo = $_POST['veiculo_loc'];
    $loc_cliente = $_POST['cliente_loc'];
    $loc_dt_inicio = $_POST['dt_inicio'];
    $loc_dt_fim = $_POST['dt_fim'];
    $locacao = new Locacao( $loc_veiculo, $loc_cliente, $loc_dt_inicio, $loc_dt_fim, $conexao);
    $locacao->inserirLocacao();
}if(isset($_POST['listar-locacao'])){
    $loc_veiculo = ""; $loc_cliente = ""; $loc_dt_inicio = ""; $loc_dt_fim = "";
    $locacao = new Locacao($loc_veiculo, $loc_cliente, $loc_dt_inicio, $loc_dt_fim, $conexao);
    $locacao->listarLocacoes();
}if(isset($_POST['cadastrar_marca'])){
    $marca_desc = $_POST['marca_nome'];
    $marca = new Marca($marca_desc, $conexao);
    $marca->inserirMarca();


}







?>