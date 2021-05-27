<?php
    session_start();
    include('config.php');

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql="select * FROM utilizadores
    where email_utilizador = '$email' and password_utilizador =MD5('$pass')";

    $resultado = $ligacao->query($sql);
    
    $n_registos = $resultado->num_rows;

    echo $n_registos;

    if($n_registos == 1){
        $registo = mysqli_fetch_assoc($resultado);
        $_SESSION['nome_utilizador'] = $registo['nome_utilizador'];
        $_SESSION['id_do_utilizador'] = $registo['id_utilizador'];

        header('location:admin.php');

    } else{
        header('location:index.php?estado_login=ko');
    }

?>