<?php

// Inicia uma nova sessao.
if(!isset($_SESSION)) {
    session_start();
}

// Se existir uma sessao, ela é destruida e o user vai pra tela de login.

session_destroy();

// Era: index.php
header("Location: index.php");

?>