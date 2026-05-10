<?php
$contador = 1;
$soma = 0;
$numerosPares = "";

while ($contador <= 10) {
    if ($contador % 2 == 0) {
        $soma = $soma + $contador;
        $numerosPares = $numerosPares . " " . $contador;
    }
    $contador++;
}

echo "Números somados: {$numerosPares}<br>";
echo "Soma dos pares: {$soma}";
?>