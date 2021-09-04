<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Ecommerce Nature</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
  <meta name="author" content="Nature"/>
  <meta name="description" content="Nature- O melhor das Frutas"/>
  <meta name="keywords" content="Supermercado,qualidade,frutas"/>
  <meta name="robots" content="index,follow"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:title" content="Nature"/>
  <meta property="og:site_name" content="Nature"/>
  <meta property="og:description" content="Nature- O melhor das Frutas"/>
  <meta property="og:image" content="https://ik.imagekit.io/zycp4d8fc4b/og-url-nature_GKAc7cBNp.png?updatedAt=1630420736252">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"/>
  <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css"/>
  <link rel="icon" type="image/png" href="<?php echo INCLUDE_PATH; ?>images/favicon.png"/>
</head>
<body>
  <nav class="nav">
    <div class="wrapper container">
      <div class="logo">
        <a href="<?PHP echo INCLUDE_PATH; ?>home">
          <img src="<?PHP echo INCLUDE_PATH; ?>images/logo.png" alt="Logo Nature">
        </a>
      </div>
      <ul class="nav-list">
        <div class="top">
          <label class="btn close-btn"><i class="fas fa-times"></i></label>
          <span>Supermercado Nature</span>
        </div>
        <li><a href="<?PHP echo INCLUDE_PATH; ?>home">Home</a></li>
        <li><a href="<?PHP echo INCLUDE_PATH; ?>products">Produtos</a></li>
        <li><a href="" class="desktop-item">Shop<span><i class="fas fa-chevron-down"></i></span></a>
        <input type="checkbox" id="showMega">
        <label for="showMega" class="mobile-item">Shop<span><i class="fas fa-chevron-down"></i></span></label>
        <div class="mega-box">
          <div class="content">
            <div class="row">
              <img src="<?PHP echo INCLUDE_PATH; ?>images/nav.png" alt="Suco Vitaminado">
            </div>
            <div class="row">
              <header>Frutas</header>
              <ul class="mega-links">
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Manga Mexicana</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Banana Nanica</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Abacaxi</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Cereja</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Legumes</header>
              <ul class="mega-links">
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Repolho</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Batata Inglesa</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Cogumelo</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Pimentão Vermelho</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Sucos Especiais</header>
              <ul class="mega-links">
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Suco de Frutas Vermelhas</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Limonada Suíça</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Pink Lemonade</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Suco Vitaminado</a></li>
              </ul>
            </div>
          </div>
        </div>
        </li>
        <li><a href="<?php echo INCLUDE_PATH; ?>productDetails">Detalhe dos Produtos</a></li>
        <li>
          <a href="#" class="desktop-item">Vendedores<span><i class="fas fa-chevron-down"></i></a>
          <input type="checkbox" id="showdrop1">
          <label for="showdrop1" class="mobile-item">Vendedores<span><i class="fas fa-chevron-down"></i></span></label>
            <ul class="drop-menu1">
              <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Lista de Fornecedores</a></li>
              <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Detalhes da Loja</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-item">Página<span><i class="fas fa-chevron-down"></i></a>
            <input type="checkbox" id="showdrop2">
            <label for="showdrop2" class="mobile-item">Página<span><i class="fas fa-chevron-down"></i></span></label>
              <ul class="drop-menu2">
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Contato</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Perguntas Frequentes</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>erro-404">Página 404</a></li>
              </ul>
            </li>
        <li class="icons">
          <a href="<?php echo INCLUDE_PATH; ?>cart">
          <span>
            <img src="<?PHP echo INCLUDE_PATH; ?>images/shoppingBag.svg" alt="Sacola de Compras">
            <small class="count display-flex">0</small>
          </span>
          </a>
          <span>
            <img src="<?PHP echo INCLUDE_PATH; ?>images/search.svg" alt="Ícone de Pesquisa">
          </span>
       </li>
      </ul>
      <label class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
  <?php 
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
    }else{
        $pagina404 = true;
        include('pages/erro-404.php');
        
    }
  ?>
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>Institucional</h3>
          <a href="<?php echo INCLUDE_PATH; ?>home">Home</a>
          <a href="<?php echo INCLUDE_PATH; ?>products">Produtos</a>
          <a href="<?php echo INCLUDE_PATH; ?>cart">Shop</a>
          <a href="<?php echo INCLUDE_PATH; ?>productDetails">Detalhe dos Produtos</a>
          <a href="<?php echo INCLUDE_PATH; ?>erro-404">Vendedores</a>
          <a href="<?php echo INCLUDE_PATH; ?>erro-404">Páginas</a>
        </div>
        <div class="footer-center">
          <h3>Categorias</h3>
          <a href="#">Frutas</a>
          <a href="#">Legumes</a>
          <a href="#">Cestas</a>
          <a href="#">Orgânicos</a>
          <a href="#">Especiais</a>
          <a href="#">Diversos</a>
        </div>
        <div class="footer-center">
          <h3>Planos de Afiliação</h3>
          <a href="#">Plano NatureLegumes</a>
          <a href="#">Plano NatureFrutas</a>
          <a href="#">Plano Legumes&Frutas</a>
          <a href="#">Combo Padrão</a>
          <a href="#">Combo Especial</a>
          <a href="#">Combo Master</a>
        </div>
        <div class="footer-center">
          <h3>Contato</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            42 Rua Luis Polis, Bairro Rosa Verde, 7131 Cidade do México, MEX  
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            naturecompany@gmail.com.br
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            9 9090-9090
          </div>
          <div class="payment-methods">
            <img src="./images/payment.png" alt="Métodos de Pagamento">
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
  <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
  <script src="<?PHP echo INCLUDE_PATH; ?>js/index.js"></script>
</body>
</html>

