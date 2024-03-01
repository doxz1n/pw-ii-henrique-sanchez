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

$imc = round($peso / ($altura**2), 1);
echo "Seu IMC é $imc, portanto seu resultado é ";
switch($imc){
    case($imc<18.5):
        echo "Magreza";
        break;
    case($imc<25):
        echo "Normal";
        break;
    case($imc<30):
        echo "Sobrepeso";
        break;
    case($imc<35):
        echo "Obesidade grau I";
        break;
    case($imc<40):
        echo "Obesidade grau II";
        break;
    default:
        echo "Obesidade grau II";
}
?>
</body>
</html>