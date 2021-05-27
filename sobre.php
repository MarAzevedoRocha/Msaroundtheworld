<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Sobre </title>
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
            
            <div class="imagem_header_sobre">
                <div class="imagem_header_sobre1">
                    <div class="texto_header_sobre">
                        <h1> M's around the world </h1>
                        <h2> Cidadã do mundo por escolha</h2>
                    </div>
                </div>  
            </div>
        </header>

        <!-- Início secção 1 -->

        <section id="about">     
            
            <div class="titulo_home">
                <h3> M's around the world </h3> 
            </div>

            <div class="texto_about">
                <p> 
                    Sob o conceito “Roteiros que criam histórias”, M’s around the world foi criada para comunicar o mundo através de histórias. Nasceu em 2019, da teimosia de uma tripeira por circunstância, que é cidadã do mundo por escolha, e que vê em todo o lado uma oportunidade para contar cada lugar visitado, cada cultura vivida.
                    E porque a própria viagem cria histórias, a narradora decidiu partilhar os pormenores do que viveu e dar ao leitor uma oportunidade de respirar cada cidade como se fosse sua, tornar cada lugar a sua casa e criar a sua história.
                </p>
                <a href="contactos.php" class="botao_about">Contactos</a>
            </div>  

        </section> 
        
        <!-- Fim secção 1 -->

        <!-- Início newsletter e footer -->

        <div class="titulo_home_sobre">
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