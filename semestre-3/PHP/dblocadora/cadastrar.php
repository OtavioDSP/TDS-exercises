<?php
include_once 'src/php/dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="src/php/global.php" method="post">
        <input type="text" name="cliente-cpf" placeholder="Seu nome">
        <input type="text" name="nome-cliente" placeholder="Seu CPF">
        <input type="text" name="cliente-endereco" placeholder="Seu endereço">
        <input type="submit" value="Cadastrar" name="cadastrar-cliente">

        <input type="submit" value="Listar" name="listar-cliente">
    </form>

    <form action="src/php/global.php" method="post">

        <input type="text" name="carro_desc" placeholder="Carro">
        <select name="carro_marca" id="">
            <option value=""> Informe a Marca</option>
            <?php

            
            
            
            $sql = "SELECT marca_codigo, marca_descricao  FROM tbmarca";
            
            
            $resultado = $conexao->query($sql);
            if ($resultado->num_rows>0) {
               foreach($resultado as $row){
                   
                    $codigo = $row['marca_codigo'];
                    $desc = $row['marca_descricao'];

                    echo "<option value='$codigo'>$desc</option>";
                }
    
            }
?>

        </select>
        <input type="text" name="carro_placa" placeholder="placa do veiculo.">
        <input type="submit" value="Cadastrar" name="cadastrar-carro">

        <input type="submit" value="Listar" name="listar-carro">



    </form>


    <form action="src/php/global.php" method="post">
    <h3>Cadastrar Locação</h3>
        <select name="cliente_loc" id="">
        <option value=""> Informe o Cliente</option>
            <?php
            
            $sql = "SELECT cliente_nome, cliente_cpf FROM tbcliente";
                
                
                $resultado = $conexao->query($sql);
                if ($resultado->num_rows>0) {
                foreach($resultado as $row){
                    
                        $nome = $row['cliente_nome'];
                        $cpf = $row['cliente_cpf'];

                        echo "<option value='$cpf'>$nome</option>";
                    }
        
                }
            
            
            
            
            ?>
            </select>
            
            
            <select name="veiculo_loc" id="">
            <option value=""> Informe o Veiculo</option>
            <?php
            
            $sql = "SELECT veiculo_placa, veiculo_descricao FROM tbveiculo";
                
                
                $resultado = $conexao->query($sql);
                if ($resultado->num_rows>0) {
                foreach($resultado as $row){
                    
                        $veiculo = $row['veiculo_descricao'];
                        $placa = $row['veiculo_placa'];

                        echo "<option value='$placa'>$veiculo - $placa</option>";
                    }
        
                }
        
            
            
            
            ?>
        </select>
        <input type="date" name="dt_inicio" id="">
        <input type="date" name="dt_fim" id="">


        <input type="submit" value="cadastrar locacao" name="cadastrar-locacao">
        <input type="submit" value="listar locacao" name="listar-locacao">
    </form>


    <form action="src/php/global.php" method="post">
    <h3>cadastrar marcas</h3>
        <input type="text" name="marca_nome" placeholder="Marca">
        <input type="submit" name="cadastrar_marca" value="Cadastrar Marca">

    </form>


    
</body>
</html>