<!DOCTYPE html>
<html>

<head>
     <title>Classificação</title>
     <link rel="stylesheet" type="text/css" href="../css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<meta charset="utf-8">

<body>

     <div class="top_bar">
          <div class="titulo">
               <h1>Sunday League </h1>
          </div>
          <div> <?php include 'formLogin.php' ?></div>

     </div>

     <div class="top_nav">
          <div class="dropdown"> 
                <button class="dropdown-button"><i class="fa fa-futbol-o" aria-hidden="true"></i> Liga</button> 
                <div class="dropdown-list"> 
                    <a href="index.php"><i class="fa fa-futbol-o" aria-hidden="true"></i> Home</a> 
                    <a href="equipas.php"><i class="fa fa-search" aria-hidden="true"></i> Equipas</a> 
                    <a href="jogadores.php"><i class="fa fa-search" aria-hidden="true"></i> Jogadores</a> 
                </div> 
            </div> 
            <div><a href="classificacao.php"><button><i class="fa fa-trophy" aria-hidden="true"></i> Classificação </button></a></div>
            <div><a href="join.php"><button><i class="fa fa-mouse-pointer" aria-hidden="true"></i> Junta-te a Nós </button></a></div>
            <div><a href="candidatarEquipa.php"><button><i class="fa fa-download" aria-hidden="true"></i> Download</button></a></div>
            <div><a href="contactos.php"><button><i class="fa fa-phone" aria-hidden="true"></i> Contactos</button></a></div>
     </div>

     <nav role="bottom_bar">
          <div class="bottom_bar_text">Sunday League</div>
          <ul>
               <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
               <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
     </nav>

     
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
