<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Inspiração </title>
    <?php include('head.php'); ?>
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
            
            <div class="imagem_header_inspiracao">
                <div class="imagem_header_inspiracao1">
                    <div class="texto_header_inspiracao">
                        <h1> INSPIRAÇÃO </h1>
                        <h2>Roteiros que criam histórias</h2>
                    </div>
                </div>  
            </div>
        </header>

        <div class="margem"></div>

        <!-- Início secção 1 -->
        <section id="cards_destinos_resultado">     
            <div class="bloco_cards">
                <ul>  

                    <?php
                        $sql="select * from inspiracao";
                        $resultado = $ligacao->query($sql);
                        while($registo = mysqli_fetch_assoc($resultado)){ 
                    ?>  

                        <li class="card">
                            <a href="<?php echo $registo['link_inspiracao'];?>">
                                <div class="conteudo_card">
                                    <img src="images/inspiracao/<?php echo $registo['imagem_inspiracao'];?>"> </img>
                                    <div class="texto_card">
                                        <h3>
                                            <?php echo utf8_encode ($registo['nome_inspiracao']);?> 
                                        </h3>
                                    </div>
                                </div>

                                <div class="conteudo_card_hover">
                                    <p class="paragrafo_card"> 
                                        <?php echo utf8_encode ($registo['texto_inspiracao']);?>
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
            
        <!-- Fim secção 1 -->

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