<?php 
// index.php
session_start();

// If user is logged in, retrieve identity from session.
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home php</title>
    </head>
    <body>
        <h1>Home PHP</h1>
        <?php if ($identity==null): ?>
        <a href="login.php">Login</a>
        <?php else: ?>
        <strong>Welcome, <?= $identity ?></strong> <a href="logout.php">Sign out</a>
        <?php endif; ?>
        
        <p>
            Este é um site simples para demonstrar as vantagens de um framework PHP e as desvantagens do PHP "puro".
        </p>
    </body>
</html>
