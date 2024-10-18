<?php

$nombre = "Caro Bte";
$edad = 27;

/* echo $nombre;
echo "\n";
echo $edad; */

/* Ejercicios */

/* 1. Suma de pares */


for ($i=1; $i <= 100 ; $i++) { 
    $totalSuma = 0;
    if ($i % 2 == 0){
        $totalSuma += $i;
    }
}

echo $totalSuma;
echo "\n";

/* 2. Factorial */

function factorial($numero) {
    $totalFactorial = 1;
    
    if ($numero == 0){
        return 1;
    } else {
        for ($i=1; $i <= $numero ; $i++) { 
           $totalFactorial *= $i; 
        }
    }

    echo $totalFactorial;
    echo "\n";
}

factorial(5);

/* 3. Primo o no */

function primo($numero) {
    if ($numero < 2) {
        echo "No es primo";
        echo "\n";
    } else {
    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            echo "No es primo";
            echo "\n";
        } else {
        echo "Es primo";
        echo "\n";
    }
}
}
}

primo(25);

/* Palíndromo */


/* Invertir una cadena */