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

    <!-- slider -->
   
    <div class="slider">
        <div class="slide slide1">
            <div class="info_slide">
                <div class="texto_slide">
                    <h1> Turquia </h1>
                    <h2> Roteiros que criam histórias</h2>
                </div>
                <div class="togle_cenas">
                    <span class="switcher switcher-1">
                        <input type="checkbox" id="switcher-1">
                        <label for="switcher-1"></label>
                    </span>
                    <a onclick="clicaToggle()" href="dicas.php" class="botao_ver_mais"> Ver mais <i class="fas fa-chevron-right"> </i> </a>
                </div>    
            </div>
        </div>  

        <div class="slide slide2">
            <div class="info_slide">
                <div class="texto_slide">
                    <h1> Itália </h1>
                    <h2> Roteiros que criam histórias</h2>
                </div>
                <div class="togle_cenas">
                    <span class="switcher switcher-1">
                        <input type="checkbox" id="switcher-1">
                        <label for="switcher-1"></label>
                    </span>
                    <a href="dicas.php" class="botao_ver_mais"> Ver mais <i class="fas fa-chevron-right"> </i> </a>
                </div>    
            </div>
        </div>
        
        <div class="slide slide3">
            <div class="info_slide">
                <div class="texto_slide">
                    <h1> Brasil </h1>
                    <h2> Roteiros que criam histórias</h2>
                </div>
                <div class="togle_cenas">
                    <span class="switcher switcher-1">
                        <input type="checkbox" id="switcher-1">
                        <label for="switcher-1"></label>
                    </span>
                    <a href="dicas.php" class="botao_ver_mais"> Ver mais <i class="fas fa-chevron-right"> </i> </a>
                </div>    
            </div>
        </div>

        <div class="slide slide4">
            <div class="info_slide">
                <div class="texto_slide">
                    <h1> Alemanha </h1>
                    <h2> Roteiros que criam histórias</h2>
                </div>
                <div class="togle_cenas">
                    <span class="switcher switcher-1">
                        <input type="checkbox" id="switcher-1">
                        <label for="switcher-1"></label>
                    </span>
                    <a href="dicas.php" class="botao_ver_mais"> Ver mais <i class="fas fa-chevron-right"> </i> </a>
                </div>    
            </div>
        </div>

        <div class="slide slide5">
            <div class="info_slide">
                <div class="texto_slide">
                    <h1> Croácia </h1>
                    <h2> Roteiros que criam histórias</h2>
                </div>
                <div class="togle_cenas">
                    <span class="switcher switcher-1">
                        <input type="checkbox" id="switcher-1">
                        <label for="switcher-1"></label>
                    </span>
                    <a href="dicas.php" class="botao_ver_mais"> Ver mais <i class="fas fa-chevron-right"> </i> </a>
                </div>    
            </div>
        </div>
    </div>
</header>