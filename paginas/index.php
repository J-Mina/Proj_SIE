<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <meta charset="utf-8">

    <body>
        <div class="top_bar">
            <div class="titulo"><h1>Sunday League </h1></div>
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

            <!--<div class="zoom"><p> resolucao: 1920*1080, zoom 125%</p></div>-->
            
            <ul>
                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </nav>


        <div class="conteudo">

            <h2 id="subtitulos"> Quem somos? </h2>

            <div class="primeiroparagrafo">
                <img src="../imagens/bastian.jpg" alt="Drinking">
                <p> Somos a melhor liga amadora de futebol em Portugal,
                    todos os domingos juntamos amigos para a prática deste desporto. o objetivo é deixar tudo em campo e no fim fazer o habitual
                    convívio antes do almoço com a família.
                </p>
                <h2 id="subtitulos1"> Acompanha-nos !</h2>
                <p> segue a <a href="classificacao.php">classificação</a> e os jogos da tua equipa favorita para estares no sítio certo à hora certa.
                    No fim do jogo estás mais do que convidado para te juntares ao convívio.
                    podes também ver as  <a href="equipas.php">equipas</a> que fazem parte do campeonato e procurar os teus amigos.
                </p>
                <h2 id="subtitulos1"> Junta-te a nós !</h2>
                <p id="texto_junta"> entra em contacto com o presidente <a href="contactos.php">aqui</a> ou através das nossas redes sociais
                    para te poderes inscrever!
                </p>
            </div>
        </div>
        
    </body>
</html>