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


    
</body>
</html>