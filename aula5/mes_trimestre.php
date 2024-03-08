<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            margin-left: 5%;
            margin-right: 5%;
        }
    </style>
</head>
<body>
<!-- Formulário para entrada do usuário-->
<h1>Mês</h1>
<form action="mes_trimestre.php" method="post">
    <label for="mes">Algorismo do Mês</label>
    <input type="number" id="mes" name="mes" required/>
    <button type="submit">Enviar</button>
</form>

<?php

$mes = $_POST['mes'];
//Determinação do mês e do trimestre por meio do número digitado do usuário
switch ($mes) {
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    case 3:
        echo "Março";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Maio";
        break;
    case 6:
        echo "Junho";
        break;
    case 7:
        echo "Julho";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Setembro";
        break;
    case 10:
        echo "Outubro";
        break;
    case 11:
        echo "Novembro";
        break;
    case 12:
        echo "Dezembro";
        break;
    default:
        echo "Valor do mês invalido";
}
switch ($mes) {
    case 1:
    case 2:
    case 3:
        echo "<br> Primeiro trimestre";
        break;
    case 4:
    case 5:
    case 6:
        echo "<br> Segundo trimestre";
        break;
    case 7:
    case 8:
    case 9:
        echo "<br> Terceiro trimestre";
        break;
    case 10:
    case 11:
    case 12:
        echo "<br> Quarto trimestre";
        break;
}

?>
</body>
</html>