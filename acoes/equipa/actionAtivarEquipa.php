<?php
    include "../../baseDados/connect.php";

    $id_user = $_GET['id'];

    $query = "SELECT * FROM equipa WHERE id_user=".$id_user;
    $result = pg_query($conn, $query);
    $row = pg_fetch_row($result, 0);
    $id_equipa = $row[0];

    $query = "UPDATE equipa SET estado=0 WHERE id_equipa=".$id_equipa;
    $result = pg_query($conn, $query);

    $query = "UPDATE utilizador SET permissoes=2 WHERE id_utilizador=".$id_user;
    $result = pg_query($conn, $query);


    header("location: ../../paginas/equipa/equipa.php");
    exit();
?>