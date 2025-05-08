<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $divida = floatval($_POST["divida"]);
    $juros = floatval($_POST["juros"]) / 100;
    $parcelas = intval($_POST["parcelas"]);

    $montante = $divida * (1 + $juros * $parcelas);
    $media = $montante / $parcelas;

    echo "<h2>Resultados:</h2>";
    echo "<table border='1'><tr><th>Parcela</th><th>Valor</th></tr>";
    
    for ($i = 1; $i <= $parcelas; $i++) {
        $valor_parcela = $divida * (1 + $juros * $i) / $parcelas;
        echo "<tr><td>$i</td><td>" . number_format($valor_parcela, 2) . "</td></tr>";
    }

    echo "</table>";
    echo "<p><strong>Montante Total:</strong> " . number_format($montante, 2) . "</p>";
    echo "<p><strong>Média das Parcelas:</strong> " . number_format($media, 2) . "</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Juros Simples</title>
</head>
<body>
    <h2>Calculadora de Juros Simples</h2>
    <form method="post">
        Dívida: <input type="number" step="0.01" name="divida" required><br>
        Juros (% a.m.): <input type="number" step="0.01" name="juros" required><br>
        Parcelas: <input type="number" name="parcelas" required><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
