<?php
function isPrime($n) {
    if ($n < 2) return false;

    for ($divisor = 2; $divisor <= ($n / 2); $divisor++)
        if (($n % $divisor) == 0) return false;

    return true;
}

function Primo($initial, $end) {
    $prime = [];

    for($i = $initial; $i < $end; $i++)
        if(isPrime($i))
            array_push($prime, $i);

    return $prime;
}

//Configurações
$initial = 10;
$end = 29;

// Números prime
$number = Primo($initial, $end);
$count_number = count($number);

// Resultado
echo "Número initial: {$initial}<br>";
echo "Número initial: {$end}<br>";
echo "Encontrados {$count_number} números primos, são eles: " . join(',', $number);