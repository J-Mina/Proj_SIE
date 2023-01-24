<?php include '../inc/header.php';
      include "../../baseDados/connect.php";

          $query="SELECT nome as nome_equipa, pontos
          FROM equipa WHERE equipa.estado=0
          ORDER BY pontos DESC ";

          $result = pg_query($conn,$query);

          $numRows = pg_numrows($result);
          $i=0;

 ?>



     <div class="pagina_classificacao">
          <div class="classificacao_full">
               <h2 id="subtitulos">classificação geral do campeonato 2022/2023</h2>
               <table class="tab_class">
                    <tr>
                         <th>Nome da Equipa</th>
                         <th>Pontos</th>
                    </tr>
                    <?php while($row = pg_fetch_assoc($result)): ?>
                    <tr>
                         <td><?php echo $row['nome_equipa']; ?></td>
                         <td><?php echo $row['pontos']; ?></td>
                    </tr>
                    <?php endwhile; ?>
               </table>
          </div>


          <!-- <div class="calendario">
               <h2 id="subtitulos">Próximos Jogos</h2>

               <div class="prox_jogos">

                    <div class="jogo">
                         <img src="../../imagens/chamines.png" alt="chamines_as_costas">
                         <img src="../../imagens/rebenta.png" alt="rebenta_esteios">
                         <p> 12 OUT </p>
                         <p>Chaminés As costas vs rebenta esteios
                         <p>
                    </div>

                    <div class="jogo">
                         <img src="../../imagens/estrelas.png" alt="estrelas_cadentes">
                         <img src="../../imagens/panteras.png" alt="panteras_negras">
                         <p> 12 OUT </p>
                         <p>Estrelas Cadentes vs Panteras Negras
                         <p>
                    </div>

               </div>
          </div> -->
     </div>



</body>

<?php include '../inc/footer.php' ?>

</html>
