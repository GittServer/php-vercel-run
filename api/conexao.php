<?php
// Dados do meu 2° DB MySQL usando login: lucaseluisalove@... no 000webhost.com
// Usuario do db:
$usuario = 'id20046088_id20046088_lucasa'; // ERA: 'root';
// Senha do db:
$senha = '$B6vkM1*|/4qP?YK'; // ERA: '';
// Nome da Base de dados (DB):
$database = 'id20046088_login_eletro_tech_site_03_06_23'; // ERA: 'login';
// Nome da tabela: usuários
$host = 'localhost';
$mysqli = new mysqli($host, $usuario, $senha, $database);
if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>