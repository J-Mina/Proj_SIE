<?php include '../inc/header.php';
      include "../../baseDados/connect.php";

          $query="SELECT nome as nome_equipa, pontos
          FROM equipa WHERE equipa.estado=0
          ORDER BY pontos DESC ";

          $result = pg_query($conn,$query);

          $numRows = pg_num_rows($result);
          $i=0;
 ?>

        <div class="pagina_classificacao">
            <div class="classificacao_full">
                <h2 id="subtitulos">classificação geral do campeonato 2022/2023</h2>
                <form action="../../acoes/equipa/actionEditarClassificação.php"  method="post">
                    <table class="tab_class">
                        
                        <tr>
                                <th>Nome da Equipa</th>
                                <th>Pontos</th>
                        </tr>
                        <?php while($row = pg_fetch_assoc($result)): ?>
                        <tr>
                                <td><?php echo $row['nome_equipa']; ?></td>

                                <?php 
                                    echo "<input type=\"hidden\" name=\"nomeEq".$i."\" value=\"".$row['nome_equipa']."\">";
                                ?>

                                <?php 
                                    echo "<td><input type=\"text\" name=\"newPoints".$i."\" value=\"".$row['pontos']."\"></td>";
                                    $i++;
                                ?>
                                
                        </tr>
                        <?php endwhile; ?>
            
                    </table>
                    <br>
                    <button class="edita_button" type="submit">Guardar Alterações</button>
                </form>
            </div>
        </div>


<?php include '../inc/footer.php' ?>