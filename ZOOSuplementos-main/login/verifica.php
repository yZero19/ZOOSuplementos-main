<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('conexao.php');

if (isset($_POST['email'], $_POST['senha'])) {
    if (empty($_POST['email'])) {
        echo "Preencha seu e-mail";
    } elseif (empty($_POST['senha'])) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM supusers WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            $_SESSION['token'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location:../index.php");
            exit; 
        } else {
            echo "<script>alert('E-mail ou senha incorretos');</script>";
            echo "<script>location.href='login.php';</script>";
        }
    }
}
?>
