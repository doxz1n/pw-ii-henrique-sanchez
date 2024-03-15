<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formas Geométricas</title>
</head>
<body>
<?php
// 1-Triangulo; 2-Retângulo;3-Circulo;4-Losango
$escolha = 4;

switch ($escolha){
    case 1:
        echo "<img src='imgs_atv2/triangulo.png' />";
        break;
    case 2:
        echo "<img src='imgs_atv2/retangulo.png' />";;
        break;
    case 3:
        echo "<img src='imgs_atv2/circulo.png' />";
        break;
    case 4:
        echo "<img src='imgs_atv2/losango.png' />";;
        break;
    default:
        echo "Escolha incorreta";
}
?>
</body>
</html>