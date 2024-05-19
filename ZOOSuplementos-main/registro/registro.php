<?php
session_start();


if (isset($_SESSION['token'])) {
  // Obtém o ID do usuário da sessão
  $idUser = $_SESSION['token'];
} else{
  $idUser = '';

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suplementos Fitness</title>
    <link rel="stylesheet" href="../produtos/produtos.css">
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect"
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<style>

  body{
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    background-image: url('https://www.actionacademia.com.br/background2.jpg');
    background-size: cover;
  }

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    bottom: 0;
    position: static;
    bottom:0%;
    width: 100;%
}


p{

    font-size : 55px;
    color : white;
    font-size: large;
    align-items: center;
    text-align: center;
}


form {
    max-width: 550px;
    margin: auto;
    padding: 20px;
    background-color: rgba(7, 7, 7, 0.575);
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    color: black;
}
label {
    display: block;
    margin-bottom: 5px;
    color: #ccc;
}
input[type="text"],
input[type="email"],
input[type="number"],
input[type="tel"],
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 14px; 
}

input[type="submit"] {
    background-color: #0e0e0e;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
}

input[id="idade"] {
    -moz-appearance: textfield;
    appearance: textfield;
    width: 150px;
  }
  
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

input[id="cpf"]{
    -moz-appearance: textfield;
    appearance: textfield;
    width: 150px;
}

input[id="telefone"]{
    -moz-appearance: textfield;
    appearance: textfield;
    width: 150px;
}

input[id="nome"]{

    width: 250px;
}

input[id="email"]{

    width: 300px;
}
@media (max-width: 992px) {
    .navbar-toggler {
        border: none;
    }
}

h1 {
    text-align: center;
    color: white;
}



</style>
<body>

<header>
    <nav class="navbar navbar-expand-lg coloriz">
      <div class="container-fluid">
      <a class="navbar-brand" href="../index.php"><img src="../img/Group 5.svg" alt="Logo" class="imglogo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav justify-content-end spaces">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/index.php">Inicio</a>
            </li>
            <?php if ($idUser != '') { ?>
            <li class="nav-item">
              <a class="nav-link" href="../produtos/produtos.php">Produtos</a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../carrinho/carrinho.php"><img src="../img/icons8-shopping-cart-50.png" alt=""
                  style="width:30px"></a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../perfil/profile.php"><img src="../img/account.png" alt=""
                  class="fonteLog"><span></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login/desconecta.php"><img src="../img/icons8-logout-50.png" alt=""
                  class="fonteLog"><span>Logout</span></a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="../produtos/produtos.php">Produtos</a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../carrinho/carrinho.php"><img src="../img/icons8-shopping-cart-50.png" alt=""
                  style="width:30px"></a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../login/login.php"><img src="../img/account.png" alt=""
                  class="fonteLog"><span>Login</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../registro/registro.php"><img
                  src="../img/icons8-interface-de-usuário-natural-2-48.png" alt="" class="fonteLog"><span
                  class="Teste">Registre-se</span></a>
            </li>
            <?php } ?>
            <?php
                        if ($idUser == '8') { ?>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../dbprod/add_product.php">Adicionar Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../dbprod/modidyprod.php">Listar Produtos</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<br><br>
<div>
<h1>Formulário de Cadastro</h1><br>

    <form action="submit_form.php" method="post">
        <label for="nome">Nome Completo :</label><br>
        <input type="text" id="nome" name="nome" required><br>

        <label for="idade">Idade :</label><br>
        <input type="tel" id="idade" name="idade" required><br>

        <label for="cpf">CPF :</label><br>
        <input type="text" id="cpf" name="cpf" mask="000.000.000-00"/> <br>

                
        <label for="telefone">Telefone :</label><br>
        <input type="number" id="telefone" mask="(00) 00000-0000" name="telefone" required><br>

        <label for="email">E-mail :</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="senha">Senha :</label><br>
        <input type="senha" id="senha" name="senha" required>
        
        <br>
        <br>
        
        
        <input type="submit" value="Enviar" href="/index.php">

        <br>
        <br>
    </form>

<div>
</body>
<br>  
<footer>
  <p>&copy; 2024 Suplementos Fitness. Todos os direitos reservados.</p>
  </footer>

</html>
