<?php include "../inc/header.php";

    if(!isset($_SESSION['username'])){
        header("location: naoTemPermissao.php");
        exit();
    }

    if(isset($_GET['inc_pass'])){
        echo '<script type="text/javascript">
                window.onload = function () { alert("Password atual incorreta !"); } 
                </script>';
    }elseif(isset($_GET['dont_match'])){
        echo '<script type="text/javascript">
                window.onload = function () { alert("Password não correspondem !"); } 
                </script>';
    }elseif(isset($_GET['compl'])){
        echo '<script type="text/javascript">
                window.onload = function () { alert("Todos os campos devem ser preenchidos!"); } 
                </script>';
    }elseif(isset($_GET['sucesso'])){
        echo '<script type="text/javascript">
                window.onload = function () { alert("Password alterada com sucesso!"); } 
                </script>';
    }
?>

<html>
    

    <h2 id="subtitulos2">Alterar Password</h2>

    <div class="join_cont">
        <div class="formRegisto">
            <form class = "formMudarPassword" action="../../acoes/geral/actionAlterarPassword.php" method="post">
            
                <table>
                    <tr>
                        <td><label for="pass">Password Atual:</label></td>
                        <td><input type="password" id="pass" name="pass"></td>
                    </tr>

                    <tr>
                        <td><label for="nova_password">Nova Password:</label></td>
                        <td><input type="password" id="nova_password" name="nova_password"></td>
                    </tr>

                    <tr>
                        <td><label for="conf_password">Confirmar Password:</label></td>
                        <td><input type="password" id="conf_password" name="conf_password"></td>
                    </tr>

                </table>
            
                <input type="submit" value="Alterar Password">
            </form>
            
        </div>
    </div>
</html>


<?php include "../inc/footer.php"?>