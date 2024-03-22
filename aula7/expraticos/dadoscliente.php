<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php
$nome = $_POST['nome'];
$estado_civil = $_POST['estado_civil'];
$genero = $_POST['genero'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$estado = $_POST['estado'];

echo "<table class='table'>
          <thead>
            <tr>
                <th scope='col'>Nome</th>
                <th scope='col'>Estado Civil</th>
                <th scope='col'>Gênero</th>
                <th scope='col'>Data de nascimento</th>
                <th scope='col'>Email</th>
                <th scope='col'>CPF</th>
                <th scope='col'>Estado</th>
            </tr>
          </thead>
            <tr>
                <td>$nome</td>
                <td>$estado_civil</td>
                <td>$genero</td>
                <td>$data_nascimento</td>
                <td>$email</td>
                <td>$cpf</td>
                <td>$estado</td>
            </tr>
</table>";
