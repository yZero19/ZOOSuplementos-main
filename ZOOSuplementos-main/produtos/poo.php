<?php
class LojaOnline {
    public function criarCard($imagemSrc, $titulo, $texto, $link, $preco) {

        $html = '<link rel="stylesheet" href="../produtos/produtos.css">';
        $html = '<div class="card" style="width: 18rem;">';
        $html .= '<img src="' . $imagemSrc . '" class="card-img-top" alt="...">';
        $html .= '<div class="card-body">';
        $html .= '<h5 class="card-title">' . $titulo . '</h5>';
        $html .= '<p class="card-text">' . $texto . '</p>';
        $html .= '<p class="product-price">R$' . $preco . '</p>'; // Adiciona o preço
        $html .= '<a href="' . $link . '" class="btn btn-primary">Compre Já</a>';
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }
}

$minhaLoja = new LojaOnline();
$cardwhey = $minhaLoja->criarCard("../img/whey.jpg", "Whey Zoo", "Experimente o poder do whey para alcançar seus objetivos fitness!", "../produtos/whey.php", 99.99); // Adiciona o preço
$cardvit = $minhaLoja->criarCard("../img/wolf.jpg", "Multi Vitaminico","O Multi vitaminico é essencial para você manter suas vitaminas em seu dia a dia", "../produtos/multi.php", 45.99); // Adiciona o preço
$cardcreatina = $minhaLoja->criarCard("../img/crea.jpg", "Creatina Zoo", "Experimente nossa creatina e potencialize seus resultados e transforme seu fisico agora !", "../produtos/creatina.php", 80.99); // Adiciona o preço
$cardpre = $minhaLoja->criarCard("../img/rino.jpg", "Pré-Treino Zoo", "Experimente nosso Pré-Treino e maximaze seus resultados e diga adeus a seu cansaço !", "../produtos/PreTreino.php", 100.99); // Adiciona o preço

echo $cardwhey;
echo $cardvit;
echo $cardcreatina;
echo $cardpre;

?>
