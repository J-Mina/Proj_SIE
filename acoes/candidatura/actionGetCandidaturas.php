<?php

include "../../baseDados/connect.php";

$query = "SELECT * FROM equipa,treinador where equipa.estado=3 and equipa.id_treinador=treinador.id_treinador";
$result = pg_query($conn, $query);
pg_close($conn);


echo "<table class=\"classificacao\" border = 0 >";
echo      "<tr>";
echo          "<th>Nome da Equipa</th><th>Data de Fundação</th><th>Nome do Treinador</th><th>Ver Candidatura</th>";
echo      "</tr>";

$numRows = pg_numrows($result);
$i=0;
while($i< $numRows){
    $row = pg_fetch_row($result, $i);

    $id = $row[0];
    $nome = $row[1];
    $data_fundacao = $row[2];
    $nome_treinador = $row[11];


    echo "<tr>";
    echo    "<td>".$nome."</td>
             <td>".$data_fundacao."</td>
             <td>".$nome_treinador."</td>
             <td><a href=\"../paginas/candidatura/formVerCandidatura.php?id=".$id."\"> <i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></td>";
    echo "</tr>";

    $i++;
}

echo "</table>";


?> 

