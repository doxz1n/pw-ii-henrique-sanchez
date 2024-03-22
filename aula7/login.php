<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php include 'menu.php'; ?>
<!-- Formulário para entrada do usuário-->
<h1>Login</h1>
<section>
    <form action="calculo.php" method="post">
        <div>
            <label for="user">Login </label>
            <input type="text" id="user" name="user" required/>
        </div>
        <div>
            <label for="password">Senha </label>
            <input type="text" id="password" name="password" required/>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</section>
</body>
</html>