<?php

    include_once '../classes/Class-Marca.php';
    include_once '../config/dbconnect.php';
<<<<<<< HEAD
    
=======

>>>>>>> 03738659e0e950e40a7e3db076d44461f8b8af2d
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/edits.css">
    <title>Editar Marca</title>

</head>
<body>
    <div class="container">
        <h2>Editar Marca</h2>
        <form method="post" action="../global.php">
            <input type="hidden" name="codigo_marca" value="<?php echo $_POST['codigo_marca'] ?? ''; ?>">

            <div class="form-group">
                <label for="nome_marca">Nova Descrição da Marca:</label>
<<<<<<< HEAD
                <input type="text" id="nome_marca" name="nome_marca" value="<?php echo $_POST['descricao_marca'] ?? ''; ?>" >
=======
                <input type="text" id="nome_marca" name="nome_marca" value="" >
>>>>>>> 03738659e0e950e40a7e3db076d44461f8b8af2d
            </div>
        
            <button type="submit" name="atualizar_marca">Atualizar Marca</button>
        </form>
        <a href="listagem_marcas.php" class="back-link">Voltar para Listagem de Marcas</a>
    </div>
</body>
</html>

