<!DOCTYPE html>
<html>

<head>
     <title>Classificação</title>
     <link rel="stylesheet" type="text/css" href="../../css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<meta charset="utf-8">

<body>

     <div class="top_bar">
          <div class="titulo">
               <h1><a href="../geral/index.php">Sunday League </a></h1>
          </div>
          <div> <?php include '../../paginas/geral/formLogin.php' ?></div>

     </div>

     <div class="top_nav">
          <div class="dropdown"> 
                <button class="dropdown-button"><i class="fa fa-futbol-o" aria-hidden="true"></i> Liga</button> 
                <div class="dropdown-list"> 
                    <a href="../geral/index.php"><i class="fa fa-futbol-o" aria-hidden="true"></i> Home</a> 
                    <a href="../equipa/equipas.php"><i class="fa fa-search" aria-hidden="true"></i> Equipas</a> 
                    <a href="../jogador/jogadores.php"><i class="fa fa-search" aria-hidden="true"></i> Jogadores</a> 
                </div> 
            </div> 
            <div><a href="../geral/classificacao.php"><button><i class="fa fa-trophy" aria-hidden="true"></i> Classificação </button></a></div>

            <?php include "buttonChoice.php"?>


            <div><a href="../geral/downloads.php"><button><i class="fa fa-download" aria-hidden="true"></i> Download</button></a></div>
            <div><a href="../geral/contactos.php"><button><i class="fa fa-phone" aria-hidden="true"></i> Contactos</button></a></div>
     </div>

     <!--  <nav role="bottom_bar">
          <div class="bottom_bar_text">Sunday League</div>
          <ul>
               <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
               <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
     </nav>-->