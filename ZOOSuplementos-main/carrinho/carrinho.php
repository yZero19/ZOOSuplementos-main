<?php
include ('select.php');
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
    margin-bottom: 60px; /* Adicionando espaço para o footer */
  }

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed; /* Posição fixa apenas na parte inferior da janela de visualização */
    bottom: 0;
    width: 100%;
}

.carrinho {
    max-width: 550px;
    margin: auto;
    padding: 20px;
    background-color: rgba(7, 7, 7, 0.575);
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    color: black;
}

p{

    font-size : 55px;
    color : white;
    font-size: large;
    align-items: center;
    text-align: center;
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

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    background-color: white;
    color: black;

}

th {
    background-color: black;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
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
              <a class="nav-link" href="../ZOOSuplementos-main/produtos/produtos.php">Produtos</a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/carrinho/carrinho.php"><img src="../img/icons8-shopping-cart-50.png" alt=""
                  style="width:30px"></a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/perfil/profile.php"><img src="../img/account.png" alt=""
                  class="fonteLog"><span></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/login/desconecta.php"><img src="../img/icons8-logout-50.png" alt=""
                  class="fonteLog"><span>Logout</span></a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/produtos/produtos.php">Produtos</a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/carrinho/carrinho.php"><img src="../img/icons8-shopping-cart-50.png" alt=""
                  style="width:30px"></a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/login/login.php"><img src="../img/account.png" alt=""
                  class="fonteLog"><span>Login</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/registro/registro.php"><img
                  src="../img/icons8-interface-de-usuário-natural-2-48.png" alt="" class="fonteLog"><span
                  class="Teste">Registre-se</span></a>
            </li>
            <?php } ?>
            <?php
                        if ($idUser == '8') { ?>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/dbprod/add_product.php">Adicionar Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/dbprod/modidyprod.php">Listar Produtos</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header><br><br>
<div class="carrinho">
    <h1>Carrinho</h1><br>
    <table>
        <tr>
            <th> Produto</th>
            <th> Preço </th>
            <th> Quantidade </th>
        </tr>
        <?php
        foreach ($produtos as $produto) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($produto["nome"]) . '</td>';
            echo '<td>' . htmlspecialchars($produto["preco"]) . '</td>';
            echo '<td>' . htmlspecialchars($produto["quantidade"]) . '</td>';
            echo '</tr>';
        }
        ?>
        <tr>
            <td colspan="2" align="center">Total de Preço:</td>
            <td>$<?php echo number_format($totalPreco, 2); ?></td>
        </tr>
    </table>
    <BR>
    <div style="display: flex;">
    <button id="limparCarrinhoBtn" style="background-color: #ff0000; color: #ffffff; border: none; padding: 10px 20px; border-radius : 20px; cursor: pointer; margin-right: 20px;">Limpar Carrinho</button>
    <button id="FinalizarCompra" style="background-color: green; color: #ffffff; border: none; padding: 10px 20px; border-radius : 20px; cursor: pointer;">Finalizar Compra</button>
</div>

</div>

<footer>
    <p>&copy; 2024 Suplementos Fitness. Todos os direitos reservados.</p>
</footer>

<script>
   function limparCarrinho() {
document.getElementById('limparCarrinhoBtn').addEventListener('click', function() {
    // Enviar uma solicitação AJAX para limpar o carrinho
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'limpar_carrinho.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Atualizar a página após limpar o carrinho
            window.location.reload();
        }
    };
    xhr.send();
});

document.getElementById('mensagemCarrinhoLimpo').style.display = 'block';
   }

   document.getElementById('limparCarrinhoBtn').addEventListener('click', limparCarrinho);
   
document.getElementById('FinalizarCompra').addEventListener('click', function() {
    // Enviar uma solicitação AJAX para limpar o carrinho
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'finalizar.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Atualizar a página após limpar o carrinho
            window.location.reload();
        }
    };
    xhr.send();
});
</script>

</body>
</html>
