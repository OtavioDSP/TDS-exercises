<?php 
include_once '../global.php';
include_once '../config/listagem-constructor.php'


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Registros - Moon Runner</title>
    <link rel="stylesheet" href="../../css/verificarstyle.css">
</head>
<body>

<header>
    <div class="header-left">
        <img src="../../img/logo.png" alt="Logo" class="logo">
    </div>

    <div class="header-center">
        <nav class="nav-links">
            <a href="index.html">Início</a>
            <a href="cadastrar.php">Cadastrar Veículos</a>
        </nav>
    </div>

    <div class="header-right">
        <h1>Moon Runner<br>Locadora de Veículos</h1>
    </div>
</header>
<div class="cards-container">
    <!-- <form action="src/php/global.php" method="post" class="card">
        <input type="submit" name="listar-cliente" value="Listar Clientes">
    </form>

    <form action="src/php/global.php" method="post" class="card">
        <input type="submit" value="Listar Veículos" name="listar-carro">
    </form>

    <form action="src/php/global.php" method="post" class="card">
        <input type="submit" value="Listar Locações" name="listar-locacao">
    </form>

    <form action="src/php/global.php" method="post" class="card">
        <input type="submit" name="listar-marca" value="Listar Marcas">
    </form> -->
</div>

<div class="form_container">
<?php
    
    $marca->listarMarca();

    $carro->listarVeiculos();
    
    $locacao->listarLocacoes();

    $cliente->listarCliente();
?>


</div>





</body>
</html>