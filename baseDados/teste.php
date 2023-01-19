
<?php

    $conn = pg_connect("host=db.fe.up.pt dbname=sie2250 user=sie2250 password=NIQHxBGU");
    $query = "set schema 'sundayleague'";	
    pg_exec($conn, $query);

    if (!$conn) {
        die("Error connecting to the database");
    }

    $query = "SELECT * FROM jogador,posicao where jogador.id_posicao = posicao.id_posicao";
    $result = pg_query($conn, $query);



    echo "<table>";
    echo      "<tr>";
    echo          "<th>Nome</th><th>Idade</th><th>Altura</th><th>Posição</th>";
    echo      "</tr>";

    $numRows = pg_numrows($result);
    $i=0;
    while($i< $numRows){


        $row = pg_fetch_row($result, $i);

        $nome = $row[1];
        $idade = $row[2];
        $altura = $row[3];
        $posicao = $row[10];

        echo "<tr>";
        echo    "<th>".$nome."</th><th>".$idade."</th><th>".$altura."</th><th>".$posicao."</th>";
        echo "</tr>";

        $i++;
    }

    echo "</table>";

    pg_close($conn);
        

?> 

