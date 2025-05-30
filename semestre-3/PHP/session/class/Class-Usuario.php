<?php

class Usuario {

    private $login;
    private $senha;
    private $conexao;
    
    public function __construct($login, $senha, $conexao)
    {

        $this->login = $login;
        $this->senha = $senha;
        $this->conexao = $conexao;

    }
    public function verificaLogin(){
        $sql = "INSERT INTO ";


    }


}







?>