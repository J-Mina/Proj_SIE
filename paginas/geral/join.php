<?php   include '../inc/header.php';
        include '../../acoes/geral/checkPermissions.php';
        include '../../baseDados/connect.php';

        if(isset($_SESSION['username'])){
                $username = $_SESSION['username'];
                $result = pg_query($conn, "SELECT * FROM utilizador WHERE username='$username'");
                $row = pg_fetch_row($result, 0);
                $id_user = $row[0];
                $permissoes = $row[3];

                $result = pg_query($conn, "SELECT estado FROM equipa WHERE id_user=$id_user");
                $numRows = pg_numrows($result);
                if($numRows > 0){
                        $row = pg_fetch_row($result, 0);
                        $estado = $row[0];      
                ?>

               
                <?php 
                /**Caso seja utilizador que já fez candidatura */
                if($estado == 3){ ?>
                
                        <div class="join_cont">
                                <p>A SUA CANDIDATURA FOI SUBMETIDA, AGUARDE que O NOSSO ADMINISTRADOR Aprove e depois terá acesso à pagina da sua equipa</p>
                        </div>
                <?php

                /**Caso seja utilizador que já fez candidatura e foi aprovada */
                }elseif($estado == 2){

                       echo "<div class=\"msg_apr_rec\">
                                <p>A SUA CANDIDATURA Infelizmente não foi aprovada. Agradecemos desde já o seu interesse.</p>
                                <p>Pode tentar candidatar-se novamente <a class=\"underline\" href=\"../../acoes/candidatura/actionVoltarACandidatar.php?id=".$id_user."\">aqui</a></p>
                        </div>";
                        

                

                /**Caso seja utilizador que já fez candidatura e foi recusada */             
                }elseif($estado == 1){
                        echo    "<div class=\"msg_apr_rec\">
                                        <p>A sua candidatura foi aprovada. Obrigado pela preferência!</p>
                                        <p>Obrigado pela preferência, pode consultar a informação da sua equipa <a class=\"underline\" href=\"../../acoes/equipa/actionAtivarEquipa.php?id=".$id_user."\">aqui</a></p>
                                </div>";

                /**Caso seja utilizador que ainda não fez candidatura */  
                }

        /**Caso não seja utilizador */
                }else{
                        header('location: ../candidatura/formCandidatarEquipa.php');
                        exit();

                 }
        }else{?>

                <div class="join_cont">
                        <p>Antes de fazer login a tua candidatura precisamos que te registes na nossa plataforma caso ainda não tenhas conta.</p>
                        <p><a href="registar.php"><i class="fa fa-futbol-o" aria-hidden="true"></i> Registar </a></p>
                        <p> Se já tens conta podes proceder ao login normalmente no canto superior direito.</p>
                </div>

        <?php
        }?>


    </body>
</html>