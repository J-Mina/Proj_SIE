<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<html>
        <form class = "formRegisto" action="../acoes/geral/actionRegisto.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="nome" name="nome">
            <br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br>
            <label for="conf_password">Confirmar Password:</label>
            <input type="password" id="conf_password" name="conf_password">
            <br>
            <input type="submit" value="Registar">
        </form>

</html>