<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .pares{
            color:white;
            background-color: blue;
        }
        .impares{
            color:red;
            background-color: black;
        }
    </style>
</head>
<body>
<?php

$vetor = array();

for($i = 0; $i < 100; $i++){
    $vetor[$i] = $i + 1;
    if($vetor[$i] %2 == 0){
        echo "<h1 class=pares>". $vetor[$i]. " é par!". "</h1>";
    }
    else{
        echo "<h1 class=impares>". $vetor[$i]. " é impar!". "</h1>";
    }

}


?>
</body>
</html>