<?php

class Cliente{
   
    private $nome;
    private $cpf;
    private $endereco;
    private $conexao;

    public function __construct($nome, $cpf, $endereco, $conexao){

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco= $endereco;
        $this->conexao = $conexao;
    }
    
    public function insereCliente(){
        $sql = "INSERT INTO tbcliente(cliente_nome, cliente_cpf, cliente_endereco) VALUES (?,?,?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param('sss', $this->nome, $this->cpf, $this->endereco);
        if($stmt->execute()){

            echo "cliente inserido";


        }else{

            echo "erro ao inserir". $stmt->error;

        }

    $stmt->close();
    }
    Public function listarCliente(){


        $sql = "SELECT cliente_nome, cliente_cpf, cliente_endereco FROM tbcliente";
        
        $resultado = $this->conexao->query($sql);
        if ($resultado->num_rows>0) {
            echo "<h3>Listagem de clientes</h3><table>";
            echo "<th>nome</th> <th>CPF</th> <th>endereço</th>";

            foreach($resultado as $row){
                $nm = $row['cliente_nome'];
                $cpf = $row['cliente_cpf'];
                $end = $row['cliente_endereco'];
                echo "<tr>
                
                <td>$nm</td> 
                <td>$cpf/td>
                <td>$end</td>
                
                
                </tr>";
                echo "</table>";
            }

                



        }



        
    }
}





?>