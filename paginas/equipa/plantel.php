<?php include '../inc/header.php';
      include "../../baseDados/connect.php";

          $id = $_GET['id'];

          $query="SELECT nome_jogador, equipa.nome as nome_equipa,logo_equipa,id_posicao
          FROM jogador
          JOIN equipa ON jogador.id_equipa = equipa.id_equipa
          WHERE equipa.id_equipa=".$id;

          $result = pg_query($conn,$query);
          $player = pg_fetch_assoc($result);

          $numRows = pg_numrows($result);
          $i=0;

 ?>

     <h2 id="subtitulos2">Plantel equipa <?php echo $player['nome_equipa']; ?></h2>



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

          <table>
               <tr>
               <th>Guarda-Redes</th>
               </tr>
               
               <?php
                    $resultgr = pg_query($conn,$query);
                    while($row = pg_fetch_assoc($resultgr)) {
                         if ($row['id_posicao'] ==4) {
               ?>
                    <tr>
                         <td><?php echo $row['nome_jogador']; ?></td>
                    </tr>
               <?php
                         }
                    }
               ?>
          </table>

          <table>
               <tr>
               <th>Defesa</th>
               </tr>
               
               <?php
                         $resultdefesa = pg_query($conn,$query);
                    while($row = pg_fetch_assoc($resultdefesa)) {
                         if ($row['id_posicao'] ==2) {
               ?>
                    <tr>
                         <td><?php echo $row['nome_jogador']; ?></td>
                    </tr>
               <?php
                         }
                    }
               ?>
          </table>

          <table>
               <tr>
               <th>Médio</th>
               </tr>
               
               <?php
                         $resultmedio = pg_query($conn,$query);
                    while($row = pg_fetch_assoc($resultmedio)) {
                         if ($row['id_posicao'] ==3) {
               ?>
                    <tr>
                         <td><?php echo $row['nome_jogador']; ?></td>
                    </tr>
               <?php
                         }
                    }
               ?>
          </table>

          <table>
               <tr>
               <th>Avançado</th>
               </tr>
               
               <?php
                         $resultavancado = pg_query($conn,$query);
                    while($row = pg_fetch_assoc($resultavancado)) {
                         if ($row['id_posicao'] ==1) {
               ?>
                    <tr>
                         <td><?php echo $row['nome_jogador']; ?></td>
                    </tr>
               <?php
                         }
                    }
               ?>
          </table>



     </div>





</body>

</html>
