<?php

$servername = "localhost";
$username = "id22140339_zoosup";
$senha = "Zoouni9.";
$dbname = "id22140339_zoosuplementos";

    $conn = new mysqli($servername, $username, $senha, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "
    CREATE TABLE IF NOT EXISTS ZooProdutos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        Nome VARCHAR(30) NOT NULL,
        Quantidade INT(255) NOT NULL,
        preco DECIMAL(10,2) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    ?>