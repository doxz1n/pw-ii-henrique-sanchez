<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
    $idade = array();

    for($i = 0; $i<100; $i++ ){
        $idade[$i] = rand(5,70);
        echo "<h2>"."[".$idade[$i],"]";
        if($idade[$i]>17){
            echo "Maior de idade";
        }
        else{
            echo "Menor de idade";
        }
        echo "</h2>";
    }
?>
</body>
</html>