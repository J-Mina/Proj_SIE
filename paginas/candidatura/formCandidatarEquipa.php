<?php include '../inc/header.php' ?>

        <?php
        if(isset($_GET['pop'])){
            echo '<script type="text/javascript">
                    window.onload = function () { alert(" Todos os campos devem ser preenchidos!"); } 
                    </script>';
        }

        include '../../acoes/geral/checkPermissions.php';

        if($permission > 4){
          header("location: ../geral/naoTemPermissao.php");
          exit();
        }

        ?>


     <h2 id="subtitulos2">AGORA QUE JÁ ÉS UM DE NóS DIZ nos A INFORMAçÃO SOBRE A TUA EQUIPA</h2>
               
     <div class="pagina_candidatura">

        <form class = "formCandidatura" action="../../acoes/candidatura/actionCandidatura.php" method="post">
            
        <div class="candidaturaMain">

            <div>
                <table>
                    <tr>
                         <td> <label for="nome_equipa">Nome da Equipa:</label> </td>
                         <td> <input type="text" id="nome_equipa" name="nome_equipa"> </td>
                    </tr>
                    <tr>
                         <td> <label for="nome_cidade">Cidade:</label> </td>
                         <td> <input type="text" id="nome_cidade" name="nome_cidade"> </td>
                    </tr>
                    <tr>
                         <td> <label for="ano_fundacao">Ano de fundação:</label> </td>
                         <td> <input role="text" type="text" id="ano_fundacao" name="ano_fundacao"> </td>
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
            </div>

            <div>
                &emsp;&emsp;&emsp;
            </div>

            <div>
                <table id="playersTable">
                         <tr>
                              <td> <label for="Jogador_1">Jogador 1: </label> </td>
                              <td> <input type="text" id="jogador_1" name="jogador_1"> </td>
                              <td>
                                   <select id="posicao_jogador_1" name="posicao_jogador_1">
                                        <option value="">Selecione a Posicao</option>
                                        <option value="1">Avançado</option>
                                        <option value="2">Defesa</option>
                                        <option value="3">Médio</option>
                                        <option value="4">Guarda-Redes</option>
                                   </select>
                              </td>
                         </tr>
                         <tr>
                              <td> <label for="jogador_2">Jogador 2: </label> </td>
                              <td> <input type="text" id="jogador_2" name="jogador_2"> </td>
                              <td>
                                   <select id="posicao_jogador_2" name="posicao_jogador_2">
                                        <option value="">Selecione a Posicao</option>
                                        <option value="1">Avançado</option>
                                        <option value="2">Defesa</option>
                                        <option value="3">Médio</option>
                                        <option value="4">Guarda-Redes</option>
                                   </select>
                              </td>
                              
                         </tr>
                         <tr>
                              <td> <label for="jogador_3">Jogador 3: </label> </td>
                              <td> <input type="text" id="jogador_3" name="jogador_3"> </td>
                              <td>
                                   <select id="posicao_jogador_3" name="posicao_jogador_3">
                                        <option value="">Selecione a Posicao</option>
                                        <option value="1">Avançado</option>
                                        <option value="2">Defesa</option>
                                        <option value="3">Médio</option>
                                        <option value="4">Guarda-Redes</option>
                                   </select>
                              </td>
                         </tr>
                         <tr>
                              <td> <label for="jogador_4">Jogador 4: </label> </td>
                              <td> <input type="text" id="jogador_4" name="jogador_4"> </td>
                              <td>
                                   <select id="posicao_jogador_4" name="posicao_jogador_4">
                                        <option value="">Selecione a Posicao</option>
                                        <option value="1">Avançado</option>
                                        <option value="2">Defesa</option>
                                        <option value="3">Médio</option>
                                        <option value="4">Guarda-Redes</option>
                                   </select>
                              </td>
                         </tr>
                         <tr>
                              <td> <label for="jogador_5">Jogador 5: </label> </td>
                              <td> <input type="text" id="jogador_5" name="jogador_5"> </td>
                              <td>
                                   <select id="posicao_jogador_5" name="posicao_jogador_5">
                                        <option value="">Selecione a Posicao</option>
                                        <option value="1">Avançado</option>
                                        <option value="2">Defesa</option>
                                        <option value="3">Médio</option>
                                        <option value="4">Guarda-Redes</option>
                                   </select>
                              </td>
                         </tr>
                         <tr>
                              <td> <label for="jogador_6">Jogador 6: </label> </td>
                              <td> <input type="text" id="jogador_6" name="jogador_6"> </td>
                              <td>
                                   <select id="posicao_jogador_6" name="posicao_jogador_6">
                                        <option value="">Selecione a Posicao</option>
                                        <option value="1">Avançado</option>
                                        <option value="2">Defesa</option>
                                        <option value="3">Médio</option>
                                        <option value="4">Guarda-Redes</option>
                                   </select>
                              </td>
                         </tr>
                         <tr>
                              <td> <label for="jogador_7">Jogador 7: </label> </td>
                              <td> <input type="text" id="jogador_7" name="jogador_7"> </td>
                              <td>
                                   <select id="posicao_jogador_7" name="posicao_jogador_7">
                                        <option value="">Selecione a Posicao</option>
                                        <option value="1">Avançado</option>
                                        <option value="2">Defesa</option>
                                        <option value="3">Médio</option>
                                        <option value="4">Guarda-Redes</option>
                                   </select>
                              </td>
                         </tr>
               </table>

            </div>
               
        </div>
        <br>
        <br>
        <input type="submit" value="Submeter Candidatura"/>
    
        </form>

     </div>
</body>

<?php include "../inc/footer.php"?>



</html>
