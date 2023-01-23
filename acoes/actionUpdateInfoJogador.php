<?php

    include "../baseDados/connect.php";     

    $nome_jogador = $_POST["nome_jogador"];
    $idade = $_POST["idade"];
    $altura = $_POST["altura"];
    $clube_ant = $_POST["clube_ant"];
    $posicao = $_POST["posicao"];
    $nome_equipa = $_POST["nome_equipa"];
    $id_jogador = $_POST["id_jogador"];
    $id_posicao = $_POST["id_posicao"];
    $id_equipa = $_POST["id_equipa"];
    

    $updateQuery="UPDATE jogador 
                  SET nome_jogador = $1, idade = $2, altura = $3, clube_ant = $4, id_posicao=$5 
                  WHERE id_jogador = $6";

    $result = pg_query_params($conn, $updateQuery, array($nome_jogador, $idade, $altura, $clube_ant,$id_posicao, $id_jogador));

    header('Location: ../paginas/jogador.php?id='.$id_jogador);
    exit();
   
?>