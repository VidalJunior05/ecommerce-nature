<!DOCTYPE html>
<html lang="pt-br">
   <head>
        <meta charset="UTF-8"/>
        <title>Ecommerce Nature</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css"/>
    </head>
    <body>
        <section class="section products">
            <div class="products-layout container">
                <div class="products-wrapper">
                    <div class="item item-left">
                        <div class="title">
                            <h2>Categorias</h2>
                        </div>
                        <ul class="block-categories">
                        <li>
                            <input type="checkbox"/>
                            <label>
                                <span>Frutas</span>
                                <small>(33)</small>
                            </label>
                        </li> 
                        <li>
                            <input type="checkbox"/>
                            <label>
                                <span>Legumes</span>
                                <small>(19)</small>
                            </label>
                        </li> 
                        <li>
                            <input type="checkbox"/>
                            <label>
                                <span>Sucos Especiais</span>
                                <small>(28)</small>
                            </label>
                        </li> 
                        <li>
                            <input type="checkbox"/>
                            <label>
                                <span>Demais Produtos</span>
                                <small>(10)</small>
                            </label>
                        </li> 
                        </ul>
                        <div class="title">
                            <h2>Mais vendidos</h2>
                        </div>
                        <ul class="block-categories">
                        <li>
                            <input type="checkbox"/>
                            <label>
                                <span>Tomate Holandês</span>
                                <small>(80)</small>
                            </label>
                        </li> 
                        <li>
                            <input type="checkbox"/>
                            <label>
                                <span>Manga Alphonso</span>
                                <small>(25)</small>
                            </label>
                        </li> 
                        <li>
                            <input type="checkbox"/>
                            <label>
                                <span>Cereja Belga</span>
                                <small>(98)</small>
                            </label>
                        </li> 
                        <li>
                            <input type="checkbox"/>
                            <label>
                                <span>Manga Rosa</span>
                                <small>(10)</small>
                            </label>
                        </li> 
                        <li>
                            <input type="checkbox"/>
                            <label>
                                <span>Laranja Navelina</span>
                                <small>(50)</small>
                            </label>
                        </li>
                        <li>
                            <input type="checkbox"/>
                            <label>
                                <span>Abacaxi Pérola</span>
                                <small>(15)</small>
                            </label>
                        </li>
                        </ul>       
                    </div>
                    <div class="item item-right">
                        <div class="header-item-right">
                            <span>Ordernar por:</span>
                            <select name="select-categories">
                                <option value="nome">Nome</option>
                                <option value="preco">Preço</option>
                                <option value="maisvendidos" selected>Mais vendidos</option>
                                <option value="promocao">Promoção</option>
                            </select>
                            <span>Ordem</span>
                            <select name="select-categories2">
                                <option value="asc">ASC</option>
                                <option value="desc">DESC</option>
                            </select>
                            <a href="#" class="btn-others-pages">Aplicar</a>
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
                            <div class="product">
                                <div class="img-container">
                                <img src="<?PHP echo INCLUDE_PATH; ?>images/product-3.jpg" alt="Kiwi" />
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
                                <a href="productDetails.php">Kiwi</a>
                                <div class="price">
                                    <span>R$ 2,50 UN.</span>
                                </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="img-container">
                                <img src="<?PHP echo INCLUDE_PATH; ?>images/product-12.jpg" alt="Morango Dinamite" />
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
                                <a href="productDetails.php">Morango Dinamite</a>
                                <div class="price">
                                    <span>R$ 10,50 KG</span>
                                </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="img-container">
                                <img src="<?PHP echo INCLUDE_PATH; ?>images/product-6.jpg" alt="Melão" />
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
                                <a href="productDetails.php">Melão</a>
                                <div class="price">
                                    <span>R$ 4,00 UN.</span>
                                </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="img-container">
                                <img src="<?PHP echo INCLUDE_PATH; ?>images/product-14.jpg" alt="Pimentão Vermelho" />
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
                                <a href="productDetails.php">Pimentão Vermelho</a>
                                <div class="price">
                                    <span>R$ 4,00 UN.</span>
                                </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="img-container">
                                <img src="<?PHP echo INCLUDE_PATH; ?>images/product-7.jpg" alt="Batata Inglesa" />
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
                                <a href="productDetails.php">Batata Inglesa</a>
                                <div class="price">
                                    <span>R$ 8,00 KG</span>
                                </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="img-container">
                                <img src="<?PHP echo INCLUDE_PATH; ?>images/product-8.jpg" alt="Couve" />
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
                                <a href="productDetails.php">Couve</a>
                                <div class="price">
                                    <span>R$ 2,00 UN.</span>
                                </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="img-container">
                                <img src="<?PHP echo INCLUDE_PATH; ?>images/product-10.jpg" alt="Repolho" />
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
                                <a href="productDetails.php">Repolho</a>
                                <div class="price">
                                    <span>R$ 3,00 UN.</span>
                                </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="img-container">
                                <img src="<?PHP echo INCLUDE_PATH; ?>images/product-1.jpg" alt="Manga Tommy Atkins" />
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
                                <a href="productDetails.php">Manga Tommy Atkins</a>
                                <div class="price">
                                    <span>R$ 10,00 KG</span>
                                </div>
                                </div>
                            </div>  
                        </div>
                        <ul class="pagination">
                            <span>1</span>
                            <span>2</span>
                            <span>»</span>
                            <span class="last-element">Last »</span>
                        </ul>
                    </div>
                </div>
             </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
        <script src="<?PHP echo INCLUDE_PATH; ?>js/index.js"></script>
    </body>
</html>