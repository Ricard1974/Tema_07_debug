<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class GrauTest extends TestCase
{

    public function testSiSonIguals(){

        $grau = new Grau();

        $this->assertEquals("Primera",
            $grau->grau_estudiant(90)); // si dona el que ha de donar

        $this->assertEquals("Escriu un numero",
            $grau->grau_estudiant(-1)); // resultat negatiu

        $this->assertEquals("Segona",
            $grau->grau_estudiant(45)); // limit de 45

        $this->assertEquals("Segona",
            $grau->grau_estudiant(45.5)); // fent servir floats

        $this->assertEquals("Primera",
            $grau->grau_estudiant(100000000000)); // fent servir numeros molt alts

        $this->assertTrue($grau->grau_estudiant(6.55)); // afegint un cas per a una nota decimal amb un valor només de dos decimales

        $this->assertFalse($grau->grau_estudiant("hola")); // afegint un cas per a una nota amb un valor no numèric
    }

    public function testNumeroNotaValida()
    {
        $grau = new Grau();

        $this->assertTrue($grau->numero_nota_valid(66));
        $this->assertTrue($grau->numero_nota_valid(44));
        $this->assertTrue($grau->numero_nota_valid(33.3));//positiu amb decimal
        $this->assertFalse($grau->numero_nota_valid(-1));// negatiu
        $this->assertFalse($grau->numero_nota_valid(-1.5));// negatiu amb decimals
        $this->assertFalse($grau->numero_nota_valid(100000000));// numero llarg
        $this->assertTrue($grau->numero_nota_valid(6.55)); // dos decimals
    }

    public function testGrauEstudiantNotaNoValida()
    {
        $grau = new Grau();

        $this->assertEquals("Entra una nota valida", $grau->grau_estudiant(-1));// negatiu
        $this->assertEquals("Entra una nota valida", $grau->grau_estudiant(111));// numero mes alt
        $this->assertEquals("Entra una nota valida", $grau->grau_estudiant("kk")); // string
    }
}
?>
