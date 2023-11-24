<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase
{

    public function testIsEven()
    {
        $numero = new NumberChecker(2); // INstancio el modelo con un valor de 2 
        $this->assertTrue($numero->isEven());
        $numero = new NumberChecker(3);
        $this->assertFalse($numero->isEven());
    }


    public function testIsPositive()
    {
        $numero = new NumberChecker(-1);
        $this->assertFalse($numero->isPositive());
        $numero = new NumberChecker(1);
        $this->assertTrue($numero->isPositive());
    }
//========================  RESULTADO =================
    // Time: 00:00.020, Memory: 8.00 MB

    // OK (2 tests, 4 assertions)
    // SON DOS FUNCIONES QUE DENTRO LLEVAN 2 ASSERTS CADA UNA

    // public function testSomething(): void
    // {
    //     // Optional: Test anything here, if you want.
    //     $this->assertTrue(true, 'This should already work.');

    //     // Stop here and mark this test as incomplete.
    //     $this->markTestIncomplete(
    //         'This test has not been implemented yet.',
    //     );
    // }
}
