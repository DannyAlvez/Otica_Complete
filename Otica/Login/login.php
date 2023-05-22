<?php
include('conexao.php');

if(isset($_POST['login']) || isset($_POST['senha'])) {

    if(strlen($_POST['login']) == 0) {
        echo "Preencha o Login";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua Senha";
    } else {

        $login = $mysqli->real_escape_string($_POST['login']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM ADM WHERE login = '$login' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die('Falha 404:' . $mysqli->error);
    
        $quantidade = $sql_query->num_rows;
        if($quantidade == 1) {

            $ADM = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $ADM['id'];
            $_SESSION['login'] = $ADM['login'];

            header("Location: index.php");

        } else {
            echo "Falha ao Fazer Login";
        }
    
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Danpha's</title>
</head>

<body>
    <nav>
        <section class="logo">
            <a href="/Login/login.php"><img src="/Img/logo.png" alt="logo" class="logo"></a>
        </section>
    </nav>

    <header>
            <div class="login">
                <form action="" method="POST">
                    <label for="login">Login</label>
                    <input type="text" id="login" name="login" required>
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                    <button type="submit">Entrar</button>
                </form>
            </div>
    </header>
</body>
</html>