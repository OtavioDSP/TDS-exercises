<?php

class Diretor{
    private $codigo;
    private $nome;
    private $conexao;

    public function __construct($codigo,$nome,$conexao){
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->conexao = $conexao;

    }

    public function insereDiretor(){
        $sql = "INSERT INTO tbdiretor (codigo_diretor, nome_diretor) VALUES (?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param('is',$this->codigo,$this->nome);
        if ($stmt->execute()){
            echo "diretor inserido com sucesso";

        }else{
            echo "erro ao inserir". $stmt->error;
        }

    }
    
    
}







?>