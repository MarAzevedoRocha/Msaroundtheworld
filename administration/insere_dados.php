<?php 
    include('config.php');
    print_r($_FILES);


    $origem = $_FILES['bg_dica']['tmp_name'];
    $nome_ficheiro = uniqid();
    $imagens_array = explode(".", $_FILES['bg_dica']['name']);
    $extensao_imagem = $imagens_array[count($imagens_array) - 1];
    $nome_completo_ficheiro = $nome_ficheiro.".".$extensao_imagem;
    $destino = '../images/dicas/'.$nome_completo_ficheiro;
    move_uploaded_file($origem, $destino);

    $origem_icone = $_FILES['icon_dica']['tmp_name'];
    $nome_icone = uniqid();
    $icones_array = explode(".", $_FILES['icon_dica']['name']);
    $extensao_icone = $icones_array[count($icones_array) - 1];
    $nome_completo_icone = $nome_icone.".".$extensao_icone;
    $destino_icone = '../images/icones/'.$nome_completo_icone;
    move_uploaded_file($origem_icone, $destino_icone);

    $nome_dica = $_POST['nome_dica'];
    $intro_dica = $_POST['intro_dica'];
    $texto_botao_dica = $_POST['texto_botao_dica'];
    $link_dica = $_POST['link_dica'];
    
    $sql = "INSERT INTO dicas
    (nome_dica, intro_dica, bg_dica, icon_dica, texto_botao_dica, link_dica)
    VALUES
    ('$nome_dica', '$intro_dica', '$nome_completo_ficheiro', '$nome_completo_icone', '$texto_botao_dica', '$link_dica')";

    echo $sql;
    
    $ligacao->query($sql);

    header('location:admin.php?area=insercao&estado_insercao=ok');
?>