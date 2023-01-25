

<?php

        /**Utilizadores a apagar */
        $query="SELECT  id_user FROM jogador where id_equipa=".$id;
        $result = pg_query($conn, $query);

        /**Apagar Jogadores */
        $query="DELETE FROM jogador where id_equipa=".$id;
        pg_query($conn, $query);
        
        /**Apagar Utilizadores */
        $numRows = pg_numrows($result);
        $i=0;
        while($i<$numRows){
    
            $row = pg_fetch_row($result, $i);
            $id_user = $row[0];
            $query="DELETE FROM utilizador WHERE id_utilizador=".$id_user;
            pg_query($conn, $query);
            $i++;
        }

        /** Treinador a apagar */
        $query="SELECT id_treinador FROM equipa where id_equipa=".$id;
        $result = pg_query($conn, $query);
        $row = pg_fetch_row($result, 0);
        $id_treinador = $row[0];

        /**Apagar equipa */
        $query="DELETE FROM equipa where id_equipa=17";
        pg_query($conn, $query);
        
        $query="DELETE FROM treinador where id_treinador=".$id_treinador;
        pg_query($conn, $query);

?>