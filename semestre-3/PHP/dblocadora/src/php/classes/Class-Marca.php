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

            echo "Marca Inserida";


        }else{

            echo "Erro ao Inserir". $stmt->error;

        }

    }

    public function listarMarca() {
        $sql = "SELECT marca_codigo, marca_descricao FROM tbmarca ORDER BY marca_codigo ASC";
        $resultado = $this->conexao->query($sql);
    
        if ($resultado->num_rows > 0) {
            echo "<h3>Listagem de Marcas</h3><table>";
            echo "<tr><th>Código</th><th>Descrição</th></tr>";
    
            foreach ($resultado as $row) {
                $codigo = $row['marca_codigo'];
                $descricao = $row['marca_descricao'] ?? 'Não informado';
    
                echo "<tr>
                        <td>$codigo</td>
                        <td>$descricao</td>
                      </tr>";
            }
    
            echo "</table>";
        } else {
            echo "<p>Nenhuma marca encontrada.</p>";
        }
    }
}
?>