<?php

class Grau
{

    function grau_estudiant($nota): string // rectificacio 
    {
        if ($nota >= 60) {
            return "Primera Divisió (de 60 cap amunt)";
        } elseif ($nota >= 45) {
            return "Segona Divisió (de 45 a 59)";
        } elseif ($nota >= 33) {
            return "Tercera Divisió (de 33 a 44)";
        } elseif ($nota <33){
            return "Suspés (de 0 a 32)";
        }else{
            return "Entra una dada valida";
        }
    }
}

$grau = new Grau();
$grau->nota = 1.5; 

echo "Aixo sortira a un echo en mig de la proba".$grau->grau_estudiant($grau->nota); 



