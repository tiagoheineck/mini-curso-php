<?php

$login = $_POST['login'];
setcookie('usuario',$login);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    Usuário <?= $login  ?> entrou!
    <a href="confere-cookies.php">
        Clique aqui para abrir outra página e ver o valor recuperado
    </a>
</head>
<body>
    
</body>
</html>