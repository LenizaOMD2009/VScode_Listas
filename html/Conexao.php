<?php
$usuario = "senac";
$senha = "senac";
$porta = "5432";
$host = "localhost";
$banco = "senac_bd";
$dsn = "pgsql:host=$host;port=$porta;dbname=$banco;user=$usuario;password=$senha";

try {
    // Cria a conexão
    $conexao = new PDO($dsn, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Define o modo de erro para exceções
} catch (\PDOException $e) {
    // Captura o erro e exibe uma mensagem
    echo "Erro de conexão: " . $e->getMessage();
    exit; // Interrompe a execução em caso de erro
}