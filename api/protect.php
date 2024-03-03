<?php

// Inicia a sessao:
if(!isset($_SESSION)) {
    session_start();
}

// Verifica se nao tiver nenhuma sessao de id mata a conexao e mostra a msg.
if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}

?>