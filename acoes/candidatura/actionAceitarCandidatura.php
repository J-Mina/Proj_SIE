<?php
    include "../../baseDados/connect.php";

    $id = $_GET['id'];

    $query = "UPDATE equipa SET estado=1 WHERE id_equipa=".$id;
    $result = pg_query($conn, $query);

    header("location: ../../paginas/candidatura/listaCandidatura.php?pop_aprovada=1");
    exit();



?>