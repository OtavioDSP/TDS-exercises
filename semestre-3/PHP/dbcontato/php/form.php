<?php

include_once "classContato.php";
include_once "bdConnect.php";

if(isset($_POST['enviar'])){

    $nome = $_POST['nome_con'];
    $email = $_POST['email'];
    $msg = $_POST['desc_con'];

    $cont = new contato($nome, $email,$msg,$conexao);
    $cont->insereContato();
}
if(isset($_POST['listar'])) {

    $nome=""; $email=""; $msg="";
    $cont = new contato($nome, $email,$msg,$conexao);
    $cont->listarContatos();
}




?>