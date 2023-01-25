<?php

    include "../../baseDados/connect.php";

    $name = $_POST['nome'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    $problem ="";


    if($password == $conf_password){
        if($password != "" && strlen($password) >= 5){

        }else{
        $problem = "Password deve conter no mínimo 5 caracteres !";
        } 
    }else{
        $problem = "As passwords não correspondem!";
    }

    if($problem !=""){

        $query = "SELECT * from utilizador where username = '$username'";
        $result = pg_exec($conn, $query);
        $count = pg_num_rows($result);

        if($count == 1){
            $problem = "Username já está a ser utilizado!";
        }

        header("Location: ../../paginas/geral/registar.php?problem=".$problem);
        
    }else{
        $password = md5($password);
        $query = "INSERT INTO utilizador (username, password, permissoes) VALUES('$username','$password', 4 )";
        pg_exec($conn, $query);

        pg_close($conn);

        header("Location: ../../paginas/geral/index.php?pop=1");
    }

    exit;
   
?>