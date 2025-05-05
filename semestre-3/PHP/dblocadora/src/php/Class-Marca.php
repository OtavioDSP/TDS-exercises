<?php 
class Marca{

    private $nome_marca;
    private $conexao;

    public function __construct($nome_marca, $conexao){

        $this->nome_marca = $nome_marca;
        $this->conexao = $conexao;
    }

    public function inserirMarca(){
        $sql = "INSERT INTO tbmarca(marca_descricao) VALUES (?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param('s', $this->nome_marca);
        if($stmt->execute()){

            echo "marca inserida";


        }else{

            echo "erro ao inserir". $stmt->error;

        }

    }
}












?>