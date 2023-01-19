<!DOCTYPE html>
<html>

<head>
     <title>Equipas</title>
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



     <h2 id="subtitulos2">As nossas equipas</h2>

     <div class="conteudo"> 
          
          <?php include 'formPesquisaEquipas.php' ?>

          <!-- <br>

          <div class = "display_line">
               <div class = "element">

                    <div class="image">
                         <img src="../imagens/chamines.png" alt="chamines_as_costas">
                         <p>chamines as costas FC</p>
                    </div>
                    
                    <div class="button_over">
                         <a href='plantel.php'>Ver Plantel</a>
                    </div>
               </div>

               <div class = "element">
                    <div class="image">
                    <img src="../imagens/rebenta.png" alt="rebenta_esteios">
                    <p>AD Rebenta Esteios</p>
                    </div>

                    <div class="button_over">
                         <a href='plantel.php'>Ver Plantel</a>
                    </div>
               </div>

               <div class = "element">
                    <div class="image">
                    <img src="../imagens/estrelas.png" alt="estrelas_cadentes">
                    <p>Estrelas cadentes FC</p>
                    </div>

                    <div class="button_over">
                         <a href='plantel.php'>Ver Plantel</a>
                    </div>
               </div>

               <div class = "element">
                    <div class="image">
                    <img src="../imagens/panteras.png" alt="panteras_negras">
                    <p>Panteras Negras FC</p>
                    </div>

                    <div class="button_over">
                         <a href='plantel.php'>Ver Plantel</a>
                    </div>
               </div>

          </div> -->

          <br>

          <?php include '../acoes/actionGetEquipas.php' ?>

     </div>
     <!-- <div class="equipas">

          <div class="equipa1">
               <div class="img_nome">
                    <img src="../imagens/chamines.png" alt="chamines_as_costas">
                    <p> chamines as costas FC</p>
               </div>

               <div class="botao">
                    <a href='plantel.php'><button class="aparece_botao">Ver Plantel</button></a>
               </div>
          </div>

          <div class="equipa1">
               <div class="img_nome">
                    <img src="../imagens/rebenta.png" alt="rebenta_esteios">
                    <p>AD Rebenta Esteios</p>
               </div>

               <div class="botao">
                    <button class="aparece_botao">Ver Plantel</button>
               </div>

          </div>

          <div class="equipa1">
               <div class="img_nome">
                    <img src="../imagens/estrelas.png" alt="estrelas_cadentes">
                    <p>Estrelas cadentes FC</p>
               </div>

               <div class="botao">
                    <button class="aparece_botao">Ver Plantel</button>
               </div>

          </div>

          <div class="equipa1">
               <div class="img_nome">
                    <img src="../imagens/panteras.png" alt="panteras_negras">
                    <p>Panteras Negras FC</p>
               </div>

               <div class="botao">
                    <button class="aparece_botao">Ver Plantel</button>
               </div>

          </div>
     </div> -->
</body>