<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Exame</title>
</head>
<body>

    <h2>Verifique sua situação no exame</h2>
    <form method="post">
        Média Final do Semestre (MF): <input type="number" step="0.1" name="media" required><br><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $media = $_POST["media"];

        echo "<h2>Resultado:</h2>";

        if ($media <= 1.7) {
            echo "Você não pode realizar o exame.";
        } elseif ($media >= 7.0) {
            echo "Parabéns! Você está APROVADO.";
        } else {
            $nota_exame = (10 - $media); // Ajuste conforme a fórmula correta do IFFar
            echo "Para ser aprovado, você precisa tirar pelo menos " . number_format($nota_exame, 2) . " no exame.";
        }
    }
    ?>

</body>
</html>
