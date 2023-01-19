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
            <div><a href="downloads.php"><button><i class="fa fa-download" aria-hidden="true"></i> Download</button></a></div>
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


     <div class="pagina_classificacao">
          <div class="classificacao">
               <h2 id="subtitulos">classificação geral do campeonato 2022/2023</h2>
               <table class="classificacao">
                    <tr>
                         <th>equipa</th>
                         <th>pontos</th>
                         <th>jogos</th>
                    </tr>

                    <tr>
                         <td>Chaminés às Costas FC</td>
                         <td>15</td>
                         <td>5</td>
                    </tr>

                    <tr>
                         <td>AD Rebenta Esteios</td>
                         <td>13</td>
                         <td>5</td>
                    </tr>

                    <tr>
                         <td>Estrelas cadentes FC</td>
                         <td>11</td>
                         <td>5</td>
                    </tr>
                    <tr>
                         <td>Panteras Negras FC</td>
                         <td>9</td>
                         <td>5</td>
                    </tr>
               </table>
          </div>


          <div class="calendario">
               <h2 id="subtitulos">Próximos Jogos</h2>

               <div class="prox_jogos">

                    <div class="jogo">
                         <img src="../imagens/chamines.png" alt="chamines_as_costas">
                         <img src="../imagens/rebenta.png" alt="rebenta_esteios">
                         <p> 12 OUT </p>
                         <p>Chaminés As costas vs rebenta esteios
                         <p>
                    </div>

                    <div class="jogo">
                         <img src="../imagens/estrelas.png" alt="estrelas_cadentes">
                         <img src="../imagens/panteras.png" alt="panteras_negras">
                         <p> 12 OUT </p>
                         <p>Estrelas Cadentes vs Panteras Negras
                         <p>
                    </div>

               </div>
          </div>
     </div>




</body>

</html>
