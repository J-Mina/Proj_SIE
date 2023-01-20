<?php include 'inc/header.php' ?>

     
     <h2 id="subtitulos2">AGORA QUE JÁ ÉS UM DE NóS DIZ nos A INFORMAçÃO SOBRE A TUA EQUIPA</h2>
               
     <div class="pagina_candidatura">

          <div class="info_candidatura">
          <form class = "formCandidatura" action="../acoes/actionRegisto.php" method="post">
               <table>
                    <tr>
                         <td> <label for="nome_equipa">Nome da Equipa:</label> </td>
                         <td> <input type="text" id="nome_equipa" name="nome_equipa"> </td>
                    </tr>
                    <tr>
                         <td> <label for="nome_treinador">Treinador:</label> </td>
                         <td> <input type="text" id="nome_treinador" name="nome_treinador"> </td>
                    </tr>
                    <tr>
                         <td> <label for="descricao">Breve descrição:</label> </td>
                         <td> <input role="input_grande" type="text" id="descricao" name="descricao"> </td>
                    </tr>
                    <tr>
                         <td> <label for="emblema">Emblema</label> </td>
                         <td> <input type="text" id="emblema" name="emblema"> </td>
                    </tr>
               </table>
          </form>
          </div>


          <div class="jogadores_candidatura">
               <form class = "formCandidatura" action="../acoes/actionRegisto.php" method="post">
                    <table id="playersTable">
                         <tr>
                              <td> <label for="Jogador_1">Jogador 1: </label> </td>
                              <td> <input type="text" id="Jogador_1" name="Jogador_1"> </td>
                         </tr>
                         <tr>
                              <td> <label for="jogador_2">Jogador 2: </label> </td>
                              <td> <input type="text" id="jogador_2" name="jogador_2"> </td>
                         </tr>
                         <tr>
                              <td> <label for="jogador_3">Jogador 3: </label> </td>
                              <td> <input type="text" id="jogador_3" name="jogador_3"> </td>
                         </tr>
                    </table>
               
               </form> 
          
               <button id="addPlayerButton">Adicionar Jogador</button>        
          </div>
     </div>


     <script> 
          function addRow() {
               var table = document.getElementById("playersTable");
               var newRow = table.insertRow();
               var labelCell = newRow.insertCell();
               labelCell.innerHTML = '<label for="new_jogador">Jogador: </label>';
               var inputCell = newRow.insertCell();
               inputCell.innerHTML = '<input type="text" id="new_jogador" name="new_jogador">';
          }
          var button = document.getElementById("addPlayerButton");
          button.addEventListener("click", addRow);
     </script>

</body>

</html>
