<?php
$notas = [8, 5, 7, 4, 9];
$totalAprovados = 0;

foreach ($notas as $nota) {
    if ($nota >= 6) {
        echo "Nota: {$nota} - Status: Aprovado<br>";
        $totalAprovados++;
    } else {
        echo "Nota: {$nota} - Status: Reprovado<br>";
    }
}

echo "<br>Total de aprovados: {$totalAprovados}";
?>