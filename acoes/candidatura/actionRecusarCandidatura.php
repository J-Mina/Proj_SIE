<?php
    include "../../baseDados/connect.php";

    $id_equipa = $_GET['id'];

    $query = "UPDATE equipa SET estado=2 WHERE id_equipa=".$id_equipa;
    pg_query($conn, $query);
    
    /**Apagar jogadores */
    $query="DELETE FROM jogador where id_equipa=".$id_equipa;
    pg_query($conn, $query);

    /**Apagar equipa */
    $query="DELETE FROM equipa where id_equipa=".$id_equipa;
    pg_query($conn, $query);

    /**Apagar utilizadores */
    $query="SELECT  id_user FROM jogador where id_equipa=".$id_equipa;
    $result = pg_query($conn, $query);


    $numRows = pg_numrows($result);
    $i=0;
    while($i<$numRows){

        $row = pg_fetch_row($result, $i);
        $id_user = $row[0];
        $query="DELETE FROM utilizador WHERE id_utilizador=".$id_user;
        pg_query($conn, $query);
        $i++;
    }

    /** Apagar treinador */
    $query="SELECT id_treinador FROM equipa where id_equipa=".$id_equipa;
    $result = pg_query($conn, $query);
    $row = pg_fetch_row($result, 0);
    $id_treinador = $row[0];

    $query="DELETE FROM treinador where id_treinador=".$id_treinador;
    pg_query($conn, $query);
    


    header("location: ../../paginas/candidatura/listaCandidatura.php?pop_recusada=1");
    exit();

?>