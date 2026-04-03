<?php
if (isset($_SESSION['contatos']) && count($_SESSION['contatos']) > 0) {
    echo "<h3>Lista de Contatos</h3>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Nome</th><th>Telefone</th></tr>";

    foreach ($_SESSION['contatos'] as $contato) {
        echo "<tr>";
        echo "<th>" . $contato['nome'] . "</th>";
        echo "<th>" . $contato['telefone'] . "</th>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhum contato cadastrado.</p>";
}
?>