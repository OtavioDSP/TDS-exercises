<?php
include_once 'src/banco/dbconnect.php';
include_once 'src/class/Class-Usuario.php';
// Iniciando a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
    <h1>Cadastro</h1>  
        <label>Login: <input type="text" name="loginCad"/></label>
        <label>Senha: <input type="password" name="senhaCad"/></label>
        <input type="submit" name="cadastrar" value="Enviar"/>
    </form>

    <form action="" method="post">
        <h1>Entrar</h1>
        <label>Login: <input type="text" name="loginEnt"/></label>
        <label>Senha: <input type="password" name="senhaEnt"/></label>
        <input type="submit" name="entrar" value="Enviar"/>
    </for
    
<?php
    if (isset($_POST['cadastrar'])) {
        $login = $_POST['loginCad'];
        $senha = $_POST['senhaCad'];
        $usuario = new Usuario('' ,$login, $senha, $conexao);
        $usuario->insereUsuario();

        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;


        

        echo'<br><br><br><button><a href="src/routes/userpage.php">Pagina de Usuario</a></button>';
    }
    elseif (isset($_POST['entrar'])) {
        $login = $_POST['loginEnt'];
        $senha = $_POST['senhaEnt'];

        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        echo "As variáveis de sessão foram definidas.";
        echo'<br><br><br><button><a href="src/routes/userpage.php">Pagina de Usuario</a></button>';
    
    }
   
    

?>
    
    
</body>
</html>