<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INSS</title>
</head>
<body>
<?php
$salario = 3000;
$desconto = 0;
if($salario <= 2500){
    $desconto = $salario * 0.075;
}
elseif($salario <= 5500){
    $desconto = 187.5 + (($salario - 2500) * 0.09);
}
elseif($salario <=10000){
    $desconto = 187.5 + 270 + (($salario - 8000)* 0.12);
}
elseif($salario <= 20000){
    $desconto = 187.5 + 270 + 240 +(($salario - 18000)* 0.14);
}
elseif($salario> 20000){
    $desconto = 187.5 +270 + 240 + 280 + (($salario - 20000) * 0.14);
}

if($desconto > 3000){
    $desconto = 3000;
}

echo "<h2>". "Seu desconto será de: " . $desconto . "</h2>";
echo "<h2>". "Seu valor total a receber será: ". ($salario - $desconto) . "</h2>";


?>
</body>
</html>