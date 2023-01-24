<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<html>
        <form class = "formPesquisaJogadores" action="equipas.php" method="post">
            <input type="text" id="nomeEquipa" name="nomeEquipa" placeholder ="Nome da Equipa">
            &emsp;
            <select name="pesquisaPor" id="pesquisaPor">
                <option value=""> Localidade</option>
                <option value="porto"> Porto</option>
                <option value="lisboa"> Lisboa</option>
                <option value="braga"> Braga</option>
            </select>
            &emsp;
            <input type="text" id="treinador" name="treinador" placeholder="Nome Treinador">
            &emsp;
            <select name="fundado" id="fundado">
                <option value=""> Fundado em ...</option>
                <option value="1973"> 1973</option>
                <option value="1982"> 1982</option>
                <option value="1945"> 1945</option>
            </select>
            &emsp;
            <input type="submit" value="Search">
        </form>

</html>
