<?php include '../inc/header.php' ?>

        

        <?php
        if(isset($_GET['pop'])){
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Conta Criada com Sucesso! Procede ao Login para te poderes candidatar."); } 
                    </script>';
        }

        if(isset($_GET['pop_candidatura'])){
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Candidatura submetida com Sucesso! Aguarde Aprovação."); } 
                    </script>';
        }

        if(isset($_GET['pop_permissao'])){
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Não tem permissoes para aceder a esta página."); } 
                    </script>';
        }

        if(isset($_GET['invalid'])){
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Login Inválido."); } 
                    </script>';
        }

        ?>

        <div class="conteudo">

            <h2 id="subtitulos"> Quem somos? </h2>

            <div class="primeiroparagrafo">
                <img src="../../imagens/bastian.jpg" alt="Drinking">
                <p> Somos a melhor liga amadora de futebol em Portugal,
                    todos os domingos juntamos amigos para a prática deste desporto. o objetivo é deixar tudo em campo e no fim fazer o habitual
                    convívio antes do almoço com a família.
                </p>
                <h2 id="subtitulos1"> Acompanha-nos !</h2>
                <p> segue a <a href="classificacao.php">classificação</a> e os jogos da tua equipa favorita para estares no sítio certo à hora certa.
                    No fim do jogo estás mais do que convidado para te juntares ao convívio.
                    podes também ver as  <a href="../equipa/equipas.php">equipas</a> que fazem parte do campeonato e procurar os teus amigos.
                </p>

                <h2 id="subtitulos"> Credenciais de acesso !</h2>
                <p>Para aceder sendo o administrador: username= admin ; pass= admin;</p>
                <p>Para aceder sendo o equipa: username= pedechumbo ; pass= pedechumbo;</p>
                <p>Para aceder como jogador: username= costa ; pass= costa; </p>
                <p>Para poder candidatar uma equipa tem que se registar sem estar autenticado;</p>
                <p>Assim que o administrador aprovar a candidatura o user de quem se candidatou passa a ser de equipa
                     (são geradas contas dos jogadores com pass e username igual ao nome que depois devem ser alteradas por cada jogador.</p>

                <h2 id="subtitulos1"> Junta-te a nós !</h2>
                <p id="texto_junta"> entra em contacto com o presidente <a href="contactos.php">aqui</a> ou através das nossas redes sociais
                    para te poderes inscrever!
                </p>


                <br>
            </div>
        </div>

    </body>

    <?php include '../inc/footer.php' ?>
    
    

</html>


