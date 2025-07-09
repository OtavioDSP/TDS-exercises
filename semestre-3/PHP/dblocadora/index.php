<?php
session_start();

include_once 'src/php/config/dbconnect.php';
include_once 'src/php/classes/Class-Adm.php';

if (isset($_POST['cad_adm'])) {
    $login = $_POST['nome_adm_cad'];
    $senha = $_POST['senha_adm_cad'];

    $adm = new adm('', $login, $senha, $conexao);
    $adm->insereAdm();

    $_SESSION['login'] = $login;
    // Evite guardar senha em sessão

    header("Location: src/php/routes/home.php");
    exit();
}

if (isset($_POST['adm_log'])) {
    $login = $_POST['nome_adm_log'];
    $senha = $_POST['senha_adm_log'];

    $adm = new adm('', $login, $senha, $conexao);
    $loginValido = $adm->buscaAdm();

    if ($loginValido) {
        $_SESSION['login'] = $login;
        $_SESSION['ultimo_acesso'] = time();

        header("Location: src/php/routes/home.php");
        exit();
    } else {
        $erro_login = "Login ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="src/css/darkmode.css">
</head>
<body>
    <button id="modo-noturno-btn" class="dark-toggle-btn">Modo Noturno</button>

    <form method="post" action="">
        <h2>Login</h2>
        <input type="text" name="nome_adm_log" placeholder="Usuário" required />
        <input type="password" name="senha_adm_log" placeholder="Senha" required />
        <input type="submit" value="Entrar" name="adm_log" />
    </form>

    <form method="post" action="">
        <h2>Cadastro</h2>
        <input type="text" name="nome_adm_cad" placeholder="Usuário" required />
        <input type="password" name="senha_adm_cad" placeholder="Senha" required />
        <input type="submit" value="Cadastrar" name="cad_adm" />
    </form>

    <?php if (isset($erro_login)) echo "<p style='color:red;'>$erro_login</p>"; ?>
    <script src="src/js/darkmode.js"> </script>
</body>
</html>
