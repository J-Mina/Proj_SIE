<?php

    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: ../paginas/index.php?pop_permissao=1");
        exit();
    }

    include "../../baseDados/connect.php";


    $nome_equipa = $_POST['nome_equipa'];
    $nome_cidade = $_POST['nome_cidade'];
    $nome_treinador = $_POST['nome_treinador'];
    $descricao = $_POST['descricao'];
    $emblema = $_POST['emblema'];
    $ano_fundacao=$_POST['ano_fundacao'];


    $jogador_1 = $_POST['jogador_1'];
    $jogador_2 = $_POST['jogador_2'];
    $jogador_3 = $_POST['jogador_3'];
    $jogador_4 = $_POST['jogador_4'];
    $jogador_5 = $_POST['jogador_5'];
    $jogador_6 = $_POST['jogador_6'];
    $jogador_7 = $_POST['jogador_7'];

    $posicao_jogador_1=$_POST['posicao_jogador_1'];
    $posicao_jogador_2=$_POST['posicao_jogador_2'];
    $posicao_jogador_3=$_POST['posicao_jogador_3'];
    $posicao_jogador_4=$_POST['posicao_jogador_4'];
    $posicao_jogador_5=$_POST['posicao_jogador_5'];
    $posicao_jogador_6=$_POST['posicao_jogador_6'];
    $posicao_jogador_7=$_POST['posicao_jogador_7'];



    if($nome_equipa == "" || $nome_cidade=="" || $nome_treinador=="" || $descricao==""|| $emblema=="" || $jogador_1 ==""|| $jogador_2==""|| $jogador_3==""|| $jogador_4==""|| $jogador_5 ==""|| $jogador_6==""|| $jogador_7==""){
        header("Location: ../../paginas/candidatura/formCandidatarEquipa.php?pop=1");
        exit();
    }

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


    /**Inserir Equipa */

    /**Adicionar id do user */
    $username = $_SESSION['username'];
    $result = pg_query($conn, "SELECT id_utilizador FROM utilizador WHERE username='$username'");
    $row = pg_fetch_row($result, 0);
    $id_user = $row[0];


    $query = "INSERT INTO equipa (nome, data_fundacao, descricao, estado, id_cidade, id_user, logo_equipa, pontos, id_treinador) VALUES ('$nome_equipa', $ano_fundacao, '$descricao',3, '$id_cidade' , '$id_user', '$emblema', 0, '$id_treinador')";
    pg_query($conn, $query);

    $result = pg_query($conn, "SELECT id_equipa FROM equipa WHERE nome='$nome_equipa'");
    $row = pg_fetch_row($result, 0);
    $id_equipa = $row[0];

    
    /**Inserir Utilizadores e Jogadores*/
    for($i= 1; $i <= 7; $i++){

        $each= "jogador_".$i;
        $posicao="posicao_jogador_".$i;
        $jogador = $_POST[$each];
        $posicao_jogador=$_POST[$posicao];
        $username = strtolower($jogador);
        $key = str_replace(' ','_',$username);
        $query = "INSERT INTO utilizador (username, password, permissoes) VALUES ('$key', '$key', 3)";
        pg_query($conn, $query);

        $result = pg_query($conn, "SELECT id_utilizador FROM utilizador WHERE username='$key'");
        $row = pg_fetch_row($result, 0);
        $id_utilizador = $row[0];

        $query = "INSERT INTO jogador (nome_jogador,id_posicao, id_equipa, id_user) VALUES ('$jogador','$posicao_jogador', '$id_equipa', '$id_utilizador')";
        pg_query($conn, $query);

    }

    header("Location: ../../paginas/geral/index.php?pop_candidatura=1");
    exit();

?>