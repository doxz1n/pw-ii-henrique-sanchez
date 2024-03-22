<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php include 'menu.php'; ?>
<!-- Formulário para entrada do usuário-->
<h1>Calculadora</h1>
<section>
    <form action="calculo.php" method="post">
        <div>
            <label for="txNumero1">Número 1: </label>
            <input type="text" id="txNumero1" name="txNumero1" required/>
        </div>
        <div>
            <label for="txNumero2">Número 2: </label>
            <input type="number" id="txNumero2" name="txNumero2" required/>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</section>
</body>
</html>