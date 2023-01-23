<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<html>

        <div class="formRegisto">
            <form action="../../acoes/geral/actionRegisto.php" method="post">
                <table>
                    <tr>
                        <td><label for="name">Nome:</label></td>
                        <td><input type="text" id="nome" name="nome"></td>
                    </tr>

                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td><input type="text" id="username" name="username"></td>
                    </tr>

                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input type="password" id="password" name="password"></td>
                    </tr>

                    <tr>
                        <td><label for="conf_password">Confirmar Password:</label></td>
                        <td><input type="password" id="conf_password" name="conf_password"></td>
                    </tr>
                </table>
            
                <input type="submit" value="Registar">
            </form>
        </div>

</html>