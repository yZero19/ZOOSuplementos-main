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
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="../login/login.css">

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
  </header>    <div class="login-container" style="padding-top: 70px;">
    <form action="../login/verifica.php" method="POST" class="login-form">
    <h2>Login</h2>
    <label for="email">Email</label><br><br>
    <input type="text" id="email" name="email" placeholder="Email" required><br>
    <label for="senha">Senha</label><br><br>
    <input type="password" id="senha" name="senha" placeholder="Senha" required><br><br>
    <button type="submit">Entrar</button>
</form>

    </div>
</body>
</html>

