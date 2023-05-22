<?php
include('protect.php');

$host = "localhost";
$database = "db_otica";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($host, $usuario, $senha, $database);
if ($mysqli->connect_errno) {
    echo "Falha ao Conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}

if (isset($_GET['term'])) {
    $termo = $_GET['term'];


    $sql = "SELECT id_cliente, nome_cliente, cpf, cidade, data_nascimento FROM Clientes WHERE nome_cliente LIKE '%$termo%'";
    $resultado = $mysqli->query($sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Danpha's</title>
</head>

<body>
    <nav>
        <a href="/Index/index.php"><img src="/Img/logo.png" alt="logo" class="logo"></a>
        <form action="buscar_cliente.php" method="GET">
            <div class="search-box">
                <input type="search" class="search-text" name="term" placeholder="Pesquisar...">
                <button type="submit"><img src="/Img/pesquisa.png"></button>
            </div>
        </form>
        <ul>
            <li><span class='user'>
                    <?php echo $_SESSION['login']; ?>
                </span></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
    <br>
    <section class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Cidade</th>
                    <th>Data Nascimento</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if ($resultado && $resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><a href='/Cliente/cliente.php?id=" . $row['id_cliente'] . "'>" . $row['id_cliente'] . "</a></td>";
                        echo "<td><a href='/Cliente/cliente.php?id=" . $row['id_cliente'] . "'>" . $row['nome_cliente'] . "</a></td>";
                        echo "<td>" . $row['cpf'] . "</td>";
                        echo "<td>" . $row['cidade'] . "</td>";
                        echo "<td>" . $row['data_nascimento'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum resultado encontrado</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</body>

</html>