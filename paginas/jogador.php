<?php include 'inc/header.php'; 
     include "../baseDados/connect.php";

     if(isset($_SESSION['username'])){
          $username = $_SESSION['username'];
          $result = pg_query($conn, "SELECT id_utilizador FROM utilizador WHERE username='$username'");
          $row = pg_fetch_row($result, 0);
          $id_user = $row[0];
          $result = pg_query($conn, "SELECT id_jogador FROM jogador WHERE id_user=$id_user");
          $row = pg_fetch_row($result, 0);
          $id = $row[0]; 

     }else{
       $id = $_GET['id'];   
     }

     $query="SELECT id_jogador,nome_jogador,idade, altura, clube_ant,posicao.nome_posicao as posicao, equipa.nome as nome_equipa, foto_jogador
             FROM jogador
             JOIN posicao ON jogador.id_posicao = posicao.id_posicao
             JOIN equipa ON jogador.id_equipa = equipa.id_equipa 
             WHERE id_jogador=".$id;

     $result = pg_query($conn,$query);
     $player = pg_fetch_assoc($result);
?>

     <h2 id="subtitulos2"><?php echo $player['nome_jogador']; ?></h2>


     <div class="pagina_jogador">
          <div class="imagem_jogador" style="background-image: url('<?php echo $player['foto_jogador']; ?>');"></div>

          <div class="informacao_jogador">
               <?php
                    echo "<div class=\"button_back\">
                         <a href=\"plantel.php?id=".$id."\"><button><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i> Voltar</button></a>
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
               echo "<div class=\"button_back\">
                     <a href=\"formEditaJogador.php?id=".$id."\"><button>Editar info</button></a>
                    </div>";
               ?>
          </div>

     </div>


</body>

</html>
