<?php
include_once 'config/dbconnect.php';
include_once 'classes/Class-Cliente.php';
include_once 'classes/Class-Veiculo.php';
include_once 'classes/Class-Locacao.php';
include_once 'classes/Class-Marca.php';

if(isset($_POST['cadastrar-cliente'])){
    $nome = $_POST['nome-cliente'];
    $cpf = $_POST['cliente-cpf'];
    $endereco = $_POST['cliente-endereco'];
    $cliente = new Cliente($cpf, $nome, $endereco, $conexao);
    $cliente->insereCliente();

    
}if(isset($_POST['cadastrar-carro'])){

    $carro_desc = $_POST['carro_desc'];
    $carro_marca = $_POST['carro_marca'];
    $carro_placa = $_POST['carro_placa'];
    $carro_desc; $carro_placa; $carro_marca;
    $cliente = new Veiculo($carro_placa, $carro_marca, $carro_desc, $conexao);
    $cliente->inserirVeiculo();

}if(isset($_POST['cadastrar-locacao'])){
    $loc_veiculo = $_POST['veiculo_loc'];
    $loc_cliente = $_POST['cliente_loc'];
    $loc_dt_inicio = $_POST['dt_inicio'];
    $loc_dt_fim = $_POST['dt_fim'];
    $locacao = new Locacao( $loc_veiculo, $loc_cliente, $loc_dt_inicio, $loc_dt_fim, $conexao);
    $locacao->inserirLocacao();

}if(isset($_POST['cadastrar_marca'])){
    $marca_desc = $_POST['marca_nome'];
    $marca = new Marca("", $marca_desc, $conexao);
    $marca->inserirMarca();



}if(isset($_POST['delete'])){
    $cpf = $_POST['cpf'];
    $nome= ""; $endereco='';
    $cliente = new Cliente($cpf, $nome, $endereco, $conexao);
    $cliente-> deletarCliente($cpf);



}if(isset($_POST['deletar_marca'])){
    $codigo = $_POST['codigo_marca'];
    $marca = new Marca($codigo,'', $conexao); 
    $marca->deletarMarca($codigo);




}if(isset($_POST['deletar_locacao'])){
    $loc_codigo = $_POST['loc_codigo'];
    $locacao = new Locacao('', '', '', '', $conexao); 
    $locacao->deletarLocacao($loc_codigo);
}





if(isset($_POST['deletar_veiculo'])){
    $placa = $_POST['plc'];
    $veiculo = new Veiculo($placa, '', '', $conexao);
    $veiculo->deletarVeiculo($placa);




}


if (isset($_POST['atualizar_marca'])) {
    $nome_marca = $_POST['nome_marca'];
    $codigo = $_POST['codigo_marca'];

    $marca = new Marca($codigo, $nome_marca, $conexao);
    $marca->editarMarca();

} 


?>