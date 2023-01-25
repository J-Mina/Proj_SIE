<?php 
     include '../inc/header.php'; 
     include "../../acoes/geral/checkPermissions.php"; 
     include "../../baseDados/connect.php";

     if($permission > 2){
          header("location: ../geral/naoTemPermissao.php");
          exit();
     }

     $id = $_GET['id'];

     $query="SELECT id_equipa,nome,data_fundacao,descricao,logo_equipa,treinador.nome_treinador as nome_treinador, cidade.nome_cidade as nome_cidade
     FROM equipa
     JOIN cidade ON equipa.id_cidade = cidade.id_cidade
     JOIN treinador ON equipa.id_treinador = treinador.id_treinador 
     WHERE id_equipa=".$id;

     $result = pg_query($conn,$query);
     $player = pg_fetch_assoc($result);
?>

     <h2 id="subtitulos2"><?php echo $player['nome']; ?></h2>


     <div class="pagina_jogador">


          <div class="imagem_jogador" style="background-image: url('<?php echo "../" . $player['logo_equipa']; ?>');"></div>

          <div class="informacao_jogador">
                              
          <form action="../../acoes/equipa/actionUpdateInfoEquipa.php" method="post" >
               <table>
                    <tr>
                         <td><b>Nome da equipa:</b></td>
                         <td><input type="text" name="nome" value="<?php echo $player['nome']; ?>"></td>
                    </tr>
                    <tr>
                         <td><b>Ano de fundação:</b></td>
                         <td><input type="text" name="data_fundacao" value="<?php echo $player['data_fundacao']; ?>"></td>
                    </tr>
                    <tr>
                         <td><b>Cidade:</b></td>
                         <td><input type="text" name="nome_cidade" value="<?php echo $player['nome_cidade']; ?>"></td>
                    </tr>
                    <tr>
                         <td><b>Treinador:</b></td>
                         <td><input type="text" name="nome_treinador" value="<?php echo $player['nome_treinador']; ?>"></td>
                    </tr>
                    <tr>
                         <td><b>Breve Descrição:</b></td>
                         <td><input type="text" name="descricao" value="<?php echo $player['descricao']; ?>"></td>
                    </tr>
                    
                    
               </table>
                    <input type="hidden" name="id_equipa"  value="<?php echo $player['id_equipa']; ?>">
                    <button class="edita_button" type="submit">Guardar Alterações</button>

          </form>
          </div>

     </div>


</body>

<?php include '../inc/footer.php' ?>

</html>
