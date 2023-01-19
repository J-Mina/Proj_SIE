<!DOCTYPE html>
<html>

<head>
     <title>jogador</title>
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

     <h2 id="subtitulos2">Iker Casillas</h2>


     <div class="pagina_jogador">


          <div class="imagem_jogador"></div>

          <div class="informacao_jogador">
               <div class="button_back">
                    <a href="plantel.php"><button><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Voltar</button></a>
               </div>

               <table class="informacao_jogador">
                    <tr>
                         <td><b>Nome completo:</b></td>
                         <td style="color:#737373">Iker Casillas Fernández</td>
                    </tr>
                    <tr>
                         <td><b>Data de nascimento:</b></td>
                         <td style="color:#737373">20 Maio 1981</td>
                    </tr>
                    <tr>
                         <td><b>Posição:</b></td>
                         <td style="color:#737373">Guarda-Redes</td>
                    </tr>
                    <tr>
                         <td><b>Clubes anteriores:</b></td>
                         <td style="color:#737373">Real madrid, Porto</td>
                    </tr>

               </table>



          </div>

     </div>


</body>

</html>
