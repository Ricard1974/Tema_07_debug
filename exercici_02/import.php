<?php

// $nota_estudiant = $_GET['nota'];
$n = 33;

function grau_estudiant($n) // rectificacio del exercici
{

    if ($n >= 60) {
        return "Primera Divisió";
    } elseif ($n >= 45) {
        return "Segona Divisió";
    } elseif ($n >= 33) {
        return "Tercera Divisió";
    } else {
        return "Suspés";
    }


    // if ($n >= 60) {
    //     return "Primera Divisió";
    // } elseif ($n >= 45 && $n <= 59) {
    //     return "Segona Divisió";
    // } elseif ($n >= 33 && $n <= 44) {
    //     return "Tercera Divisió";
    // } else {
    //     return "Suspés";
    // }
}

$grau = grau_estudiant($n);
echo "El grau és: " . $grau . " Nota = $n"; // diferencia entre '' y  ""
