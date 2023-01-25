
<?php
    session_start();
    if(!isset($_SESSION['username'])) {
?>
    <form class = "formLogin" action="../../acoes/geral/validarLogin.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        &emsp;
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        &emsp;
        <input type="submit" value="Login">
    </form>
    <a href="alterarPassword.php"></a>

<?php
    } 
    else{ 
        $logged_user = $_SESSION['username'];


        echo "<div class=\"loginHello\">";
        echo "Bem Vindo, &nbsp; <a class=\"name_logged\" href=\"../../paginas/geral/alterarPassword.php\"> ".$logged_user."</a>&nbsp;!";
        echo "&emsp;";
        echo "  <form class = \"formLogin\" method=\"post\" action=\"../../acoes/geral/actionLogout.php\">
                    <input type=\"submit\" name=\"logout\" value=\"Logout\">
                </form>";  
        echo "</div>";}
    ?>  

    

  

