<?php 
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../../../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/indexstyle.css">
    <link rel="stylesheet" href="../../css/darkmode.css">

    <title>Locadora de veículos - Moon Runner</title>
</head>
<body>
    <button id="modo-noturno-btn" class="dark-toggle-btn">Modo Noturno</button>
    <header>
        <div class="header-left">
            <img src="../../img/logo.png" alt="Logo" class="logo">
        </div>
    
        <div class="header-center">
            <nav class="nav-links">
                <!-- <a href="index.html">Início</a>
                <a href="cadastrar.php">Cadastrar Veículos</a> -->
            </nav>
        </div>
    
        <div class="header-right">
            <h1>Moon Runner<br>Locadora de Veículos</h1>
            <a href="../config/logout.php" class="nav-links a logout-button">Logout</a>
        </div>
    </header>
    <main>
        <main>
            <div class="container">
                <a href="verificar-registros.php" class="card">
                    <h5>Registros</h5>
                </a>
                <a href="cadastrar.php" class="card">
                    <h5>Cadastrar</h5>
                </a>
                
            </div>
        </main>
    <script src="../../js/darkmode.js"></script>
</body>
</html>
