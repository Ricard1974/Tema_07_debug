<?php
class NumberChecker  {

    private int $number;

	public function __construct(int $number){
        $this->number = $number;

    }//propiedad llamada $number como private dentro de la clase y propiedad inicializada a través del constructor, siendo del tipo int

	public function isEven(): bool { // boleano si es paar divisible entre 2
		return $this->number%2 == 0;
	}
	public function isPositive(): bool { // true o false si es mayor que 0
		// return $this->number > 0 && $this->number !=0;
		return $this->number > 0;
	}
    
    public function elNumero(): int {
        return $this->number;

    }
}

$result = new NumberChecker(-5);

echo $result->elNumero();
echo "<br/>";

echo $result->isEven() ? 'Es parell' : 'Imparell'; 
echo "<br/>";

echo $result->isPositive() ? 'Es positiu' : 'No es positiu'; 
echo "<br/>"; 

var_dump($result); 
?>