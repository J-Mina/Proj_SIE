<?php include '../inc/header.php' ?>


    <div class="conteudo">
          <h2 id="subtitulos">Pesquisa os nossos Jogadores</h2>

          <div> <?php include 'formPesquisaJogadores.php' ?></div>
          <br>
          
    </div>
    
    <div class = "pagina_classificacao"> 
        <?php include '../../acoes/jogador/actionGetJogadores.php' ?>
    </div>


     
</body>

<?php include '../inc/footer.php' ?>