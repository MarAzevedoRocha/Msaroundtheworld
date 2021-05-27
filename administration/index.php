<?php
include('config.php');
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
    <title> M's around the world login </title>
</head>

<body>
    <div class="wrapper">
        <div class="moldura">
            <img src="../images/admin.jpg" alt="viagem">
        </div>

        <div class="login">
            <?php
                if(!isset($_SESSION['nome_utilizador'])){ ?>        
                    <form action="valida_login.php" method="post">
                        <ul>
                            <li>
                                <input type="text" name="email" placeholder="E-mail">
                            </li>

                            <li>
                                <input type="password" name="pass" placeholder="Password">
                            </li>

                            <li>
                                <a href="#"> Esqueceu-se da password?</a>
                            </li>

                            <li>
                                <button> Entrar </button>
                            </li>
                        </ul>
                    </form>       

                    <?php
                        if(isset($_GET['estado_login']) && $_GET['estado_login']=='ko'){?>
                            <div class="mensagem_erro"> <?php echo "Login errado!"; } ?> </div>    
                    <?php 
                        }else {
                        echo "Olá Sr(a)".$_SESSION['nome_utilizador'];
                    } ?>        
        </div>
    </div>

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>