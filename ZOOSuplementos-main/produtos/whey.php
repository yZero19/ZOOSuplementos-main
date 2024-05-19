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
    <link rel="stylesheet" href="/index.css">
    <link rel="stylesheet" href="../produtos/produtos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet">
      
  
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg coloriz">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.php"><img src="../img/Group 5.svg" alt="Logo" class="imglogo"></a>
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
  </header><br><br>
<div class="container">
    <div class="product-box">
      <img class="product-image" src="../img/whey.jpg" alt="Awesome Widget">
      <div class="product-info">
        <div class="product-description">
          <h2>Whey Zoo</h2>
          <p>Experimente o poder do whey para alcançar seus objetivos fitness!</p>
        </div>
        <div class="product-price">R$99,99</div>
            <form action="../carrinho/comprar.php" method="post">
                <input type="hidden" name="iditem" value="3">
                <input type="hidden" name="nome" value="Creatina Zoo">
                <input type="hidden" name="preco" value="99.99">
                <label for="quantidade">Quantidade:</label>
                <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="10">
                <button type="submit" class="buy-button">Compre Já</button>
            </form>
        </div>
    </div>
</div>
<br><br>
<footer>
    <p2>&copy; 2024 Suplementos Fitness. Todos os direitos reservados.</p2>
</footer>
</body>
</html>
