<?php include '../inc/header.php';
     include "../../acoes/geral/checkPermissions.php"; 
     include "../../baseDados/connect.php";
      

     
     if(isset($_SESSION['username']) && $permission == 2){
          $username = $_SESSION['username'];
          $result = pg_query($conn, "SELECT id_utilizador FROM utilizador WHERE username='$username'");
          $row = pg_fetch_row($result, 0);
          $id_user = $row[0];
          $result = pg_query($conn, "SELECT id_equipa FROM equipa WHERE id_user=$id_user");
          $row = pg_fetch_row($result, 0);
          $id = $row[0]; 

     }else{
       $id = $_GET['id'];
     }   
     

     $query="SELECT id_equipa,nome as nome_equipa,data_fundacao, descricao,cidade.nome_cidade as cidade,logo_equipa, treinador.nome_treinador as treinador
             FROM equipa
             JOIN cidade ON equipa.id_cidade = cidade.id_cidade
             JOIN treinador ON equipa.id_treinador = treinador.id_treinador
             WHERE id_equipa=".$id;

     $result = pg_query($conn,$query);
     $player = pg_fetch_assoc($result);
?>

     <h2 id="subtitulos2"><?php echo $player['nome_equipa'];?></h2>


     <div class="pagina_jogador">


          <div class="imagem_jogador" style="background-image: url('<?php echo "../".$player['logo_equipa']; ?>');"></div>

          <div class="informacao_jogador">
               <?php
                    echo "<div class=\"button_back\">
                         <a href=\"equipas.php?id=".$id."\"><button><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i> Voltar</button></a>
                    </div>"
               ?>
               
               
               <table>
                    <tr>
                         <td><b>Nome da equipa:</b></td>
                         <td style="color:#737373"><?php echo $player['nome_equipa']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Data de fundação:</b></td>
                         <td style="color:#737373"><?php echo $player['data_fundacao']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Cidade:</b></td>
                         <td style="color:#737373"><?php echo $player['cidade']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Treinador atual:</b></td>
                         <td style="color:#737373"><?php echo $player['treinador']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Breve descrição:</b></td>
                         <td style="color:#737373"><?php echo $player['descricao']; ?></td>
                    </tr>
               </table>

               <?php
                    echo "<div class=\"button_back\">
                         <a href=\"plantel.php?id=".$id."\"><button> Ver Plantel</button></a>
                    </div>"
               ?>
          </div>

     </div>


</body>

<?php include '../inc/footer.php' ?>

</html>
