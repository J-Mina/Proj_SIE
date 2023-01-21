<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<?php
    session_start();
    if(!isset($_SESSION['username'])) {
?>
    <form class = "formLogin" action="../acoes/validarLogin.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        &emsp;
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        &emsp;
        <input type="submit" value="Login">
    </form>

<?php
    } 
    else{ $logged_user = $_SESSION['username'];
    
        echo "Bem Vindo, ".$logged_user."!";
    ?>  

    <form method="post" action="../acoes/actionLogout.php">
        <input type="submit" name="logout" value="Logout">
    </form>
<?php
    }
?>
