<!DOCTYPE html>
<html>
<head>
    <title>Formulário PHP</title>
</head>
<body>

    <h2>Preencha seus dados</h2>
    <form method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Endereço: <input type="text" name="endereco" required><br><br>
        Idade: <input type="number" name="idade" required><br><br>
        Sexo:
        <input type="radio" name="sexo" value="Masculino"> Masculino
        <input type="radio" name="sexo" value="Feminino"> Feminino<br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $idade = $_POST["idade"];
        $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : '';

        echo "<h2>Dados recebidos:</h2>";
        echo "Nome: " . htmlspecialchars($nome) . "<br>";

        if ($idade >= 18) {
            echo "Minha idade é: " . htmlspecialchars($idade) . "<br>";
            echo "Sexo: " . htmlspecialchars($sexo) . "<br>";
            echo "Endereço: " . htmlspecialchars($endereco) . "<br>";
        } else {
            echo "Menor de idade.<br>";
        }
    }
    ?>

</body>
</html>