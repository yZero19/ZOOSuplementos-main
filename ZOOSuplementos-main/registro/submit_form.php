<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if (empty($nome) || empty($idade) || empty($cpf) || empty($telefone) || empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    //echo "Dados recebidos com sucesso!";

    $servername = "localhost";
    $username = "id22140339_zoosup";
    $senha = "Zoouni9.";
    $dbname = "id22140339_zoosuplementos";

    $conn = new mysqli($servername, $username, $senha, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "
    CREATE TABLE IF NOT EXISTS supusers (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL,
        idade INT(3) NOT NULL,
        cpf VARCHAR(15) NOT NULL UNIQUE,
        telefone INT(15) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE,
        senha VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    

    if ($conn->query($sql) === TRUE) {
       // echo "Table created successfully";
    } else {
       // echo "Error creating table: " . $conn->error;
    }

    $sql_insert = "
    INSERT INTO supusers (nome, idade, cpf, telefone, email, senha)
    VALUES ('$nome', '$idade', '$cpf', '$telefone', '$email', '$senha')";
    if ($conn->query($sql_insert) === true){
        $last_id = $conn->insert_id;
        header("Location:../index.php");
        echo "Novo registro criado com ID: " . $last_id;
        exit; 
    } else {
        echo "<script>alert('Erro ao registrar o usuário. Verifique se os dados estão corretos e tente novamente.');</script>";
        
        echo "<script>window.location.href = window.location.href;</script>";
    }
    

    $conn->close();
} else {
    echo "Acesso negado.";
}


