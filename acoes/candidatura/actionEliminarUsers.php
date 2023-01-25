

<?php
    include "../../baseDados/connect.php";


    $query="SELECT  id_user FROM equipa where id_equipa=14";
    $result = pg_query($conn, $query);

    /**Apagar equipa */
    $query="DELETE FROM equipa where id_equipa=14";
    pg_query($conn, $query);


    $numRows = pg_numrows($result);
    $i=0;
    while($i<$numRows){

        $row = pg_fetch_row($result, $i);
        $id_user = $row[0];

        $query="DELETE FROM utilizador WHERE id_utilizador=".$id_user;
        pg_query($conn, $query);
        $i++;
    }

?>