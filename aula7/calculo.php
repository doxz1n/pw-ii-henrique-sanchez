<?php
$n1 = $_POST['txNumero1'];
$n2 = $_POST['txNumero2'];

$soma = $n1 + $n2;
$sub = $n1 - $n2;
$mult = $n1 * $n2;
$div = $n1 / $n2;

echo "<p> $n1 + $n2 = $soma </p>";
echo "<p> $n1 - $n2 = $sub</p>";
echo "<p> $n1 X $n2 = $mult </p>";
echo "<p> $n1 / $n2 = $div </p>";

