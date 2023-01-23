<?php

include "../baseDados/connect.php";

$query = "SELECT * FROM equipa";
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
    echo    "<img src=".$img.">";
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

