<?php

include "../../baseDados/connect.php";

$query = "SELECT * FROM jogador,posicao,equipa where jogador.id_posicao = posicao.id_posicao and jogador.id_equipa=equipa.id_equipa";
$result = pg_query($conn, $query);
pg_close($conn);


echo "<table class=\"classificacao_full\" border = 0 >";
echo      "<tr>";
echo          "<th>Nome</th><th>Idade</th><th>Altura</th><th>Posição</th><th>Equipa</th><th>Editar</th>";
echo      "</tr>";

$numRows = pg_numrows($result);
$i=0;
while($i< $numRows){


    $row = pg_fetch_row($result, $i);

    $id = $row[0];
    $nome = $row[1];
    $idade = $row[2];
    $altura = $row[3];
    $posicao = $row[10];
    $equipa = $row[12];


    echo "<tr>";
    echo    "<td>".$nome."</td>
             <td>".$idade."</td>
             <td>".$altura."</td>
             <td>".$posicao."</td>
             <td>".$equipa."</td>
             <td><a href=\"../jogador/formEditaJogador.php?id=".$id."\"> Editar </a></td>";
    echo "</tr>";

    $i++;
}

echo "</table>";


?> 

