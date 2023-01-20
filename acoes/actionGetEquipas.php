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

    $nome = $row[1];
    $img = $row[7];

    echo "<div class=\"element\">"; 
    echo    "<div class=\"image\">";
    echo    "<img src=".$img.".png>";
    echo    "<p>".$nome."</p>";
    echo    "</div>";
    echo    "<div class=\"button_over\">";
    echo    "<a href = \"plantel.php\">Ver Plantel</a>";
    echo    "</div>";
    echo "</div>";

    $i++;
}

echo "</div>";

pg_close($conn);
?> 

