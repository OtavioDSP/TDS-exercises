<?php

class Usuario {
    private $id;
    private $login;
    private $senha;
    private $conexao;
    
    public function __construct($id, $login, $senha, $conexao)
    {
        $this->id = $id;
        $this->login = $login;
        $this->senha = $senha;
        $this->conexao = $conexao;

    }
    public function insereUsuario(){
        $sql = "INSERT INTO usuarios(usuario, senha) VALUES (?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("ss", $this->login, $this->senha);
        if($stmt->execute()){

            
            echo "contato inserido";


        }else{

            echo "erro ao inserir". $stmt->error;

        }

    $stmt->close();
    }public function validaUsuario(){

        $sql = "SELECT login FROM usuarios WHERE login = ?, senha = ?";
        $stmt = $this->conexao->query($sql);

        $stmt->bind_param('ss',$login,$senha);
        $stmt->execute();

        if($stmt->num_rows == 1){

            $stmt->bind_param('s',$login);
            $stmt->fetch();

            $_SESSION['login'];



        }





    }

    



}










?>