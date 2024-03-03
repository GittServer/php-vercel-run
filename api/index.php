<?php
header('content-type: application/json');
echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
?> 
<!DOCTYPE html>
<html lang="en">
<head>

<!-- https://youtu.be/30Of7BFeGHI -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <a href="index_login.php">VOLTAR LOGIN</a>
</body>
</html>
