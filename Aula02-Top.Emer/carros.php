<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>

<?php
$v1 = array("Ferrari", "McLaren", "Red Bull", "BMW", "BAR");
$v2 = array('a'=>8, 'b'=>9, 'd'=>6, 'c'=>2, 'e'=>5);
$v3 = array("rg" => "00.000.00- -X", "cpf" => "000.000.000- -00", "cartao de credito" => 12345);
$chamada = array("aluno1" => "alberto", "aluno3" => "bianca", "aluno5" => "carlos", "aluno24" => "maria");

function mostrarVetor($vetor, $nome) {
    echo "Conteúdo do vetor $nome:<br>";
    foreach ($vetor as $chave => $valor) {
        echo "Chave: $chave => Valor: $valor <br>";
    }
    echo "<br>";
}

mostrarVetor($v1, "v1");
mostrarVetor($v2, "v2");
mostrarVetor($v3, "v3");
mostrarVetor($chamada, "chamada");
?>

</body>
</html>