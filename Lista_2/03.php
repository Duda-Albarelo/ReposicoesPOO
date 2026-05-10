<?php
$contador = 1;
$soma = 0; 

while ($contador <= 5) {
    $soma = $soma + $contador;
    
    $contador++;
}

echo "A soma dos números de 1 até 5:<br> {$soma}";
?>