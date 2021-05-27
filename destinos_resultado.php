<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Roteiros Alemanha </title>
    <?php include('head.php'); ?>
</head>
</head>
<body>
    <div class="container">
        <header id="header">
            <nav id="nav_desktop">

                <div class="logotipo"> 
                    <a href="index.php">
                        <img src="images/logo_branco_coral_vg 1.svg" />
                    </a>
                </div>

                <div class="menu">
                    <ul>
                        <a href="sobre.php">
                            <li>
                                SOBRE
                            </li>
                        </a>
                        
                        <a href="destinos.php">
                            <li>
                                DESTINOS
                            </li>
                        </a>
                        
                        <a href="dicas.php">
                            <li>
                                DICAS
                            </li>
                        </a>
                        
                        <a href="inspiracao.php">
                            <li>
                                INSPIRAÇÃO
                            </li>
                        </a>

                        <a href="contactos.php">
                            <li>
                                CONTACTOS
                            </li>
                        </a>

                        <a href="destinos.php">
                            <li>
                                <i class="fas fa-search"></i>
                            </li>
                        </a>
                    </ul>
                </div>  
            </nav>

            <!-- menu mobile -->
        
            <nav id="nav_mobile" class="overlay"> 
                
                <div class="logotipo"> 
                    <a href="index.php">
                        <img src="images/logo_versao_mobile.svg" />
                    </a>
                </div>
            
                <i id="abre_menu" onclick="mostraMenu()" class="fas fa-bars"></i>
                <i id="close_menu" onclick="fechaMenu()" class="fas fa-times"></i>

                <ul id="itens-menu-mobile" class="overlay">
                    <a href="sobre.php">
                        <li>
                            SOBRE
                        </li>
                    </a>
                    
                    <a href="destinos.php">
                        <li>
                            DESTINOS
                        </li>
                    </a>
                    
                    <a href="dicas.php">
                        <li>
                            DICAS
                        </li>
                    </a>
                    
                    <a href="inspiracao.php">
                        <li>
                            INSPIRAÇÃO
                        </li>
                    </a>

                    <a href="contactos.php">
                        <li>
                            CONTACTOS
                        </li>
                    </a>
                    
                    <a href="destinos.php">
                        <li>
                            <i class="fas fa-search"></i>
                        </li>
                    </a>
                </ul>
            </nav>
            
            <div class="imagem_header_destinos_resultado">
                <div class="imagem_header_destinos_resultado1">
                    <div class="texto_header_destinos_resultado">
                        <img src="images/mapas/alemanha.svg" alt="mapa alemanha">
                        <h1> ALEMANHA </h1>
                        <p>Um país com cidades repletas de  história, desde a imponente e grandiosa capital  até a antiga cidade de Nuremberg, passando pelas deliciosas cervejas da Baviera e pela picante Bratwurst de Munique.</p>
                    </div>
                </div>  
            </div>
        </header>

        <!-- Início secção 1 -->
        <section id="dicas_destinos_resultado">     
            
            <div class="caixa_dicas_destino1">
                <ul>
                    <li>
                        <a href="https://www.skyscanner.pt/" target="_blank">
                            <div class="box_dicas"> 
                                <img class="icone" src="images/icones/aviao.svg" alt="aviao">
                            </div>

                            <div class="texto_dicas">
                                <h6> Voos </h6>
                            </div>
                        </a>
                    </li>


                    <li>
                        <a href="https://www.booking.com/" target="_blank">
                            <div class="box_dicas"> 
                                <img src="images/icones/bed.svg" alt="cama">
                            </div>

                            <div class="texto_dicas">
                                <h6> Estadia </h6>
                            </div>
                        </a>
                    </li>

                    <div class="separador_li_dicas_destino"></div>

                    <li>
                        <a href="https://www.worldnomads.pt/" target="_blank">
                            <div class="box_dicas"> 
                                <img src="images\icones\insurance.svg" alt="seguro">
                            </div>

                            <div class="texto_dicas">
                                <h6> Seguros </h6>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.revolut.com/pt-PT" target="_blank">
                            <div class="box_dicas"> 
                                <img src="images\icones\money.svg" alt="dinheiro">
                            </div>
                        
                            <div class="texto_dicas">
                                <h6> Dinheiro </h6>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section> 
        
        <!-- Fim secção 1 -->

        <!-- Início secção 2 -->
        <section id="cards_destinos_resultado">     
            <div class="bloco_cards">
                <ul>  

                    <?php
                        $sql="select * from roteiros";

                        $resultado = $ligacao->query($sql);
                        while($registo = mysqli_fetch_assoc($resultado)){ 
                    ?>  

                        <li class="card">
                            <a href="<?php echo $registo['link_roteiro'];?>">
                                <div class="conteudo_card">
                                    <img src="images/destinos/resultado/<?php echo $registo['imagem_roteiro'];?>"> </img>
                                    <div class="texto_card">
                                        <h3>
                                            <?php echo utf8_encode ($registo['nome_roteiro']);?> 
                                        </h3>
                                    </div>
                                </div>

                                <div class="conteudo_card_hover">
                                    <p class="paragrafo_card"> 
                                        <?php echo utf8_encode ($registo['texto_roteiro']);?>
                                    </p>
                                </div>
                            </a>    
                        </li> 

                    <?php
                        }
                    ?>  

                </ul>
            </div>
            
    
        </section> 
            
        <!-- Fim secção 2 -->

        <!-- Início newsletter e footer -->

        <div class="titulo_home">
            <h3> ROTEIROS PARA CRIAR A TUA HISTÓRIA </h3> 
        </div>
        
        <?php include('newsletter_footer.php'); ?>

    </div>
        

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill.js"></script>
    <script src="slick/slick.js"></script>
    <script src="js/main.js"></script>
</body>
</html>