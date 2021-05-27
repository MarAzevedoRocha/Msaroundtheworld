<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Dicas </title>
    <?php include('head.php'); ?>
</head>
<body>
    <div class="container">
        <header id="header_dicas">
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
            
            <div class="imagem_header_dicas"> </div>
        </header>   

        <!-- Início secção 1 -->

        <section id="dicas_interior">    

            <div class="titulo_home_dicas">
                <h3> "MAIS VALE PREVENIR DO QUE REMEDIAR" </h3> 
            </div>

            <div class="bloco_dicas">
                <ul>   
                    <?php
                        $sql="select * from dicas";
                        $resultado = $ligacao->query($sql);
                        while($registo = mysqli_fetch_assoc($resultado)){ 
                    ?>  
                
                        <li class="imagem_bloco">
                            <a href="<?php echo $registo['link_dica'];?>" target="_blank">
                                <img class="imagem_dica" src="images/dicas/<?php echo $registo['bg_dica'];?>"> </img>
                                <div class="box_dicas"> 
                                    <img class="icone" src="images/icones/<?php echo $registo['icon_dica'];?>" alt="localização">     
                                </div>
                                <h3> 
                                    <?php echo utf8_encode ($registo['nome_dica']);?>
                                </h3>
                                <p> 
                                    <?php echo utf8_encode ($registo['intro_dica']);?>
                                </p>
                                <a href="<?php echo $registo['link_dica'];?>" target="_blank" class="botao_dicas_interior">
                                    <?php echo utf8_encode ($registo['texto_botao_dica']);?>
                                </a>
                            </a>
                        </li>

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