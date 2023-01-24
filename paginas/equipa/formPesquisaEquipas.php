<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php  include "../../baseDados/connect.php";?>

<html>
        <form class = "formPesquisaJogadores" action="equipas.php" method="post">
            <input type="text" id="nomeEquipa" name="nomeEquipa" placeholder ="Nome da Equipa">
            &emsp;
            <!--  <select name="localidade" id="localidade">
                <option value=""> Localidade</option>
                <option value="Porto"> Porto</option>
                <option value="Lisboa"> Lisboa</option>
                <option value="Braga"> Braga</option>
            </select>-->
            <select name="localidade" id="localidade">
                <option value=""> Localidade</option>
                <?php
                    $query = "SELECT nome_cidade FROM cidade ORDER BY nome_cidade";
                    $result = pg_query($conn, $query);
                    while($row = pg_fetch_assoc($result)) {
                        echo "<option value='".$row['nome_cidade']."'>".$row['nome_cidade']."</option>";
                    }
                ?>
            </select>
            &emsp;
            <input type="text" id="treinador" name="treinador" placeholder="Nome Treinador">
            &emsp;
            <select name="fundado" id="fundado">
                <option value=""> Ano de fundação</option>
                <?php
                    $query = "SELECT data_fundacao FROM equipa ORDER BY data_fundacao";
                    $result = pg_query($conn, $query);
                    while($row = pg_fetch_assoc($result)) {
                        echo "<option value='".$row['data_fundacao']."'>".$row['data_fundacao']."</option>";
                    }
                ?>
            </select>
            &emsp;
            <input type="submit" value="Search">
        </form>

        <?php include '../inc/footer.php' ?>

</html>
