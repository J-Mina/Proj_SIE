<?php include '../inc/header.php' ?>

    
    <?php
        include "../../acoes/geral/checkPermissions.php"; 

        if($permission > 1){
        header("location: ../geral/naoTemPermissao.php");
        exit();
        }

        if(isset($_GET['pop_aprovada'])){
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Equipa Aprovada!"); } 
                    </script>';
        }

        if(isset($_GET['pop_recusada'])){
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Equipa Recusada!"); } 
                    </script>';
        }
    ?>

    <div class="join_cont">
        <p>Aprovar Alteraçoes e candidaturas</p>
    </div>

    <div class="conteudo">
        <?php include "../../acoes/candidatura/actionGetCandidaturas.php" ?>
    </div>

    
<?php include '../inc/footer.php' ?>