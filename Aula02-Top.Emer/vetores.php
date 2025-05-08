<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    
<?php
$v1 = range(0, 12);
$v2 = range(0, 100, 10);
$v3 = range('a', 'i');
$v4 = range('e', 'a');

function mostrarVetor($vetor, $nome) {
    echo "Conteúdo do vetor $nome:<br>";
    foreach ($vetor as $valor) {
        echo $valor . " ";
    }
    echo "<br><br>";
}

mostrarVetor($v1, "v1");
mostrarVetor($v2, "v2");
mostrarVetor($v3, "v3");
mostrarVetor($v4, "v4");
?>

</body>
</html>