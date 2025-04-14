<?php

class contato{

    private $nome_con;
    private $email;
    private $desc_con;
    private $conexao;

    public function __construct($nome_con, $email, $desc_con, $conexao){
        $this->nome_con = $nome_con;
        $this->email = $email;
        $this->desc_con = $desc_con;
        $this->conexao = $conexao;
    }
    public function insereContato(){
        $sql = "INSERT INTO tb_contato(nome, email, msg) VALUES (?,?,?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param('sss', $this->nome_con, $this->email, $this->desc_con);
        if($stmt->execute()){
        echo "contato inserido";


        }else{

        echo "erro ao inserir". $stmt->error;

        }

    $stmt->close();
    }

    public function listarContatos(){
        $sql = "SELECT nome, email, msg FROM tb_contato";

        $resultado = $this->conexao->query($sql);
        if($resultado->num_rows>0){
            echo "<h3>Listagem de Diretores:<h3><table>";
            echo "<th>nome</th> <th>email</th> <th>msg</th>";
            foreach($resultado as $row){
                $nm = $row['nome'];
                $em = $row['email'];
                $msg = $row['msg'];
                echo "<tr>
                
                <td>$nm</td> 
                <td>$em</td>
                <td>$msg</td>
                
                
                </tr>";

            }

        }




    }

}

?>