<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
</head>
<body>

<h1>Agenda</h1>

<h2>Novo Contato</h2>

<form action="manipulacao.php" method="POST">
    Nome: <input type="text" name="nome" required><br><br>
    Telefone: <input type="text" name="telefone" placeholder="(99) 99999-9999" required><br><br>

    <input type="submit" value="Enviar">
    <input type="reset" value="Limpar">
</form>

<hr>

<?php include("listaContatos.php"); ?>

</body>
</html>