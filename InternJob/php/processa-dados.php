<?php
    $nomeVaga = str_replace('#','-',$_POST['nome']);
    $data = str_replace('#','-',$_POST['data']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $status = str_replace('#','-',$_POST['status']);
    $link = str_replace('#','-',$_POST['link']);
    
    $dados = PHP_EOL.$nomeVaga.'#'.$data.'#'.$categoria.'#'.$status.'#'.$link.'#';
    
    $arquivo = fopen('vagas.hd', 'a');

    fwrite($arquivo, $dados);

    fclose($arquivo);

    header('Location: ../index.php');


    
?>