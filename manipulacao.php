<?php
session_start();

// Inicializa o array se não existir
if (!isset($_SESSION['contatos'])) {
    $_SESSION['contatos'] = [];
}

// Pega os dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

// Adiciona no array
$_SESSION['contatos'][] = [
    "nome" => $nome,
    "telefone" => $telefone
];

// Redireciona de volta
header("Location: index.php");
exit;