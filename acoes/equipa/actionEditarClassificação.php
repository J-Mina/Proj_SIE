
<?php

    include "../../baseDados/connect.php";

    $query="SELECT nome as nome_equipa, pontos FROM equipa WHERE equipa.estado=0 ORDER BY pontos DESC ";

    $result = pg_query($conn,$query);

    $numRows = pg_numrows($result);
    $i=0;

    while($i < $numRows){

        $var_eq='nomeEq'.$i;
        $var_pnt='newPoints'.$i;

        echo $nome_equipa = $_POST[$var_eq];
        echo $pontos = $_POST[$var_pnt];

        $query="UPDATE equipa SET pontos=".$pontos."WHERE nome='$nome_equipa'";
        pg_query($conn,$query);

        $i++;
    }

    header("location: ../../paginas/geral/classificacao.php");
    exit(); 


?>