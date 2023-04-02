<?php

class Multiplicacion{
    public $num1;
    public $num2;

    public function __construct($_numero1, $_numero2)
    {
        $this->num1 = $_numero1;
        $this->num2 = $_numero2;
    }

    public function multiplicar()
    {
        echo "El numero 1 es: ". $this->num1;
        echo "<br>";
        echo "El numero 2 es: ". $this->num2;
        echo "<br>";
        echo "La multiplicacion de los dos numero es: ". $this->num1 * $this->num2;
    }
}

$total = new Multiplicacion($_POST['numero1'], $_POST['numero2']);
$total->multiplicar();
?>