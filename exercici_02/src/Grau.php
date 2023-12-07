<?php

class Grau
{

    public function numero_nota_valid(float $nota): bool {
        return is_numeric($nota) && $nota >= 0 && $nota <= 100;
    }

    public function grau_estudiant(float $nota): string {
        if (! $this->numero_nota_valid($nota)) {
            return "Escriu un numero";
        }

        switch ($nota) {
            case $nota >= 60:
                return "Primera";
            case $nota >= 45:
                return "Segona";
            case $nota >= 33:
                return "Tercera";
            default:
                return "Suspes";
        }
    }
}

$grau = new Grau();
$grau->nota = 55;

echo $grau->grau_estudiant($grau->nota);