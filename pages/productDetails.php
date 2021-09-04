<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Ecommerce Nature</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css"/>
    </head>
    <body>
        <section class="section details-container">
            <div class="details-wrapper container">
                <div class="details-left">
                    <div class="main">
                        <img src="<?php echo INCLUDE_PATH; ?>images/product-12.jpg" alt="Morango">
                    </div>
                    <div class="thumbnails">
                        <img src="<?php echo INCLUDE_PATH; ?>images/product-13.jpg" alt="Melância"/>
                        <img src="<?php echo INCLUDE_PATH; ?>images/product-5.jpg" alt="Cogumelo"/>
                        <img src="<?php echo INCLUDE_PATH; ?>images/product-9.jpg" alt="Tomate"/>
                        <img src="<?php echo INCLUDE_PATH; ?>images/product-1.jpg" alt="Manga"/>
                    </div>
                    
                </div>
                <div class="details-right">
                    <span>Supermercado Nature</span>
                    <h1>Morango Dinamite</h1>
                    <div class="price">R$ 10,50 KG</div>
                    <form>
                        <div>
                            <select>
                                <option value="selecionequantidade" selected>Selecione a quantidade</option>
                                <option value="1">10</option>
                                <option value="2">20</option>
                                <option value="3">30</option>
                                <option value="4">40</option>
                            </select>
                        </div>
                    </form>
                    <form>
                        <input type="text" placeholder="1"/>
                        <a href="<?php echo INCLUDE_PATH; ?>cart" class="btn-others-pages">Adicionar ao carrinho</a>
                    </form>
                    <h3>Detalhes do produto</h3>
                    <p>O morango diamante é na verdade uma variedade criada nos Estados Unidos, 
                    na Universidade da Califórnia no ano de 1997, mas que até hoje mantém sua popularidade. 
                    A planta é bem ereta e compacta, sendo perfeita para cultivos adensados. Crescem bastante, 
                    e formam uma roseta de folhas desenvolvidas.</p>
                </div>
            </div>
            <section class="section products-related">
                <div class="container">
                    <div class="title">
                        <h2>Produtos Relacionados</h2>
                        <span>Escolha o seu produto</span>
                    </div>
                    <div class="product-layout">
                        <div class="product">
                            <div class="img-container">
                            <img src="<?PHP echo INCLUDE_PATH; ?>images/product-13.jpg" alt="Melancia" />
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>

                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                            </div>
                            <div class="bottom">
                            <a href="productDetails.php">Melancia</a>
                            <div class="price">
                                <span>R$ 5,00 UN.</span>
                            </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="img-container">
                            <img src="<?PHP echo INCLUDE_PATH; ?>images/product-4.jpg" alt="Pepino" />
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>

                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                            </div>
                            <div class="bottom">
                            <a href="productDetails.php">Pepino</a>
                            <div class="price">
                                <span>R$ 2,00 UN.</span>
                            </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="img-container">
                            <img src="<?PHP echo INCLUDE_PATH; ?>images/product-9.jpg" alt="Tomate Inglês" />
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>

                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                            </div>
                            <div class="bottom">
                            <a href="productDetails.php">Tomate Inglês</a>
                            <div class="price">
                                <span>R$ 7,00 KG</span>
                            </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="img-container">
                            <img src="<?PHP echo INCLUDE_PATH; ?>images/product-2.jpg" alt="Alface" />
                            <div class="addCart">
                                <i class="fas fa-shopping-cart"></i>
                            </div>

                            <ul class="side-icons">
                                <span><i class="fas fa-search"></i></span>
                                <span><i class="far fa-heart"></i></span>
                                <span><i class="fas fa-sliders-h"></i></span>
                            </ul>
                            </div>
                            <div class="bottom">
                            <a href="productDetails.php">Alface</a>
                            <div class="price">
                                <span>R$ 3,00 UN.</span>
                            </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </section>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
        <script src="<?PHP echo INCLUDE_PATH; ?>js/index.js"></script>
    </body>
</html>