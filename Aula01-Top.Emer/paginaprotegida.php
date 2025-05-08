<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <h2>Faça login</h2>
    <form method="post" action="pagina_protegida.php">
        Nome de Usuário: <input type="text" name="usuario" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        <input type="submit" name="entrar" value="Entrar">
    </form>

    <?php

$usuarios = [
    "admin" => ["senha" => "12345", "cargo" => "Administrador"],
    "cliente" => ["senha" => "senha123", "cargo" => "Cliente"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if (isset($usuarios[$usuario]) && $usuarios[$usuario]["senha"] == $senha) {
        echo "<h2>Bem-vindo, " . htmlspecialchars($usuario) . "!</h2>";
        echo "<p>Seu cargo: " . htmlspecialchars($usuarios[$usuario]["cargo"]) . "</p>";
    } else {
        echo "<h2>Erro: Nome de usuário ou senha incorretos.</h2>";
    }
} else {
    echo "<h2>Acesso negado.</h2>";
}
?>

</body>
</html>
