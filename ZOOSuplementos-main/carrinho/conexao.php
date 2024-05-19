<?php

$servername = "localhost";
$username = "id22140339_zoosup";
$senha = "Zoouni9.";
$dbname = "id22140339_zoosuplementos";

$mysqli = new mysqli('localhost', 'id22140339_zoosup', 'Zoouni9.', 'id22140339_zoosuplementos');

if ($mysqli->connect_error) {
    die('Erro de conexão: ' . $mysqli->connect_error);
}

return $mysqli;


?>

<?php
      $sql = "
    CREATE TABLE IF NOT EXISTS CompraZooProdutos (
        idUser INT (255),
        idItem INT (255), 
        Nome VARCHAR(30) NOT NULL,
        Quantidade INT(255) NOT NULL,
        preco DECIMAL(10,2) NOT NULL,
        FOREIGN KEY (idUser) REFERENCES SupUsers(id),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }



    ?>