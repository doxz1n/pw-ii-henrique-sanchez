<?php
$user = $_POST['user'];
$password = $_POST['password'];

if($user == "doxz1n" && $password == "9876"){
    echo "<p> $user, bem vindo ao sistema! </p>";
}
else{
    echo "<p> Não Autorizado </p>";
}
