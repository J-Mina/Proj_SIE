<?php include '../inc/header.php' ?>

        <?php

        if(isset($_GET['problem'])){

            $problem = $_GET['problem'];

            echo "<script type='text/javascript'>
                    window.onload = function () { alert('Registo Inválido:'+' $problem'); } 
                    </script>";
        }
        ?>

    <div class="join_cont">
          <p>ANTES DE FAZERES A TUA CANDIDATURA PRECISAMOS QUE TE REGISTES NA NOSSA PLATAFORMA</p>

          <div> <?php include 'formRegisto.php' ?></div>

    </div>

</body>