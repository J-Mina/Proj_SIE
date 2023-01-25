<?php include '../inc/header.php'; 
     include '../../acoes/geral/checkPermissions.php';
     include "../../baseDados/connect.php";

     $id_user = -1;

      if(isset($_GET['id'])){
       $id = $_GET['id'];
          
     }

     elseif(isset($_SESSION['username']) && $permission == 3){
          $username = $_SESSION['username'];
          $result = pg_query($conn, "SELECT id_utilizador FROM utilizador WHERE username='$username'");
          $row = pg_fetch_row($result, 0);
          $id_user = $row[0];
          $result = pg_query($conn, "SELECT id_jogador FROM jogador WHERE id_user=$id_user");
          $row = pg_fetch_row($result, 0);
          $id = $row[0]; 

     
     }else{
          header("location: ../geral/index.php");
          exit();
     }  

     $query="SELECT id_jogador, equipa.id_equipa as istoeoid,nome_jogador,idade, altura, clube_ant,posicao.nome_posicao as posicao, equipa.nome as nome_equipa, foto_jogador
             FROM jogador
             JOIN posicao ON jogador.id_posicao = posicao.id_posicao
             JOIN equipa ON jogador.id_equipa = equipa.id_equipa 
             WHERE id_jogador=".$id;

     $result = pg_query($conn,$query);
     $player = pg_fetch_assoc($result);
?>

     <h2 id="subtitulos2"><?php echo $player['nome_jogador']; ?></h2>


     <div class="pagina_jogador">

          <?php

          echo "<div class=\"imagem_jogador\" >
                    <img class=\"perfil\" src=\"../".$player['foto_jogador']."\" >
               </div>";

          ?>

          <div class="informacao_jogador">
               <?php
                    echo "<div class=\"button_back\">
                         <a href=\"../equipa/plantel.php?id=".$player['istoeoid']."\"><button><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i> Voltar</button></a>
                    </div>"
               ?>
               
               <table>
                    <tr>
                         <td><b>Nome:</b></td>
                         <td style="color:#737373"><?php echo $player['nome_jogador']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Idade:</b></td>
                         <td style="color:#737373"><?php echo $player['idade']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Altura (cm):</b></td>
                         <td style="color:#737373"><?php echo $player['altura']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Clubes anteriores:</b></td>
                         <td style="color:#737373"><?php echo $player['clube_ant']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Posicao:</b></td>
                         <td style="color:#737373"><?php echo $player['posicao']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Equipa atual</b></td>
                         <td style="color:#737373"><?php echo $player['nome_equipa']; ?></td>
                    </tr>
               </table>

               <?php

               if($permission < 2){

                    echo "<div class=\"button_back\">
                     <a href=\"formEditaJogador.php?id=".$id."\"><button>Editar info</button></a>
                    </div>";
               }elseif(isset($_SESSION['username']) && $permission == 3){

                    $username = $_SESSION['username'];
                    $q= "SELECT utilizador.id_utilizador FROM utilizador,jogador where jogador.id_user=utilizador.id_utilizador and username ='$username'";
                    $res=pg_query($conn,$q);
                    $r = pg_fetch_row($res);
                    $id_u = $r[0];

                    if($id_u == $id_user){
                         echo "<div class=\"button_back\">
                              <a href=\"formEditaJogador.php?id=".$id."\"><button>Editar info</button></a>
                              </div>";
                    }

               }

               
               ?>
          </div>

     </div>


</body>

<?php include '../inc/footer.php' ?>

</html>
