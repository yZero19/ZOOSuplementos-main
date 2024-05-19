<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('conexao.php');

if (isset($_SESSION['token'])) {
    $idUser = $_SESSION['token'];
    
    if (isset($_POST['iditem'], $_POST['nome'], $_POST['preco'], $_POST['quantidade'])) {
        $iditem = $mysqli->real_escape_string($_POST['iditem']);
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $preco = $mysqli->real_escape_string($_POST['preco']);
        $quantidade = $mysqli->real_escape_string($_POST['quantidade']);

        $mysqli->begin_transaction();

        $sql_update = "UPDATE zooprodutos SET quantidade = quantidade - $quantidade WHERE id = $iditem AND quantidade >= $quantidade";
        $result_update = $mysqli->query($sql_update);

        if ($result_update && $mysqli->affected_rows > 0) {
            $sql_insert = "INSERT INTO comprazooprodutos (idUser, idItem, Nome, preco, quantidade) VALUES ($idUser, $iditem, '$nome', $preco, $quantidade)";
            $result_insert = $mysqli->query($sql_insert);

            if ($result_insert) {
                $mysqli->commit();
                header("Location: carrinho.php");
                echo "<script>alert('Compra realizada com sucesso');</script>";
                
            } else {
                $mysqli->rollback();
                echo "<script>alert('Erro ao registrar a compra');</script>";
                header("Location: {$_SERVER['HTTP_REFERER']}");
            }
        } else {
            $mysqli->rollback();
            echo "<script>alert('Não há estoque disponível para a quantidade desejada deste produto.');</script>";
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }
    } else {
        echo "<script>alert('Dados do produto incompletos ou não fornecidos');</script>";
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
} else {
    header("Location:/login/login.php");
    exit;
}
?>
