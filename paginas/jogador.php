<?php include 'inc/header.php' ?>


     <h2 id="subtitulos2">Iker Casillas</h2>


     <div class="pagina_jogador">


          <div class="imagem_jogador"></div>

          <div class="informacao_jogador">
               <div class="button_back">
                    <a href="plantel.php"><button><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Voltar</button></a>
               </div>

               
               <table>
                    <tr>
                         <td><b>Nome completo:</b></td>
                         <td style="color:#737373"><?php echo $player['nome_jogador']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Data de nascimento:</b></td>
                         <td style="color:#737373"><?php echo $player['idade']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Posição:</b></td>
                         <td style="color:#737373"><?php echo $player['altura']; ?></td>
                    </tr>
                    <tr>
                         <td><b>Clubes anteriores:</b></td>
                         <td style="color:#737373"><?php echo $player['clube_ant']; ?></td>
                    </tr>
               </table>
          </div>

     </div>


</body>

</html>
