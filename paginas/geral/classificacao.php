<?php include '../inc/header.php';
include "../../acoes/geral/checkPermissions.php";
include "../../baseDados/connect.php";

$query = "SELECT nome as nome_equipa, pontos
          FROM equipa WHERE equipa.estado=0
          ORDER BY pontos DESC ";

$result = pg_query($conn, $query);

$numRows = pg_num_rows($result);
$i = 0;
?>

<div class="pagina_classificacao">
     <div class="classificacao_full">
          <h2 id="subtitulos">classificação geral do campeonato 2022/2023</h2>
          <table class="tab_class">
               <tr>
                    <th>Nome da Equipa</th>
                    <th>Pontos</th>
               </tr>
               <?php while ($row = pg_fetch_assoc($result)) : ?>
                    <tr>
                         <td><?php echo $row['nome_equipa']; ?></td>
                         <td><?php echo $row['pontos']; ?></td>
                    </tr>
               <?php endwhile; ?>
          </table>
     </div>
</div>

<?php
if ($permission == 1) {
     echo "<div class=\"join_cont\">";
     echo "<p><a href=\"../equipa/formClassificacao.php\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> Editar </a></p>";
     echo "</div>";
} ?>

</body>

<?php include '../inc/footer.php' ?>

</html>