<?php
    $servidor = "localhost"; // ou 127.0.0.1
    $usuario = "root";       // seu usuário do MySQL
    $senha = "nqjd8yh9my";             // sua senha do MySQL
    $banco = "integrahub"; // nome do banco de dados

    // Criando conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // Verificando a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    } else {
        echo "Conexão bem-sucedida!";
    }
?>
