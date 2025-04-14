<?php


$nome = $_POST['nome_con'];
$email = $_POST['email'];
$msg = $_POST['desc_con'];



include_once "classContato.php";
include_once "bdConnect.php";

$cont = new contato($nome, $email,$msg,$conexao);

$cont->insereContato();
$cont->listarContatos();

?>