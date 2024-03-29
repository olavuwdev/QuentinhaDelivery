<?php require_once('header.php'); ?>

<!-- INICIO TOPO DA PAGINA DO SITE -->

<div class="topo-pagina">
    <h1>Menu de Quentinhas</h1>
    <p><a href="index.php" title="sobre nós">Inicio ></a> Cardapio </p>
</div>

<!-- FIM TOPO DA PAGINA DO SITE -->

<!-- INICIO SLIDE DE COMPRAS DO SITE -->

<section class="menu">
    
    <!-- INICIO SLIDE PRINCIPAL DE COMPRAS DO SITE -->
    <div class="swiper menu-slider">
        
        <div class="swiper-wrapper">
            <!-- INICIO ITEM SLIDE PRINCIPAL -->
            <div class="swiper-slide slider">
                <h3 class="titulo"> Quentinhas</h3>
                <div class="box-container">

                    <!-- INICIO SUB ITEM SLIDE PRINCIPAL -->
                    <div class="box" data-name="quentinha">
                        <div class="info">
                            <h3>Quentinha P</h3>
                            <p>Quentinha perfeita para uma pessoa 😋</p>
                        </div>
                        <div class="valor">R$11,99</div>


                    </div>
                    <!-- FIM SUB ITEM SLIDE PRINCIPAL -->

                    <!-- INICIO SUB ITEM SLIDE PRINCIPAL -->
                    <div class="box" data-name="quentinha">
                        <div class="info">
                            <h3>Quentinha M</h3>
                            <p>Quentinha perfeita para duas pessoas 😋</p>
                        </div>
                        <div class="valor">R$12,99</div>


                    </div>
                    <!-- FIM SUB ITEM SLIDE PRINCIPAL -->

                    <!-- INICIO SUB ITEM SLIDE PRINCIPAL -->
                    <div class="box" data-name="quentinha">
                        <div class="info">
                            <h3>Quentinha G</h3>
                            <p>Quentinha perfeita para duas ou mais pessoas 😋</p>
                        </div>
                        <div class="valor">R$14,99</div>


                    </div>
                    <!-- FIM SUB ITEM SLIDE PRINCIPAL -->

                </div>
            </div>
            
            <!-- FIM ITEM SLIDE PRINCIPAL -->
            <!-- INICIO ITEM SLIDE PRINCIPAL -->
            <div class="swiper-slide slider">
                <h3 class="titulo"> Bebidas</h3>
                <div class="box-container">

                    <!-- INICIO SUB ITEM SLIDE PRINCIPAL -->
                    <div class="box" data-name="quentinha">
                        <div class="info">
                            <h3>Coca-cola 350ml</h3>
                            <p>Perfeita para uma pessoa 😋</p>
                        </div>
                        <div class="valor">R$11,99</div>


                    </div>
                    <!-- FIM SUB ITEM SLIDE PRINCIPAL -->

                    <!-- INICIO SUB ITEM SLIDE PRINCIPAL -->
                    <div class="box" data-name="quentinha">
                        <div class="info">
                            <h3>Coca-cola 1L</h3>
                            <p>Perfeita para duas pessoas 😋</p>
                        </div>
                        <div class="valor">R$12,99</div>


                    </div>
                    <!-- FIM SUB ITEM SLIDE PRINCIPAL -->

                    <!-- INICIO SUB ITEM SLIDE PRINCIPAL -->
                    <div class="box" data-name="quentinha">
                        <div class="info">
                            <h3>Guarana 350ml</h3>
                            <p>Perfeita para uma pessoa 😋</p>
                        </div>
                        <div class="valor">R$14,99</div>


                    </div>
                    <!-- FIM SUB ITEM SLIDE PRINCIPAL -->
                    <!-- INICIO SUB ITEM SLIDE PRINCIPAL -->
                    <div class="box" data-name="quentinha">
                        <div class="info">
                            <h3>Guarana 1L</h3>
                            <p>Perfeita para duas ou mais pessoas 😋</p>
                        </div>
                        <div class="valor">R$14,99</div>


                    </div>
                    <!-- FIM SUB ITEM SLIDE PRINCIPAL -->
                    <!-- INICIO SUB ITEM SLIDE PRINCIPAL -->
                    <div class="box" data-name="quentinha">
                        <div class="info">
                            <h3>Agua 350ml</h3>
                            <p>Perfeita para uma pessoa 😋</p>
                        </div>
                        <div class="valor">R$14,99</div>


                    </div>
                    <!-- FIM SUB ITEM SLIDE PRINCIPAL -->
                    <!-- INICIO SUB ITEM SLIDE PRINCIPAL -->
                    <div class="box" data-name="quentinha">
                        <div class="info">
                            <h3>Indaia Sabores 350ml</h3>
                            <p>Perfeita para uma pessoa 😋</p>
                        </div>
                        <div class="valor">R$14,99</div>


                    </div>
                    <!-- FIM SUB ITEM SLIDE PRINCIPAL -->

                </div>
            </div>
            
            <!-- FIM ITEM SLIDE PRINCIPAL -->
            
        </div>
        <!-- INICIO PAGINAÇÃO SLIDER DO SITE -->
        <div class="swiper-pagination"></div>
        <!-- FIM PAGINAÇÃO SLIDER DO SITE -->
    </div>
    <!-- FIM SLIDE PRINCIPAL DE COMPRAS DO SITE -->

</section>

<!-- FIM  SLIDE DE COMPRAS DO SITE -->


<!-- INICIO JANELA MODAL DE COMPRAS DO SITE -->

<section class="menu-modal-container">
    <div id="fechar" class="fas fa-times"></div>

    <div class="menu-modal" data-target="quentinha">
        <h3>Quentinha M</h3>

        <div class="estrelinhas">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>

        <p> Quentinha saborosa e acessivel</p>

        <div class="valor">R$ 77,99</div>
        <div class="btn">Adicionar ao carrinho</div>
    </div>
</section>

<!-- FIM JANELA MODAL DO SITE -->


<?php require_once('footer.php'); ?>
