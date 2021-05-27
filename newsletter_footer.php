      
<div class="newsletter_footer">

    <!-- newsletter-->

    <section id="newsletter"> 
        <div class="titulo_newsletter">
            <h5> Subscreve e recebe os roteiros que irão criar a tua história </h5>
        </div>

        <div class="subscricao_newsletter">
            <form action="submete_assinante" method="post">
                <ul>
                    <li class="newsletter_input_nome">
                        <input class="input_nome" type="text" name="nome_introduzido" id="nome_inserido" placeholder="Primeiro Nome">
                        <div id="caixa_aviso_nome"></div>
                    </li>

                    <li class="separador"></li>

                    <li class="newsletter_input_email">
                        <input class="input_email" type="text" name="email_introduzido" id="email_inserido" placeholder="E-mail">
                        <div id="caixa_aviso_email"></div>
                    </li>
                </ul>
            </form>
        </div>
        
        <div class="botao_subscricao_newsletter">
            <a href="submete_assinante.php" target="_blank" onclick=" return validaFormulario()"> Subscrever <i class="fas fa-chevron-right"> </i> </a>
        </div>
    </section> 

    <!-- footer -->
    <footer>
        <div class="menu_footer">
            <ul>
                <li> 
                    <a href="sobre.php">
                    SOBRE
                    </a>
                </li>

                <li>
                    <a href="destinos.php"> 
                    DESTINOS
                    </a>
                </li>

                <li> 
                    <a href="dicas.php"> 
                    DICAS
                    </a>
                </li>

                <li>
                    <a href="inspiracao.php"> 
                    INSPIRAÇÃO
                    </a>
                </li>

                <li> 
                    <a href="contactos.php">
                    CONTACTOS
                    </a>
                </li>

            </ul>
        </div>

        <div class="redes_sociais">
            <ul>
                <li> 
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <p> Instagram</p>
                    </a>
                </li>

                <li>
                    <a href="https://www.facebook.com/" target="_blank"> 
                        <i class="fab fa-facebook-f"></i> 
                        <p> Facebook</p>                    
                    </a>
                </li>

                <li> 
                    <a href="https://www.youtube.com/" target="_blank"> 
                        <i class="fab fa-youtube"></i>
                        <p> Youtube</p>
                    </a>
                </li>

                <li>
                    <a href="https://www.whatsapp.com/" target="_blank"> 
                        <i class="fab fa-whatsapp"></i>  
                        <p> whatsapp</p>                          
                    </a>
                </li>
            </ul>
        </div>

        <div class="info_website">
            <div class="privacidade">
                <a href="privacidade.php">
                    Política de Privacidade
                </a>
            </div>

            <div class="rights">
                    © 2020 M’s around the world. All rights reserved.                       
            </div>

            <button onclick="topFunction()" id="myBtn" title="Go to top"> <img src="images/icones/to_the_top.svg" alt=""> </button>

        </div>
    </footer>
</div>
<!-- Fim newsletter e footer -->