<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class GrauTest extends TestCase{

    public function testSiSonIguals(){

        $grau = new Grau();

        $this->assertEquals("Primera Divisió (de 60 cap amunt)",$grau->grau_estudiant(90)); // si dona el que ha de donar 

        $this->assertEquals("Suspés (de 0 a 32)", 
        $grau->grau_estudiant(-1));  // resultat negatiu

        $this->assertEquals("Segona Divisió (de 45 a 59)",
        $grau->grau_estudiant(45)); // limit de 45

        $this->assertEquals("Segona Divisió (de 45 a 59)",
        $grau->grau_estudiant(45.5)); // fent servir floats

        $this->assertEquals("Primera Divisió (de 60 cap amunt)",
        $grau->grau_estudiant(100000000000)); // fent servir numeros molt alts


     
    } 
}
?>


php vendor/bin/phpunit tests
PHPUnit 10.4.2 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.4

.                                                                   1 / 1 (100%)

Time: 00:00.009, Memory: 8.00 MB

OK (1 test, 5 assertions)