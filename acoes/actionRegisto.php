<?php

    $name = $_POST['nome'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    $problem ="";


    if($password == $conf_password){
        if($password != "" && strlen($password) >= 5){

        }else{
        $problem = "Password has to be at least 5 characters long";
        } 
    }else{
        $problem = "Passwords Dont Match";
    }

    if($problem !=""){
        header("Location: ../paginas/registar.php");
        
     }else{
        //"INSERT INTO utilizadores (name, username, password) VALUES ($name, $username, $password)"
        header("Location: ../paginas/index.php");
    }

    exit;
   
?>