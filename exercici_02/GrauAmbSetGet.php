<?php

class Grau
{
    public int $nota;

    function getNota(): int
    {
        return $this->nota;
    }

    function setNota($nuevaNota)
    {
        $this->nota = $nuevaNota;
    }

    function grau_estudiant($nota): string // rectificacio 
    {
        if ($nota >= 60) {
            return "Primera Divisió (de 60 cap amunt)";
        } elseif ($nota >= 45) {
            return "Segona Divisió (de 45 a 59)";
        } elseif ($nota >= 33) {
            return "Tercera Divisió (de 33 a 44)";
        } else {
            return "Suspés (de 0 a 32)";
        }
    }
}

$grau = new Grau();
$grau->setNota(75); // canvio el valor de la nota amb eñl setter

$resultat = $grau->grau_estudiant($grau->getNota()); // variable resultat que es el grau 

echo $resultat; 


