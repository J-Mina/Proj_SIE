<?php include 'inc/header.php'
/** NOT USED*/ ?>


     
     <h2 id="subtitulos2">AGORA QUE JÁ ÉS UM DE NóS DIZ nos A INFORMAçÃO SOBRE A TUA EQUIPA</h2>
     <div class="pagina_candidatura">

          <div class="jogadores_candidatura">
          <form class = "formCandidatura" action="../../acoes/candidatura/actionCandidatura.php" method="post">
               
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

               <table id="playersTable">
                         
                         <tr>
                              <td> <label for="Jogador_1">Jogador: </label> </td>
                              <td> <input type="text" id="Jogador_1" name="Jogador_1"> </td>
                         </tr>
                         <tr>
                              <td> <label for="jogador_2">Jogador: </label> </td>
                              <td> <input type="text" id="jogador_2" name="jogador_2"> </td>
                         </tr>
                         <tr>
                              <td> <label for="jogador_3">Jogador: </label> </td>
                              <td> <input type="text" id="jogador_3" name="jogador_3"> </td>
                         </tr>
               </table>

               <div class="button_add_remove">
                    <button id="addPlayerButton"><i class="fa fa-plus-circle" aria-hidden="true"></i></button> 
                    <button id="removePlayerButton"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
               </div>
               
      
               <input type="submit" value="Submeter Candidatura"/>

          </form>
          </div>

     </div>

     <script>

          /* Adicionar colunas para inserir Jogadores*/
          function addRow() {
               var table = document.getElementById("playersTable");
               var newRow = table.insertRow();
               var labelCell = newRow.insertCell();
               labelCell.innerHTML = '<label for="new_jogador">Jogador: </label>';
               var inputCell = newRow.insertCell();
               inputCell.innerHTML = '<input type="text" id="new_jogador" name="new_jogador">';
          }

          /* Remover colunas de Jogadores*/
          function removeRow(row) {
               var table = document.getElementById("playersTable");
               table.deleteRow(row.rowIndex);
          }

          /* Botão para remover colunas de Jogadores*/
          var removeButton = document.getElementById("removePlayerButton");
          removeButton.addEventListener("click", function() {
          removeRow(this.parentNode.parentNode);
          });

          /* Botão para adicionar colunas de Jogadores*/
          var button = document.getElementById("addPlayerButton");
          button.addEventListener("click", addRow);


          /* Enviar jogadores para a pagina actionCandidatura */
          var form = document.getElementById("formCandidatura");
          form.addEventListener("submit", function(event) {
          event.preventDefault();
          var inputs = document.querySelectorAll("#playersTable input");
          var jogadores = [];
          for (var i = 0; i < inputs.length; i++) {
               jogadores.push(inputs[i].value);
          }


          $.ajax({
               type: "POST",
               url: "../acoes/actionCandidatura.php",
               data: { insertedText: jogadores },
               success: function(data) {
                    console.log(data);
               }
          });
     });
     </script>

</body>

<?php 

     include "inc/footer.php"

?>


</html>
