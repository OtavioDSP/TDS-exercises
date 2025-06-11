<?php

class adm{

    private $id;
    private $nome;
    private $senha;
    private $conexao;

    public function __construct($id, $nome, $senha, $conexao) {
        
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->conexao = $conexao;

    }
    public function insereAdm(){
        $sql = "INSERT INTO adm (id, nome, senha) VALUES (?,?,?)";

        $stmt = $this->conexao->query($sql);
        $stmt->bind_param('ss',$this->nome, $this->senha);

          if ($stmt->execute()) {
            echo "Locação inserida com sucesso!";
        } else {
            echo "Erro ao inserir locação: " . $stmt->error;
        }

    }
    public function buscaAdm(){

        $sql = "SELECT nome FROM adm WHERE nome  = ? AND senha = ?";

        $stmt = $this->conexao->query($sql);

        $stmt->bind_param('ss', $this->nome, $this->senha);

        $stmt->execute();

        if ($stmt->num_rows == 1) {

            $stmt->fetch();

            $_SESSION['nome'] = $nome;
            
        }

    }
    


}












?>