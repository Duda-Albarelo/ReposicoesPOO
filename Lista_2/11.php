<?php
$numeros = [5, 8, 2, 15, 3];
$maior = $numeros[0];

foreach ($numeros as $numero) {
    echo "Analisando o número: {$numero}<br>";
    if ($numero > $maior) {
        $maior = $numero;
    }
}

echo "<br>O maior número é: {$maior}";
?>