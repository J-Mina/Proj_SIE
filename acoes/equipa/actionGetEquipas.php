<?php

include "../../baseDados/connect.php";



/*  $query = "SELECT * FROM equipa";
$result = pg_query($conn, $query);*/

$query = "SELECT * FROM equipa,cidade,treinador where equipa.id_treinador=treinador.id_treinador and equipa.id_cidade=cidade.id_cidade and equipa.estado=0";

if(!empty($_POST['nomeEquipa']) || !empty($_POST['fundado']) || !empty($_POST['localidade']) ) {
    $query .= " AND ";
    $conditions = array();

    if(!empty($_POST['nomeEquipa'])) {
        $nomeEquipa = $_POST['nomeEquipa'];
        $conditions[] = "nome = '$nomeEquipa'";
    }
    if(!empty($_POST['fundado'])) {
        $fundado = $_POST['fundado'];
        $conditions[] = "data_fundacao = '$fundado'";
    }
    if(!empty($_POST['localidade'])) {
        $localidade = $_POST['localidade'];
        $conditions[] = "cidade.nome_cidade = '$localidade'";
    }
    if(!empty($_POST['treinador'])) {
        $treinador = $_POST['treinador'];
        $conditions[] = "nome_treinador = '$treinador'";
    }
    
    $query .= implode(" AND ", $conditions);
}

$result = pg_query($conn, $query);






echo "<div class = \"display_line\">";

$numRows = pg_numrows($result);
$i=0;
while($i< $numRows){

    if($i%4 == 0 && $i !=0){
        echo "</div>";
        echo "<br>";
        echo "<div class = \"display_line\">";
    }


    $row = pg_fetch_row($result, $i);

    $id_equipa = $row[0];
    $nome = $row[1];
    $img = $row[5];

    echo "<div class=\"element\">"; 
    echo    "<div class=\"image\">";
    echo    "<img src= ../".$img.">";
    echo    "<p>".$nome."</p>";
    echo    "</div>";
    echo    "<div class=\"button_over\">";
    echo    "<a href = \"equipa.php?id=".$id_equipa."\">Ver Equipa</a>";
    echo    "</div>";
    echo "</div>";

    $i++;
}

echo "</div>";

pg_close($conn);
?> 

