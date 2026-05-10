<?php
$numeros = [10, 20, 30, 40];
$somaTotal = 0;
$listaNumeros = "";

foreach ($numeros as $numero) {
    echo "Valor encontrado: {$numero}<br>";
    $somaTotal = $somaTotal + $numero;
    $listaNumeros = $listaNumeros . $numero . " ";
}

echo "<br>Números processados: {$listaNumeros}<br>";
echo "A soma total é: {$somaTotal}";
?>