<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    include "../../baseDados/connect.php";

    $password = md5($password);
    $result = pg_query($conn, "SELECT * FROM utilizador WHERE username='$username' AND password='$password'");
    $count = pg_num_rows($result);
    if($count == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header("location: ../../paginas/geral/index.php");
    } else {
        
        header("location:../../paginas/geral/index.php?invalid=1");
        
    }exit();
    pg_close($conn);
?>