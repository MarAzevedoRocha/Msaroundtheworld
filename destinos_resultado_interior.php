<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Roteiro 2ª Guerra Mundial </title>
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
            
            <div class="imagem_header_destinos_resultado_interior">
                <div class="imagem_header_destinos_resultado_interior1">
                    <div class="texto_header_destinos_resultado_interior">
                        <img src="images/mapas/alemanha.svg" alt="mapa alemanha">
                        <h1> ALEMANHA </h1>
                        <h2>UM ROTEIRO PELA 2ª GUERRA MUNDIAL</h2>
                    </div>
                </div>  
            </div>
        </header>

        <div class="titulo_home">
            <h3> PASSO A PASSO PELA 2ª GUERRA MUNDIAL </h3> 
        </div>

        <section id="sobre_roteiro">
            <div class="imagem_roteiro_interior">
                <img src="images\destinos\resultado_interior\auschwitz.jpg" alt="auschwitz">
            </div>

            <div class="texto_roteiro_interior">
                <p> Falar da Alemanha e da Polónia e não relacionar com os acontecimentos históricos do século XX é tarefa impossível: desde as marcas nas ruas de Berlim de um muro erguido que dividiu não só a cidade, mas famílias, namorados e amigos durante 28 anos, Munique e a fundação do Terceiro Reich, o ato de resistência no Gueto de Varsóvia contra a ocupação nazi alemã, os horrores dos campos de concentração, a Solução Final em Auschwitz, e a sala 600 que deu palco aos julgamentos de nuremberga pelos crimes cometidos no Holocausto. 
                <br>
                <br>
                Já viste todos os documentários, leste todos os livros e sentes vontade de saber e ver mais? Este é o roteiro ideal para ti. </p>
            </div>
        </section>

        <section id="indice_roteiro">
            <div class="carrossel"> 
                <div class="indice_carrossel_responsive">
                    
                    <div class="lista_indice" onclick="clicaRoteiroMunique()" > 
                        <i class="fas fa-map-marker-alt" class="icone_roteiro"></i>
                        <p class="titulo_roteiro_especifico"> Munique</p>
                    </div>

                    <div class="lista_indice" onclick="clicaRoteiroNuremberga()" > 
                        <i class="fas fa-map-marker-alt"></i>
                        <p> Nuremberga</p>
                    </div>

                    <div class="lista_indice" onclick="clicaRoteiroColditz()" > 
                        <i class="fas fa-map-marker-alt"></i>
                        <p> Colditz </p>
                    </div>

                    <div class="lista_indice" onclick="clicaRoteiroNordhausen()"> 
                        <i class="fas fa-map-marker-alt"></i>
                        <p> NORDHAUSEN </p>
                    </div>
                    <div class="lista_indice" onclick="clicaRoteiroBerlim()"> 
                        <i class="fas fa-map-marker-alt"></i>
                        <p> BERLIM </p>
                    </div>
                    <div class="lista_indice" onclick="clicaRoteiroGdansk()"> 
                        <i class="fas fa-map-marker-alt"></i>
                        <p> GDANSK </p>
                    </div>
                    <div class="lista_indice" onclick="clicaRoteiroVarsovia()"> 
                        <i class="fas fa-map-marker-alt"></i>
                        <p> VARSÓVIA </p>
                    </div>
                    <div class="lista_indice" onclick="clicaRoteiroCracovia()"> 
                        <i class="fas fa-map-marker-alt"></i>
                        <p> CRACÓVIA </p>
                    </div>
                </div>
            </div>    
        </section>

        <section id="roteiro">

            <!-- ROTEIRO MUNIQUE -->
            <div id="informacao_roteiro_munique">
                <div class="blocos_info_local">
                    <a href="https://www.accuweather.com/pt/de/munich/80331/weather-forecast/178086" target="_blank">
                        <div class="temperatura_local"> 
                            <h4> TEMPERATURA ATUAL </h4>
                        </div>
                    </a>

                    <a href="https://www.timeanddate.com/worldclock/germany/munich" target="_blank">
                        <div class="hora_local"> 
                            <h4> HORA ATUAL </h4>
                        </div>
                    </a>
                </div>

                <div class="texto_roteiro">
                    <h3> MUNIQUE </h3>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Centro de Documentação Nazi </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Dachau - Campo de Concentração </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                    <h4> Museu de Munique </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                </div>
            </div>

            <!-- ROTEIRO NUREMBERGA -->
            <div id="informacao_roteiro_nuremberga">
                <div class="blocos_info_local">
                    <a href="https://www.accuweather.com/pt/de/nuremberg/90402/weather-forecast/1-167559_5_al" target="_blank">
                        <div class="temperatura_local"> 
                            <h4> TEMPERATURA ATUAL </h4>
                        </div>
                    </a>

                    <a href="https://www.timeanddate.com/worldclock/germany/nuremberg" target="_blank">
                        <div class="hora_local"> 
                            <h4> HORA ATUAL </h4>
                        </div>
                    </a>
                </div>

                <div class="texto_roteiro">
                    <h3> Nuremberga </h3>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Centro de Documentação Nazi </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Dachau - Campo de Concentração </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                    <h4> Museu de Munique </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                </div>
            </div>

                <!-- ROTEIRO COLDITZ -->
            <div id="informacao_roteiro_colditz">
                <div class="blocos_info_local">
                    <a href="https://www.accuweather.com/pt/de/nuremberg/90402/weather-forecast/1-167559_5_al" target="_blank">
                        <div class="temperatura_local"> 
                            <h4> TEMPERATURA ATUAL </h4>
                        </div>
                    </a>

                    <a href="https://www.timeanddate.com/worldclock/germany/nuremberg" target="_blank">
                        <div class="hora_local"> 
                            <h4> HORA ATUAL </h4>
                        </div>
                    </a>
                </div>

                <div class="texto_roteiro">
                    <h3> Colditz </h3>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Centro de Documentação Nazi </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Dachau - Campo de Concentração </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                    <h4> Museu de Munique </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                </div>
            </div>

            <!-- ROTEIRO NORDHAUSEN -->
            <div id="informacao_roteiro_nordhausen">
                <div class="blocos_info_local">
                    <a href="https://www.accuweather.com/pt/de/nuremberg/90402/weather-forecast/1-167559_5_al" target="_blank">
                        <div class="temperatura_local"> 
                            <h4> TEMPERATURA ATUAL </h4>
                        </div>
                    </a>

                    <a href="https://www.timeanddate.com/worldclock/germany/nuremberg" target="_blank">
                        <div class="hora_local"> 
                            <h4> HORA ATUAL </h4>
                        </div>
                    </a>
                </div>

                <div class="texto_roteiro">
                    <h3> NORDHAUSEN </h3>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Centro de Documentação Nazi </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Dachau - Campo de Concentração </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                    <h4> Museu de Munique </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                </div>
            </div>

            <!-- ROTEIRO BERLIM -->
            <div id="informacao_roteiro_berlim">
                <div class="blocos_info_local">
                    <a href="https://www.accuweather.com/pt/de/nuremberg/90402/weather-forecast/1-167559_5_al" target="_blank">
                        <div class="temperatura_local"> 
                            <h4> TEMPERATURA ATUAL </h4>
                        </div>
                    </a>

                    <a href="https://www.timeanddate.com/worldclock/germany/nuremberg" target="_blank">
                        <div class="hora_local"> 
                            <h4> HORA ATUAL </h4>
                        </div>
                    </a>
                </div>

                <div class="texto_roteiro">
                    <h3> Berlim </h3>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Centro de Documentação Nazi </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Dachau - Campo de Concentração </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                    <h4> Museu de Munique </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                </div>
            </div>

            <!-- ROTEIRO GDANSK -->
            <div id="informacao_roteiro_gdansk">
                <div class="blocos_info_local">
                    <a href="https://www.accuweather.com/pt/de/nuremberg/90402/weather-forecast/1-167559_5_al" target="_blank">
                        <div class="temperatura_local"> 
                            <h4> TEMPERATURA ATUAL </h4>
                        </div>
                    </a>

                    <a href="https://www.timeanddate.com/worldclock/germany/nuremberg" target="_blank">
                        <div class="hora_local"> 
                            <h4> HORA ATUAL </h4>
                        </div>
                    </a>
                </div>

                <div class="texto_roteiro">
                    <h3> Gdansk </h3>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Centro de Documentação Nazi </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Dachau - Campo de Concentração </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                    <h4> Museu de Munique </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                </div>
            </div>

            <!-- ROTEIRO VARSÓVIA -->
            <div id="informacao_roteiro_varsovia">
                <div class="blocos_info_local">
                    <a href="https://www.accuweather.com/pt/de/nuremberg/90402/weather-forecast/1-167559_5_al" target="_blank">
                        <div class="temperatura_local"> 
                            <h4> TEMPERATURA ATUAL </h4>
                        </div>
                    </a>

                    <a href="https://www.timeanddate.com/worldclock/germany/nuremberg" target="_blank">
                        <div class="hora_local"> 
                            <h4> HORA ATUAL </h4>
                        </div>
                    </a>
                </div>

                <div class="texto_roteiro">
                    <h3> Varsóvia </h3>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Centro de Documentação Nazi </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Dachau - Campo de Concentração </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                    <h4> Museu de Munique </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                </div>
            </div>
            
            <!-- ROTEIRO CRACÓVIA -->
            <div id="informacao_roteiro_cracovia">
                <div class="blocos_info_local">
                    <a href="https://www.accuweather.com/pt/de/nuremberg/90402/weather-forecast/1-167559_5_al" target="_blank">
                        <div class="temperatura_local"> 
                            <h4> TEMPERATURA ATUAL </h4>
                        </div>
                    </a>

                    <a href="https://www.timeanddate.com/worldclock/germany/nuremberg" target="_blank">
                        <div class="hora_local"> 
                            <h4> HORA ATUAL </h4>
                        </div>
                    </a>
                </div>

                <div class="texto_roteiro">
                    <h3> Cracóvia </h3>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Centro de Documentação Nazi </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten.</p>
                    <h4> Dachau - Campo de Concentração </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                    <h4> Museu de Munique </h4>
                    <p> A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. A capital da região da Baviera e da cerveja alemã, guarda nas suas paredes histórias desde a Segunda Guerra Mundial aos surfistas do Englischer Garten. </p>
                </div>
            </div>

            <div class="slider_fotos_roteiro">
                <div>
                    <img src="images\destinos\resultado_interior\gueto_warsaw.jpg" alt="">
                </div>

                <div> 
                    <img src="images\destinos\resultado_interior\centro.jpg" alt="">
                </div>

                <div>
                    <img src="images\destinos\resultado_interior\dachau.jpg" alt="">
                </div>

                <div>
                    <img src="images\destinos\resultado_interior\dachau2.jpeg" alt="">
                </div>

                <div>
                    <img src="images\destinos\resultado_interior\dachau3.jpeg" alt="">
                </div>

                <div>
                    <img src="images\destinos\resultado_interior\dachau4.jpg" alt="">
                </div>

                <div>
                    <img src="images\destinos\resultado_interior\dachau5.jpg" alt="">
                </div>

                <div>
                    <img src="images\destinos\resultado_interior\dachau6.jpg" alt="">
                </div>

                <div>
                    <img src="images\destinos\resultado_interior\dachau7.jpg" alt="">
                </div>
            </div>

            <div class="caixa_dicas_destino_interior">
                <ul>
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

                    <li>
                        <a href="https://www.neweuropetours.eu/munich-walking-tours/" target="_blank">
                            <div class="box_dicas"> 
                                <img src="images/icones/tour1.svg" alt="tour">
                            </div>

                            <div class="texto_dicas">
                                <h6> Tours </h6>
                            </div>
                        </a>
                    </li>

                    <div class="separador_li_dicas_destino_interior"></div>

                    <li>
                        <a href="https://www.getyourguide.co.uk/s/?q=munique&searchSource=2" target="_blank">
                            <div class="box_dicas"> 
                                <img src="images\icones\atividades.svg" alt="atividades turísticas">
                            </div>

                            <div class="texto_dicas">
                                <h6> Atividades </h6>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="https://efa.mvv-muenchen.de/index.html#trip@enquiry" target="_blank">
                            <div class="box_dicas"> 
                                <img src="images\icones\bus.svg" alt="transportes">
                            </div>
                        
                            <div class="texto_dicas">
                                <h6> Transportes </h6>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    
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