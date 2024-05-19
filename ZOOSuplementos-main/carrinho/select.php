<?php
session_start();

// Verifica se o token de usuário está definido na sessão
if (isset($_SESSION['token'])) {
    $idUser = $_SESSION['token'];
} else {
    // Se o token não estiver definido, defina $idUser como vazio
    $idUser = '';
}

$servername = "localhost";
$username = "id22140339_zoosup";
$senha = "Zoouni9.";
$dbname = "id22140339_zoosuplementos";

$conn = new mysqli($servername, $username, $senha, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verifica se o usuário está logado antes de buscar os produtos no carrinho
if ($idUser != '') {
    $sql = "SELECT nome, preco, quantidade FROM comprazooprodutos WHERE idUser = $idUser";

    $result = $conn->query($sql);

    $produtos = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $produtos[] = array(
                "nome" => $row["nome"],
                "preco" => $row["preco"],
                "quantidade" => $row["quantidade"]
            );
        }
    } else {
        echo "";
    }

    $totalPreco = 0;

    foreach ($produtos as $produto) {
        $totalPreco += $produto["preco"] * $produto["quantidade"];
    }
} else {
    // Se o usuário não estiver logado, defina $produtos como vazio e $totalPreco como 0
    $produtos = array();
    $totalPreco = 0;
}

$conn->close();
?>
