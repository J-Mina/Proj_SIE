<?php include '../inc/header.php';
      include "../../acoes/geral/checkPermissions.php";
      include "../../baseDados/connect.php";

          if(!isset($_GET['id'])){
               header("location: index.php");
               exit();
          }

          $id_equipa=-1;

          $id = $_GET['id'];

          $query = "SELECT nome_jogador, equipa.nome, equipa.logo_equipa, id_posicao, id_jogador FROM  jogador,equipa WHERE jogador.id_equipa = equipa.id_equipa and equipa.id_equipa=".$id;

          $result = pg_query($conn,$query);
          $player = pg_fetch_assoc($result);

          $numRows = pg_numrows($result);
          $i=0;

?>

     <h2 id="subtitulos2">Plantel equipa <?php echo $player['nome']; ?></h2>



     <div class="pagina_plantel">

          <?php
               if(isset($_GET['cand'])){
                    echo "<div class=\"button_back\">
                    <a href=\"../candidatura/formVerCandidatura.php?id=".$id."\"><button><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i> Voltar</button></a>
                    </div>";

               }else{
                    echo "<div class=\"button_back\">
                    <a href=\"equipa.php?id=".$id."\"><button><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i> Voltar</button></a>
                    </div>";
               }
               
          ?>

          <img src=<?php echo "../".$player['logo_equipa']; ?>>

          <table class="pagina_plantel">
               <tr>
               <th>Guarda-Redes</th>
               <?php 
                    if( (isset($_SESSION['username']) && $permission==2)){

                         $username = $_SESSION['username'];
                         $q= "SELECT id_equipa FROM utilizador,equipa where equipa.id_user=utilizador.id_utilizador and username ='$username'";
                         $res=pg_query($conn,$q);
                         $r = pg_fetch_row($res);
                         $id_equipa = $r[0];
                         if($id_equipa == $id){
                              echo "<th>Editar</th>";
                         }
                    }elseif($permission==1){
                         echo "<th>Editar</th>";
                    }
               ?>
               </tr>
               
               <?php
                    $resultgr = pg_query($conn,$query);
                    while($row = pg_fetch_assoc($resultgr)) {
                         if ($row['id_posicao'] == 4) {
               ?>
                    <tr>
                         <td><a href="../jogador/jogador.php?id=<?php echo $row['id_jogador']; ?>">
                              <?php echo $row['nome_jogador']; ?>
                              </a>
                         </td>

                         <?php 
                              if($id_equipa == $id){
                                   echo "<td>";
                                   echo "<a href=\"../jogador/formEditaJogador.php?id=".$row['id_jogador']."\"> <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>";
                                   echo "</td>";
                              }elseif($permission==1){
                                   echo "<td>";
                                   echo "<a href=\"../jogador/formEditaJogador.php?id=".$row['id_jogador']."\"> <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>";
                                   echo "</td>";
                              }
                         ?>
                    </tr>
               <?php
                         }
                    }
               ?>
          </table>

          <table class="pagina_plantel">
               <tr>
               <th>Defesa</th>
               <?php 
                    if($id_equipa == $id){
                         echo "<th>Editar</th>";
                    }elseif($permission==1){
                         echo "<th>Editar</th>";

                    }
               ?>

               </tr>
               
               <?php
                         $resultdefesa = pg_query($conn,$query);
                    while($row = pg_fetch_assoc($resultdefesa)) {
                         if ($row['id_posicao'] ==2) {
               ?>
                    <tr>
                         <td>
                              <a href="../jogador/jogador.php?id=<?php echo $row['id_jogador']; ?>">
                              <?php echo $row['nome_jogador']; ?>
                              </a>
                         </td>
                         <?php 
                              if($id_equipa == $id){
                                   echo "<td>";
                                   echo "<a href=\"../jogador/formEditaJogador.php?id=".$row['id_jogador']."\"> <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </a> ";
                                   echo "</td>";
                              }elseif($permission==1){
                                   echo "<td>";
                                   echo "<a href=\"../jogador/formEditaJogador.php?id=".$row['id_jogador']."\"> <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>";
                                   echo "</td>";
                              }
                         ?>
                    </tr>
               <?php
                         }
                    }
               ?>
          </table>

          <table class="pagina_plantel">
               <tr>
               <th>Médio</th>
               <?php 
                    if($id_equipa == $id){
                         echo "<th>Editar</th>";
                    }elseif($permission==1){
                         echo "<th>Editar</th>";

                    }
               ?>
               </tr>
               
               <?php
                         $resultmedio = pg_query($conn,$query);
                    while($row = pg_fetch_assoc($resultmedio)) {
                         if ($row['id_posicao'] ==3) {
               ?>
                    <tr>
                         <td><a href="../jogador/jogador.php?id=<?php echo $row['id_jogador']; ?>">
                              <?php echo $row['nome_jogador']; ?>
                              </a>
                         </td>
                         <?php 
                              if($id_equipa == $id){
                                   echo "<td>";
                                   echo "<a href=\"../jogador/formEditaJogador.php?id=".$row['id_jogador']."\"> <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>";
                                   echo "</td>";
                              }elseif($permission==1){
                                   echo "<td>";
                                   echo "<a href=\"../jogador/formEditaJogador.php?id=".$row['id_jogador']."\"> <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>";
                                   echo "</td>";
                              }
                         ?>
                    </tr>
               <?php
                         }
                    }
               ?>
          </table>

          <table class="pagina_plantel">
               <tr>
               <th>Avançado</th>
               <?php 
                    if($id_equipa == $id){
                         echo "<th>Editar</th>";
                    }elseif($permission==1){
                         echo "<th>Editar</th>";

                    }
               ?>
               </tr>
               
               <?php
                         $resultavancado = pg_query($conn,$query);
                    while($row = pg_fetch_assoc($resultavancado)) {
                         if ($row['id_posicao'] ==1) {
               ?>
                    <tr>
                         <td><a href="../jogador/jogador.php?id=<?php echo $row['id_jogador']; ?>">
                              <?php echo $row['nome_jogador']; ?>
                              </a>
                         </td>
                         <?php 
                              if($id_equipa == $id){
                                   echo "<td>";
                                   echo "<a href=\"../jogador/formEditaJogador.php?id=".$row['id_jogador']."\"> <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </a>";
                                   echo "</td>";
                              }elseif($permission==1){
                                   echo "<td>";
                                   echo "<a href=\"../jogador/formEditaJogador.php?id=".$row['id_jogador']."\"> <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>";
                                   echo "</td>";
                              }
                         ?>
                    </tr>
               <?php
                         }
                    }
               ?>
          </table>



     </div>





</body>

<?php include '../inc/footer.php' ?>

</html>
