<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Ecommerce Nature</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css"/>
    </head>
    <body>
        <section class="section">
            <div class="container cart">
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>SubTotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="cart-infomation">
                                    <img src="<?php echo INCLUDE_PATH; ?>images/product-1.jpg" alt="Manga Tommy Atkins"/>
                                    <div>
                                        <p>Manga Tommy Atkins</p>
                                        <span>R$ 10,00 KG</span><br/>
                                        <a href="#">remover</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="number" value="1" min="1"/>
                            </td>
                            <td>R$ 50,00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-infomation">
                                    <img src="<?php echo INCLUDE_PATH; ?>images/product-2.jpg" alt="Alface"/>
                                    <div>
                                        <p>Alface</p>
                                        <span>R$ 3,00 UN.</span><br/>
                                        <a href="#">remover</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="number" value="1" min="1"/>
                            </td>
                            <td>R$ 50,00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-infomation">
                                    <img src="<?php echo INCLUDE_PATH; ?>images/product-3.jpg" alt="Kiwi"/>
                                    <div>
                                        <p>Kiwi</p>
                                        <span>R$ 2,50 UN.</span><br/>
                                        <a href="#">remover</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="number" value="1" min="1"/>
                            </td>
                            <td>R$ 50,00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-infomation">
                                    <img src="<?php echo INCLUDE_PATH; ?>images/product-9.jpg" alt="Tomate Inglês"/>
                                    <div>
                                        <p>Tomate Inglês</p>
                                        <span>R$ 7,00 KG</span><br/>
                                        <a href="#">remover</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="number" value="1" min="1"/>
                            </td>
                            <td>R$ 50,00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-infomation">
                                    <img src="<?php echo INCLUDE_PATH; ?>images/product-12.jpg" alt="Morango Dinamite"/>
                                    <div>
                                        <p>Morango Dinamite</p>
                                        <span>R$ 10,50 KG</span><br/>
                                        <a href="#">remover</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="number" value="1" min="1"/>
                            </td>
                            <td>R$ 50,00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-infomation">
                                    <img src="<?php echo INCLUDE_PATH; ?>images/product-4.jpg" alt="Pepino"/>
                                    <div>
                                        <p>Pepino</p>
                                        <span>R$ 2,00 UN.</span><br/>
                                        <a href="#">remover</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="number" value="1" min="1"/>
                            </td>
                            <td>R$ 50,00</td>
                        </tr>
                    </tbody>
                </table>
                <div class="total-price">
                    <table>
                        <tbody>
                            <tr>
                                <td>SubTotal</td>
                                <td>R$ 300,00</td>
                            </tr>
                            <tr>
                                <td>Delivery</td>
                                <td>R$ 75,00</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>R$ 375,00</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn-others-pages">Concluir a compra</a>
                </div>
            </div>
        </section>
    </body>
</html>
