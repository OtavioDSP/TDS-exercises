<?php 

Class Veiculo{
    private $veiculoDesc;
    private $veiculoPlaca;
    private $veiculoMarca;
    private $conexao;

    public function __construct($veiculo_Desc, $veiculo_Marca, $veiculoPlaca, $conexao)
    {
        $this->veiculoDesc= $veiculo_Desc;
        $this->veiculoMarca = $veiculo_Marca;
        $this->veiculoPlaca = $veiculoPlaca;
        $this->conexao = $conexao;
        

    }

    public function inserirVeiculo(){
        $sql = "INSERT INTO tbveiculo(veiculo_placa, veiculo_descricao, veiculo_marca) VALUES (?,?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param('ssi', $this->veiculoDesc, $this->veiculoPlaca, $this->veiculoMarca);
        if($stmt->execute()){


            echo "Carro Inserido";

        }else{

            echo "Erro ao Inserir ". $stmt->error;

        }


    }
    public function listarVeiculos(){
        $sql = "SELECT veiculo_placa, veiculo_marca, veiculo_descricao, marca_descricao FROM tbveiculo INNER JOIN tbmarca ON tbveiculo.veiculo_marca = tbmarca.marca_codigo";
        $resultado = $this->conexao->query($sql);
        if ($resultado->num_rows>0) {
            echo "<h3>Listagem de Veículos</h3><table>";
            echo "<th>Carro</th> <th>Placa</th> <th>Marca</th> <th>Codigo da marca</th>";

            foreach($resultado as $row){
                $desc = $row['veiculo_descricao'];
                $plc = $row['veiculo_placa'];
                $marca = $row['marca_descricao'];
                $cod_marca = $row['veiculo_marca'];
                echo "<tr>
                
                <td>$desc</td> 
                <td>$plc</td>
                <td>$marca</td>
                <td>$cod_marca</td>";
            }

            echo"</tr>";
            echo "</table>";



            
        }
    }
} 












?>