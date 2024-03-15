<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            margin-left: 5%;
            margin-right: 5%;
        }
        .aprovado{
            color: blue;
        }
        .reprovado{
            color: red;
        }
    </style>
</head>
<body>
<!-- Formulário para entrada do usuário-->
<h1>Média das notas</h1>
<form action="media.php" method="post">
    <label for="1bim">Nota do 1° Bimestre</label>
    <input type="number" id="1bim" name="1bim" required/>
    <label for="2bim">Nota do 2° Bimestre</label>
    <input type="number" id="2bim" name="2bim" required/>
    <label for="3bim">Nota do 3° Bimestre</label>
    <input type="number" id="3bim" name="3bim" required/>
    <label for="4bim">Nota do 4° Bimestre</label>
    <input type="number" id="4bim" name="4bim" required/>
    <button type="submit">Enviar</button>
</form>

<?php
    $nota = array();
    $nota[0] = $_POST['1bim'];
    $nota[1] = $_POST['2bim'];
    $nota[2] = $_POST['3bim'];
    $nota[3] = $_POST['4bim'];
    $media = 0;
    for($i = 0; $i < count($nota); $i++){
        echo "<h2>". ($i+1) . "° Bimestre =" . $nota[$i]. "</h2>";
        $media += $nota[$i];
    }
    $media = $media / 2;
    if($media < 6){
        echo "<h1 class=reprovado>"."Sua média foi de ". $media . ", logo está reprovado". "</h1>";
    }
    else{
        echo "<h1 class=aprovado>"."Sua média foi de ". $media . ", logo está aprovado". "</h1>";
    }
?>
</body>
</html>