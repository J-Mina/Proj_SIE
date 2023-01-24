<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<html>
        <form class = "formPesquisaJogadores" action="jogadores.php" method="post">
            <input type="text" id="name" name="name" placeholder ="  Nome">
            &emsp;
            <select name="pesquisaPor" id="pesquisaPor">
                <option value="">Posição</option>
                <option value="Defesa"> Defesa</option>
                <option value="Médio"> Médio</option>
                <option value="Avançado"> Avançado</option>
            </select>
            &emsp;
            <input type="text" id="equipa" name="equipa" placeholder="  Equipa">
            &emsp;
            <input type="text" id="idade" name="idade" placeholder="  Idade">
            &emsp;
            <input type="submit" value="Search">
        </form>

</html>
