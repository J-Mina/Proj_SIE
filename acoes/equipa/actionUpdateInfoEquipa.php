<?php

    include "../../baseDados/connect.php";     

    $nome_equipa = $_POST["nome"];
    $data_fundacao = $_POST["data_fundacao"];
    $nome_cidade = $_POST["nome_cidade"];
    $nome_treinador = $_POST["nome_treinador"];
    $descricao = $_POST["descricao"];
    $id_equipa = $_POST["id_equipa"];
    

    $result = pg_query($conn, "SELECT * FROM cidade WHERE nome_cidade='$nome_cidade'");
    $count = pg_num_rows($result);

    /* Buscar id da cidade para inserir na equipa  */
    if($count == 1) {
        /*Cidade já existe */
        $result = pg_query($conn, "SELECT id_cidade FROM cidade WHERE nome_cidade='$nome_cidade'");
        $row = pg_fetch_row($result, 0);
        $id_cidade = $row[0];
        
    } else{
        /*Cidade não existe */
        pg_query($conn, "INSERT INTO cidade (nome_cidade) VALUES ('$nome_cidade')");
        $result = pg_query($conn, "SELECT id_cidade FROM cidade WHERE nome_cidade='$nome_cidade'");
        $row = pg_fetch_row($result, 0);
        $id_cidade = $row[0];
    }

    /** Buscar id do treinador para inserir na equipa */
    $result = pg_query($conn, "SELECT * FROM treinador WHERE nome_treinador='$nome_treinador'");
    $count = pg_num_rows($result);
    if($count == 1) {
        /*Treinador já existe */
        $result = pg_query($conn, "SELECT id_treinador FROM treinador WHERE nome_treinador='$nome_treinador'");
        $row = pg_fetch_row($result, 0);
        $id_treinador = $row[0];
    } else{
        /*Treinador não existe */
        pg_query($conn, "INSERT INTO treinador (nome_treinador) VALUES ('$nome_treinador')");
        $result = pg_query($conn, "SELECT id_treinador FROM treinador WHERE nome_treinador='$nome_treinador'");
        $row = pg_fetch_row($result, 0);
        $id_treinador = $row[0];
    }



    $updateQuery="UPDATE equipa 
                  SET nome = $1, data_fundacao = $2, id_cidade = $3, id_treinador = $4, descricao=$5 
                  WHERE id_equipa = $6";

    $result = pg_query_params($conn, $updateQuery, array($nome_equipa, $data_fundacao, $id_cidade, $id_treinador,$descricao,$id_equipa));

    header('Location: ../../paginas/equipa/equipa.php?id='.$id_equipa);
    exit();
   
?>