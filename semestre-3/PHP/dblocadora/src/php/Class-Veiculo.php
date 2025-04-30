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
        echo "$this->veiculoMarca";
        echo "$this->veiculoDesc";
        echo "$this->veiculoPlaca";
        $stmt = $this->conexao->prepare($sql);
        echo "deu";
        $stmt->bind_param('ssi', $this->veiculoDesc, $this->veiculoPlaca, $this->veiculoMarca);
        echo "$sql";
        if($stmt->execute()){


            echo "carro inserido";

        }else{

            echo "erro ao inserir ". $stmt->error;

        }


    }
    public function listarVeiculos(){
        $sql = "SELECT veiculo_placa, veiculo_marca, veiculo_descricao FROM tbveiculo";
        $resultado = $this->conexao->query($sql);
        if ($resultado->num_rows>0) {
            echo "<h3>Listagem de carros</h3><table>";
            echo "<th>Carro</th> <th>Descrição</th> <th>Marca</th>";

            foreach($resultado as $row){
                $desc = $row['veiculo_descricao'];
                $plc = $row['veiculo_placa'];
                $marca = $row['veiculo_marca'];
                echo "<br>
                
                <td>$desc</td> 
                <td>$plc</td>
                <td>$marca</td>
                
                
                </tr>";
            }



            
        }
    }
} 












?>