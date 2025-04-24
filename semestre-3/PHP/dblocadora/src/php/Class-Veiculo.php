<?php 

Class Veiculo{
    private $veiculo_Desc;
    private $veiculoPlaca;
    private $veiculo_Marca;

    public function __construct($veiculo_Desc,$veiculo_Marca, $veiculoPlaca)
    {
        $this->veiculo_Desc= $veiculo_Desc;
        $this->veiculo_Marca = $veiculo_Marca;
        $this->veiculoPlaca = $veiculoPlaca;
        

    }

    public function inserirVeiculo(){
        $sql = "INSERT INTO tbveiculo(veiculo_placa, veiculo_descricao, veiculo_marca) VALUES (?,?,?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bind_param('sis', $this->veiculo_descricao, $this->veiculo_placa, $this->veiculo_marca);



    }







}




?>