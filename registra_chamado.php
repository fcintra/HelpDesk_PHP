<?php

    session_start();

    // estamos trabalhando na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    $data_abertura_chamado = date('d/m/Y H:i');
   
    

    $texto = $_SESSION['id']. "#" .$titulo. "#" .$categoria. "#" .$descricao. "#" .$data_abertura_chamado. "#" .$_SESSION['nome'] . PHP_EOL;

    // abrindo o arquivo
    $arquivo = fopen('app_help_desk/arquivo.hd', 'a');

    //escrevendo o texto
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);
    
    header('Location: abrir_chamado.php')


?>