<!DOCTYPE html>
<html>

<head>
     <title>Plantel</title>
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





     <h2 id="subtitulos2">Plantel equipa Chaminés às Costas</h2>



     <div class="pagina_plantel">

          <div class="button_back">
               <a href="equipas.phps"><button><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Voltar</button></a>
          </div>

          <img src="../imagens/chamines.png">



          <table class="pagina_plantel">
               <tr>
                    <th>Guarda-Redes</th>
               </tr>
               <tr>
                    <td><a href="jogador.php">Iker Casillas</a></td>
               </tr>
               <tr>
                    <td>Roberto</td>
               </tr>
          </table>



          <table class="pagina_plantel">
               <tr>
                    <th>Defesas</th>
               </tr>
               <tr>
                    <td>Sergio Ramos</td>
               </tr>
               <tr>
                    <td>Maldini</td>
               </tr>
               <tr>
                    <td>Daniel Alves</td>
               </tr>
               <tr>
                    <td>Zaidu</td>
               </tr>
          </table>

          <table class="pagina_plantel">
               <tr>
                    <th>Médios</th>
               </tr>
               <tr>
                    <td>Modric</td>
               </tr>
               <tr>
                    <td>Kroos</td>
               </tr>
               <tr>
                    <td>Iniesta</td>
               </tr>
               <tr>
                    <td>Taarabt</td>
               </tr>
          </table>



          <table class="pagina_plantel">
               <tr>
                    <th>Avançados</th>
               </tr>
               <tr>
                    <td>Cristano Ronaldo</td>
               </tr>
               <tr>
                    <td>Messi</td>
               </tr>
               <tr>
                    <td>Neymar</td>
               </tr>
               <tr>
                    <td>Paulinho</td>
               </tr>
          </table>



     </div>





</body>

</html>
