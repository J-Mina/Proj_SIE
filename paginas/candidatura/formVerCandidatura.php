<?php include '../inc/header.php';
     include "../../acoes/geral/checkPermissions.php"; 
     include "../../baseDados/connect.php";

     if($permission > 1){
          header("location: ../geral/naoTemPermissao.php");
          exit();
     }
      
    $id = $_GET['id'];
     

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
                         <a href=\"listaCandidatura.php?id=".$id."\"><button><i class=\"fa fa-arrow-circle-left\" aria-hidden=\"true\"></i> Voltar</button></a>
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
                         <a href=\"../equipa/plantel.php?id=".$id."&cand=1\"><button> Ver Plantel</button></a>
                    </div>"
               ?>
          </div>

    </div>

    <div class="aprovar_recusar">
        <?php echo "<a href=\"../../acoes/candidatura/actionAceitarCandidatura.php?id=".$id."\"><button class =\"add\"> Aprovar <i class=\"fa fa-check\" aria-hidden=\"true\"></i></button> </a>" ?>
        <?php echo "<a href=\"../../acoes/candidatura/actionRecusarCandidatura.php?id=".$id."\"><button class =\"remove\"> Recusar <i class=\"fa fa-times\" aria-hidden=\"true\"></i></button> </a>" ?>
    </div>


</body>

<?php include '../inc/footer.php' ?>

</html>
