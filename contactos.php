<!DOCTYPE html>
<html lang="en">
<head>
    <title> Contactos </title>
    <?php include('head.php'); ?>
</head>
<body>
    <div class="container">
        <header id="header">           
            <div class="imagem_header_contactos">
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

                <div class="imagem_header_contactos1">
                    <div class="texto_header_contactos">
                        <h3> CONTACTOS</h3>
                        <p> Queres criar a tua história? Não sabes para onde ir? Não sabes por onde começar? </p>
                        <p>Contacta-me!</p>   
                    </div>

                    <div class="formulario_contacto">
                        <form action="submete_contacto" method="post">
                            <ul>
                                <li class="contacto_input_nome">
                                    <input class="input_nome" type="text" name="nome_introduzido" id="nome_inserido" placeholder="Primeiro Nome">
                                    <div id="caixa_aviso_nome"></div>
                                </li>

                                <li class="separador"> </li>

                                <li class="contacto_input_email">
                                    <input class="input_email" type="text" name="email_introduzido" id="email_inserido" placeholder="E-mail">
                                    <div id="caixa_aviso_email"></div>
                                </li>

                                <li class="contacto_comentario">
                                    <textarea name="" id="contactos_comentario" cols="30" rows="10" placeholder="Deixe a sua mensagem"></textarea>
                                </li>
                            </ul>
                        </form>
                    </div>

                    <div class="botao_contacto">
                        <a href="submete_assinante.php" target="_blank" onclick=" return validaFormulario()"> Enviar mensagem <i class="fas fa-chevron-right"> </i> </a>
                    </div>
                </div>  
            </div>

            
        </header>

        
    </div>      

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill.js"></script>
    <script src="slick/slick.js"></script>
    <script src="js/main.js"></script>
</body>
</html>