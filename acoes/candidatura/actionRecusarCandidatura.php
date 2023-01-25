<?php
    include "../../baseDados/connect.php";

    $id_equipa = $_GET['id'];

    $query = "UPDATE equipa SET estado=2 WHERE id_equipa=".$id_equipa;
    pg_query($conn, $query);

    include "actionEliminarUsers.php";
    
    header("location: ../../paginas/candidatura/listaCandidatura.php?pop_recusada=1");
    exit();

?>