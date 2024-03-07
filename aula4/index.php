<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$nome = "Henrique";
$peso = 60;
$altura = 1.7;

$imc = round($peso / ($altura ** 2), 1);
switch ($imc) {
    case($imc < 18.5):
        echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Magreza" . "</h2>";
        break;
    case($imc < 25):
        echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Normal" . "</h2>";
        break;
    case($imc < 30):
        echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Sobrepeso" . "</h2>";
        break;
    case($imc < 35):
        echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Obesidade grau I" . "</h2>";
        break;
    case($imc < 40):
        echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Obesidade grau II" . "</h2>";
        break;
    default:
        echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Obesidade grau III" . "</h2>";
}
?>
</body>
</html>