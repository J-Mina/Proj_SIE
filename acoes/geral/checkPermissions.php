<?php

    include "../../baseDados/connect.php";

    if(!isset($_SESSION['username'])) {
        $permission = 5;
    } 
    else{ 
        $username = $_SESSION['username'];
        $query ="SELECT permissoes FROM utilizador where username = '$username'";

        $result = pg_query($conn, $query);

        $row = pg_fetch_row($result, 0);

        $permission = $row[0];
    }

    pg_close($conn);

?>