<?php

$conn = pg_connect("host=db.fe.up.pt dbname=sie2250 user=sie2250 password=NIQHxBGU");
$query = "set schema 'sundayleague'";	
pg_exec($conn, $query);

if (!$conn) {
    die("Error connecting to the database");
}

$query = "SELECT * FROM jogador,posicao,equipa where jogador.id_posicao = posicao.id_posicao and jogador.id_equipa=equipa.id_equipa";
$result = pg_query($conn, $query);



echo "<table class=\"classificacao\" border = 0 >";
echo      "<tr>";
echo          "<th>Nome</th><th>Idade</th><th>Altura</th><th>Posição</th><th>Equipa</th>";
echo      "</tr>";

$numRows = pg_numrows($result);
$i=0;
while($i< $numRows){


    $row = pg_fetch_row($result, $i);

    $nome = $row[1];
    $idade = $row[2];
    $altura = $row[3];
    $posicao = $row[10];
    $equipa = $row[12];

    echo "<tr>";
    echo    "<th>".$nome."</th><th>".$idade."</th><th>".$altura."</th><th>".$posicao."</th><th>".$equipa."</th>";
    echo "</tr>";

    $i++;
}

echo "</table>";

pg_close($conn);
?> 

