<?php
include('config.php');
?>


<?php
        $sql="insert into dicas (nome_dica, intro_dica, texto_botao_dica, link_dica)";
        
        $resultado = $ligacao->query($sql);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../fonts/css/all.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css" type="text/css" />
    <title> M's around the world admin </title>
</head>

<body>
    <div class="wrapper">
        <nav class="menu_admin">
            <ul>
                <a href="#">
                    <li>
                        Dashboard
                    </li>
                </a>

                <a href="#">
                    <li>
                        Destinos
                    </li>
                </a>

                <a href="#">
                    <li>
                        Roteiros
                    </li>
                </a>

                <a href="#">
                    <li>
                        Dicas
                    </li>
                </a>

                <a href="#">
                    <li>
                        Inspiração
                    </li>
                </a>

                <a href="#">
                    <li>
                        Área Pessoal
                    </li>
                </a>

                <a href="index.php">
                    <li>
                        <i class="fas fa-sign-out-alt"></i>
                    </li>
                </a>
            </ul>
        </nav>

        <div class=formulario_insercao_dados>
            <h3> DICAS </h3>

            <form action="insere_dados.php" method="post" enctype="multipart/form-data">
                        <ul>
                            <li>
                                <input type="text" name="nome_dica" placeholder="Nome dica">
                            </li>

                            <li>
                                <input type="text" name="intro_dica" placeholder="Intro Dica">
                            </li>

                            <li>
                                <input type="file" name="bg_dica" accept="image/png, image/jpeg, image/jpg">
                            </li>

                            <li>
                                <input type="file" name="icon_dica">
                            </li>

                            <li>
                                <input type="text" name="texto_botao_dica" placeholder="Texto Botão Dica">
                            </li>

                            <li>
                                <input type="text" name="link_dica" placeholder="Link Dica">
                            </li>

                            <li>
                                <button class="botao_inserir_dados"> Inserir </button>
                            </li>
                        </ul>
                    </form> 
                    <?php  
        if(isset($_GET['estado_insercao']) && $_GET['estado_insercao'] == 'ok'){ 
            echo "Inserção efetuada com sucesso!"
        ?>

    <?php
        }
    ?>      

        </div>
</div>

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>