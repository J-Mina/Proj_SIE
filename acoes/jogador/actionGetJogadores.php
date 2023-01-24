<?php
include "../../acoes/geral/checkPermissions.php";
include "../../baseDados/connect.php";


$query = "SELECT * FROM jogador,posicao,equipa where jogador.id_posicao = posicao.id_posicao and jogador.id_equipa=equipa.id_equipa and equipa.estado=0";

if(!empty($_POST['name']) || !empty($_POST['equipa']) || !empty($_POST['idade']) || !empty($_POST['pesquisarPor'])) {
    $query .= " AND ";
    $conditions = array();

    if(!empty($_POST['name'])) {
        $name = $_POST['name'];
        $conditions[] = "jogador.nome_jogador = '$name'";
    }
    if(!empty($_POST['equipa'])) {
        $equipa = $_POST['equipa'];
        $conditions[] = "equipa.nome = '$equipa'";
    }
    if(!empty($_POST['idade'])) {
        $idade = $_POST['idade'];
        $conditions[] = "jogador.idade = '$idade'";
    }
    if(!empty($_POST['pesquisaPor'])) {
        $posicao = $_POST['pesquisaPor'];
        $conditions[] = "posicao.nome_posicao = '$posicao'";
    }
    $query .= implode(" AND ", $conditions);
}


$result = pg_query($conn, $query);
pg_close($conn);


echo "<table class=\"classificacao_full\" border = 0 >";
echo      "<tr>";
echo          "<th>Nome</th><th>Idade</th><th>Altura</th><th>Posição</th><th>Equipa</th>";
            if($permission == 1){
echo             "<th>Editar</th>";}
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
             <td>".$equipa."</td>";

             
             if($permission == 1){
    echo    "<td><a href=\"../jogador/formEditaJogador.php?id=".$id."\"> Editar </a></td>";

             }
            
    echo "</tr>";

    $i++;
}

echo "</table>";


?> 

