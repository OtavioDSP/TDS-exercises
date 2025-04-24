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
        

    }

    public function inserirVeiculo(){
        $sql = "INSERT INTO tbveiculo(veiculo_placa, veiculo_descricao, veiculo_marca) VALUES (?,?,?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param('sis', $this->veiculoDesc, $this->veiculoPlaca, $this->veiculoMarca);
        if($stmt->execute()){
            echo "carro inserido";



        }



    }







}




?>