<?php
phpinfo();

// Era: index.php // completo!

include('conexao.php');

// Verifica se existir a var email ||ou senha: Inicia o login.
if(isset($_POST['email']) || isset($_POST['senha'])) {

// Se o email = 0 vazio
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
        
// Se a senha = 0 vazia       
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        
// Codigo de login:

// Funcao real_escape_string é uma funcao do $mysqli e serve pra limpar a string email e senha.
        $email = $mysqli->real_escape_string($_POST['email']);
    
        $senha = $mysqli->real_escape_string($_POST['senha']);

// Verifica user e senha:

// Vai selecionar da tabela usuários * (todos os 3 campos) aonde email = $email AND senha = $senha.
        $sql_code = "SELECT * FROM usuários WHERE email = '$email' AND senha = '$senha'";

// Se der erro mata a conexao e mostra a msg.
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

// Verifica a quantidade de usuarios e emails se for = 1
        $quantidade = $sql_query->num_rows;

// Se existir email e senha:
        if($quantidade == 1) {
            
// Pega o usuario do db e salva na var $usuario.
            $usuario = $sql_query->fetch_assoc();

// Se nao existir sessao cria uma nova sessao.
            if(!isset($_SESSION)) {
                session_start();
            }

// Na nova sessao pega do db e mostra o id e o nome:
// Variavel $_SESSION continua ativa mesmo trocando de pagina, por um periodo de tempo.
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

// Redireociona o usuario pra pagina:
            header("Location: painel.php");

// Se nao existir email e senha no db da esse erro:
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }
    
}
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
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
    
</body>
</html>
