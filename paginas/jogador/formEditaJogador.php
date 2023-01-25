
<?php 
     include '../inc/header.php'; 
     include "../../acoes/geral/checkPermissions.php"; 
     include "../../baseDados/connect.php";

     if($permission > 4){
          header("location: ../geral/naoTemPermissao.php");
          exit();
     }

     $id = $_GET['id'];

     $query="SELECT id_jogador,nome_jogador,idade, altura,foto_jogador,posicao.id_posicao as id_posicao,equipa.id_equipa as id_equipa, clube_ant,posicao.nome_posicao as posicao, equipa.nome as nome_equipa
     FROM jogador
     JOIN posicao ON jogador.id_posicao = posicao.id_posicao
     JOIN equipa ON jogador.id_equipa = equipa.id_equipa 
     WHERE id_jogador=".$id;

     $result = pg_query($conn,$query);
     $player = pg_fetch_assoc($result);
?>

     <h2 id="subtitulos2"><?php echo $player['nome_jogador']; ?></h2>


     <div class="pagina_jogador">


          <div class="imagem_jogador" style="background-image: url('<?php echo "../" . $player['foto_jogador']; ?>');"></div>

          <div class="informacao_jogador">
                              
          <form action="../../acoes/jogador/actionUpdateInfoJogador.php" method="post" >
               <table>
                    <tr>
                         <td><b>Nome:</b></td>
                         <td><input type="text" name="nome_jogador" value="<?php echo $player['nome_jogador']; ?>"></td>
                    </tr>
                    <tr>
                         <td><b>Idade:</b></td>
                         <td><input type="text" name="idade" value="<?php echo $player['idade']; ?>"></td>
                    </tr>
                    <tr>
                         <td><b>Altura (cm):</b></td>
                         <td><input type="text" name="altura" value="<?php echo $player['altura']; ?>"></td>
                    </tr>
                    <tr>
                         <td><b>Clubes anteriores:</b></td>
                         <td><input type="text" name="clube_ant" value="<?php echo $player['clube_ant']; ?>"></td>
                    </tr>
                    <tr>
                         <td><b>Posicao:</b></td>
                         <td>
                              <select name="id_posicao">
                                   <option value="1">Avançado</option>
                                   <option value="2">Defesa</option>
                                   <option value="3">Médio</option>
                                   <option value="4">Guarda-Redes</option>
                              </select>
                         </td>
                    </tr>
                    
                    
               </table>
                    <input type="hidden" name="id_jogador" value="<?php echo $player['id_jogador']; ?>">
                    <input type="hidden" name="id_equipa"  value="<?php echo $player['id_equipa']; ?>">
                    <button class="edita_button" type="submit">Guardar Alterações</button>

          </form>
          </div>

     </div>


</body>

<?php include '../inc/footer.php' ?>

</html>
