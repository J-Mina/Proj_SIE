<?php

    $password = $_POST['pass'];
    $nova_pass = $_POST['nova_password'];
    $conf_pass = $_POST['conf_password'];
    
    include "../../baseDados/connect.php";

    if($nova_pass == "" || $conf_pass=="" || $password==""){
        header("location:../../paginas/geral/alterarPassword.php?compl=1");
        exit();

    }


    session_start();
    $username = $_SESSION['username'] ;

    $password = md5($password);
    $result = pg_query($conn, "SELECT * FROM utilizador WHERE username='$username' AND password='$password'");
    $count = pg_num_rows($result);

    if($count == 1 && $nova_pass == $conf_pass) {
        $nova_pass=md5($nova_pass);
        pg_query($conn,"UPDATE utilizador SET password='$nova_pass' WHERE username='$username'");

        header("location:../../paginas/geral/alterarPassword.php?sucesso=1"); 
        exit();
        
    }elseif($count != 1) {
        
        header("location:../../paginas/geral/alterarPassword.php?inc_pass=1");
        exit();
    }else{
       header("location:../../paginas/geral/alterarPassword.php?dont_match=1");
       exit();
    }


    pg_close($conn);


?>