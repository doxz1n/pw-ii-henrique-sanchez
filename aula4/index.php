<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form action="index.php" method="post">
    <h1>IMC</h1>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome"
               placeholder="Digite seu nome">
    </div>
    <div class="form-group">
        <label for="altura">Altura</label>
        <input type="number" step="0.01" class="form-control" id="altura" name="altura"
               placeholder="Digite sua altura em metros">
    </div>
    <div class="form-group">
        <label for="peso">Peso</label>
        <input type="number" step="0.5" class="form-control" id="peso" name="peso"
               placeholder="Digite seu peso em quilogramas">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<?php
// Verificar se as variáveis foram definidas
if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
} else {
    $nome = ""; // Definir valor padrão
}

if (isset($_POST['peso'])) {
    $peso = $_POST['peso'];
} else {
    $peso = 0; // Definir valor padrão
}

if (isset($_POST['altura'])) {
    $altura = $_POST['altura'];
} else {
    $altura = 0; // Definir valor padrão
}

// Cálculo do IMC e exibição do resultado
if ($altura != 0) {
    $imc = round($peso / ($altura ** 2), 1);

    switch ($imc) {
        case ($imc < 18.5):
            echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Magreza" . "</h2>";
            break;
        case ($imc < 25):
            echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Normal" . "</h2>";
            break;
        case ($imc < 30):
            echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Sobrepeso" . "</h2>";
            break;
        case ($imc < 35):
            echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Obesidade grau I" . "</h2>";
            break;
        case ($imc < 40):
            echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Obesidade grau II" . "</h2>";
            break;
        default:
            echo "<h2>" . "Seu IMC é $imc, portanto seu resultado é Obesidade grau III" . "</h2>";
    }
} else {
    echo "<h2>Erro: Altura inválida. Digite um valor diferente de zero.</h2>";
}
?>
</body>
</html>