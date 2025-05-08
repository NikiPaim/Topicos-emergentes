<?php
session_start();

if (!isset($_SESSION['convidados'])) {
    $_SESSION['convidados'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome'])) {
    $nome = trim($_POST['nome']);
    if (!empty($nome)) {
        $_SESSION['convidados'][] = $nome;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Convidados</title>
</head>
<body>

<h2>Adicionar Convidado</h2>
<form method="post">
    Nome: <input type="text" name="nome" required>
    <button type="submit">Adicionar</button>
</form>

<h2>Lista de Convidados</h2>
<ul>
    <?php foreach ($_SESSION['convidados'] as $convidado): ?>
        <li><?php echo htmlspecialchars($convidado); ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
