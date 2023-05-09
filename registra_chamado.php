<?php

    session_start();

    $title = str_replace('#', '-', $_POST['titulo']);
    $category = str_replace('#', '-', $_POST['categoria']);
    $description = str_replace('#', '-', $_POST['descricao']);

    
    $text =  $_SESSION['id'] . '#' . $title . '#' . $category . '#' . $description . PHP_EOL;
    
    // Abrindo o arquivo
    $file = fopen('arquivo.txt', 'a');

    // Escrevendo o texto
    fwrite($file, $text);

    // Fechando arquivo
    fclose($file);
    header('location: abrir_chamado.php');

?>


