<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Destinos </title>
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
            
            <div class="imagem_header_destinos">
                <div class="imagem_header_destinos1">
                    <div class="texto_header_destinos">
                        <h3> Destinos </h3>
                    </div>
                    <div id="world-map"></div>                
                </div>  
            </div>
        </header>   

        <!-- Início secção 1 -->

        <section id="destinos_interior">    
            <div class="espaco"></div>

            <div class="bloco_destinos">
                <ul> 

                    <?php
                        $sql="select * from destinos";
                        $resultado = $ligacao->query($sql);
                        while($registo = mysqli_fetch_assoc($resultado)){ 
                    ?>  
                        <a href="<?php echo $registo['link_destino'];?>"> 
                            <li class="imagem_bloco">
                                <div class="imagem_pais" style="background-image:url('images/destinos/<?php echo $registo['imagem_destino'];?>')"> </div>
                                <img class="icone" src="images/mapas/<?php echo $registo['mapa_destino'];?>" alt="mapa alemanha">
                                <h4 style="text-transform:uppercase"> 
                                    <?php echo utf8_encode ($registo['nome_destino']);?>
                                </h4>
                            </li>
                        </a>
                    <?php
                        }
                    ?>  
                    
                </ul>
            </div>  
        </section>

        <!-- FIM secção 1 -->

        <!-- Início newsletter e footer -->

        <div class="titulo_home_destinos">
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