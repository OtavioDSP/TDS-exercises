<?php

include_once "classContato.php";
include_once "bdConnect.php";

if(isset($_POST['enviar'])){

    $nome = $_POST['nome_con'];
    $email = $_POST['email'];
    $msg = $_POST['desc_con'];

    $cont = new contato($cod,$nome, $email,$msg,$conexao);
    $cont->insereContato();
}
if(isset($_POST['listar'])) {

    $cod=""; $nome=""; $email=""; $msg="";
    $cont = new contato($cod,$nome, $email,$msg,$conexao);
    $cont->listarContatos();
}
if(isset($_POST['deletar'])){
    $cod= $_POST['id_cont'];
    $nome=""; $email=""; $msg="";
    $cont = new contato($cod,$nome, $email,$msg,$conexao);
    $cont->listarContatos();



}




?>