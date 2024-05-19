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
  <link rel="stylesheet" href="../ZOOSuplementos-main/index.css">
  <link rel="shortchut icon" href="/img/apple-touch-icon.png">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg coloriz">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="../ZOOSuplementos-main/img/Group 5.svg" alt="Logo" class="imglogo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav justify-content-end spaces">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="../index.php">Inicio</a>
            </li>
            <?php if ($idUser != '') { ?>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/produtos/produtos.php">Produtos</a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/carrinho/carrinho.php"><img src="../ZOOSuplementos-main/img/icons8-shopping-cart-50.png" alt=""
                  style="width:30px"></a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/perfil/profile.php"><img src="../ZOOSuplementos-main/img/account.png" alt=""
                  class="fonteLog"><span></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/login/desconecta.php"><img src="../ZOOSuplementos-main/img/icons8-logout-50.png" alt=""
                  class="fonteLog"><span>Logout</span></a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/produtos/produtos.php">Produtos</a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/carrinho/carrinho.php"><img src="../ZOOSuplementos-main/img/icons8-shopping-cart-50.png" alt=""
                  style="width:30px"></a>
            </li>
            <div class="linha-vertical"></div>
            <li class="nav-item">
              <a class="nav-link" href="../ZOOSuplementos-main/login/login.php"><img src="../ZOOSuplementos-main/img/account.png" alt=""
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
  </header>

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="../ZOOSuplementos-main/img/banner.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="../ZOOSuplementos-main/img/bannerM.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="../ZOOSuplementos-main/img/banner3.png" class="d-block w-100" alt="...">
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>





  <section class="hero">
    <h3>Bem-vindo ao nosso Mundo !</h3>
    <br>

    <p class="fraseIndex">Alcance seu potencial máximo com a ZOO SUPLEMENTOS: onde a força da natureza impulsiona seu
      desempenho e transforma seus objetivos em conquistas extraordinárias.</p>
  </section>


  <section class="explorarProduto">
    <div class="produtoDesc">
      <span class="textoProduto">Compras em até 3x</span>
    </div>

    <div class="produtoDesc">
      <span class="textoProduto">Saúde e Qualidade de Vida</span>
    </div>

    <div class="produtoDesc">
      <span class="textoProduto">Energia</a></span>
    </div>

  </section>
  <br>
  <div class="separa"></div>


  <section class="back">

    <div class="cardi">
      <div class="testeS">
        <div class="container">
          <div class="header">
            <img src="../ZOOSuplementos-main/img/rino.jpg" srcset="" class="imgCard">
          </div>
          <p>Pré Treino</p>
          <div class="textCard">
            <h4>R$89.99 <br>
              <p class="textoParc">em até 3x no cartão de crédito</p>
            </h4>
            </h4>
            <small class="textDesc">Experimente nosso Pré-Treino e maximaze seus resultados e diga adeus a seu cansaço
              !</small>

          </div>
          <button class="btnBuy">
            <a href="../ZOOSuplementos-main/produtos/PreTreino.php" style="text-decoration:none; color:white">COMPRAR</a>
          </button>
        </div>
      </div>


      <div class="testeS">
        <div class="container">
          <div class="header">
            <img src="../ZOOSuplementos-main/img/wolf.jpg" alt="" class="imgCard">
          </div>
          <p>Multi Vitaminico</p>
          <div class="textCard">
            <h4>R$45.99 <br>
              <p class="textoParc">em até 3x no cartão de crédito</p>
            </h4>
            <small class="textDesc">O Multi vitaminico é essencial para você manter suas vitaminas em seu dia a
              dia</small>
          </div>
          <button class="btnBuy">
            <a href="../ZOOSuplementos-main/produtos/multi.php" style="text-decoration:none; color:white">COMPRAR</a>
          </button>
        </div>
      </div>


      <div class="testeS">
        <div class="container">
          <div class="header">
            <img src="../ZOOSuplementos-main/img/crea.jpg" alt="" class="imgCard">
          </div>
          <p>Creatina</p>
          <div class="textCard">
            <h4>R$80.99 <br>
              <p class="textoParc">em até 3x no cartão de crédito</p>
            </h4>
            </h4>
            <small class="textDesc">Experimente nossa creatina e potencialize seus resultados e transforme seu fisico
              agora !</small>
          </div>
          <button class="btnBuy">
            <a href="../ZOOSuplementos-main/produtos/creatina.php" style="text-decoration:none; color:white">COMPRAR</a>
          </button>
        </div>
      </div>

      <div class="testeS">
        <div class="container">
          <div class="header">
            <img src="../ZOOSuplementos-main/img/whey.jpg" alt="" class="imgCard">
          </div>
          <p>Whey</p>
          <div class="textCard">
            <h4>R$99.99 <br>
              <p class="textoParc">em até 3x no cartão de crédito</p>
            </h4>
            </h4>
            <small class="textDesc">Experimente o poder do nosso whey para alcançar seus objetivos na vida
              fitness!</small>
          </div>
          <button class="btnBuy">
            <a href="../ZOOSuplementos-main/produtos/whey.php" style="text-decoration:none; color:white">COMPRAR</a>
          </button>
        </div>
      </div>
    </div>
    <br>




  </section>

  <div class="separa"></div>
  <h1 class="topAvaliacao">Avaliações dos nossos clientes</h1>
  <div class="cardes">
    <div class="avaliacaoCard">
      <div class="container">
        <div class="header">
        </div>
        <div class="textCard">
          <img src="/ZOOSuplementos-main/img/imgAV.png" alt="" class="imgAv">
          <h4>Mateus Santos<br>
            <p class="textoParc">18/02/1999</p>
          </h4>
          </h4>
          <small class="textoAv">Excelente qualidade, recomendo.</small>
        </div>
      </div>
      <div class="rate">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label>
      </div>
    </div>
    <div class="avaliacaoCard">
      <div class="container">
        <div class="header">
        </div>
        <div class="textCard">
          <img src="/ZOOSuplementos-main/img/imgAV.png" alt="" class="imgAv">
          <h4>Vinicius Santos<br>
            <p class="textoParc">23/09/1978</p>
          </h4>
          </h4>
          <small class="textoAv">Produtos incriveis, ajudaram bastante na minha evolução.</small>
        </div>
      </div>
      <div class="rate">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label>
      </div>
    </div>
    <div class="avaliacaoCard">
      <div class="container">
        <div class="header">
        </div>
        <div class="textCard">
          <img src="/ZOOSuplementos-main/img/imgAV.png" alt="" class="imgAv">
          <h4>Ronaldo Nazario<br>
            <p class="textoParc">30/06/2002</p>
          </h4>
          </h4>
          <small class="textoAv">A qualidade dos suplementos são de primeira classe, a partir de hoje só uso suplementos
            da ZOO</small>
        </div>
      </div>
      <div class="rate">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label>
      </div>
    </div>
    <div class="avaliacaoCard">
      <div class="container">
        <div class="header">
        </div>
        <div class="textCard">
          <img src="/ZOOSuplementos-main/img/imgAV.png" alt="" class="imgAv">
          <h4>Jobson Nascimento<br>
            <p class="textoParc">30/06/2002</p>
          </h4>
          </h4>
          <small class="textoAv">A qualidade dos suplementos são incriveis</small>
        </div>
      </div>
      <div class="rate">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label>
      </div>
    </div>
  </div>




  <footer class="footerSite">
    <p2>&copy; 2024 Suplementos Fitness. Todos os direitos reservados.</p2>
  </footer>

</body>

<script src="/index.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>