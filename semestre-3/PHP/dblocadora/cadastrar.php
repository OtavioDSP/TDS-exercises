<?php
include_once 'src/php/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/cadastrarstyle.css">
    <title>Cadastro</title>
</head>
<body>

<header>
    <div class="header-left">
        <img src="src/img/logo.png" alt="Logo" class="logo">
    </div>

    <div class="header-center">
        <nav class="nav-links">
            <a href="index.html">Início</a>
            <a href="verificar-veiculos.html">Verificar Registros</a>
        </nav>
    </div>

    <div class="header-right">
        <h1>Moon Runner<br>Locadora de Veículos</h1>
    </div>
</header>


<div class="form-container">
    <div class="form">
        <form action="src/php/global.php" method="post">
            <input type="text" name="cliente-cpf" placeholder="Seu nome">
            <input type="text" name="nome-cliente" placeholder="Seu CPF">
            <input type="text" name="cliente-endereco" placeholder="Seu endereço">
            <div class="form-buttons">
                <input type="submit" value="Cadastrar" name="cadastrar-cliente">
                <input type="submit" value="Listar" name="listar-cliente">
            </div>
        </form>
    </div>

    <div class="form">
        <form action="src/php/global.php" method="post">
            <input type="text" name="carro_desc" placeholder="Carro">
            <select name="carro_marca">
                <option value="">Informe a Marca</option>
                <?php
                $sql = "SELECT marca_codigo, marca_descricao FROM tbmarca";
                $resultado = $conexao->query($sql);
                if ($resultado->num_rows > 0) {
                    foreach($resultado as $row){
                        $codigo = $row['marca_codigo'];
                        $desc = $row['marca_descricao'];
                        echo "<option value='$codigo'>$desc</option>";
                    }
                }
                ?>
            </select>
            <input type="text" name="carro_placa" placeholder="Placa do veículo.">
            <div class="form-buttons">
                <input type="submit" value="Cadastrar" name="cadastrar-carro">
                <input type="submit" value="Listar" name="listar-carro">
            </div>
        </form>
    </div>
</div>
            
            
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