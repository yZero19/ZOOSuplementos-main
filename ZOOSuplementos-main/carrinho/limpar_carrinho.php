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

// Verifica se o usuário está logado antes de limpar o carrinho de compras
if ($idUser != '') {
    // Limpa o carrinho de compras excluindo os registros associados ao usuário atual
    $sql = "DELETE FROM comprazooprodutos WHERE idUser = $idUser";

    if ($conn->query($sql) === TRUE) {
        echo "Carrinho limpo com sucesso!";
    } else {
        echo "Erro ao limpar carrinho: " . $conn->error;
    }
} else {
    echo "Usuário não identificado. Não foi possível limpar o carrinho.";
}

$conn->close();
?>
