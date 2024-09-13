<?php

class Objeto {
    protected $largura;
    protected $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calculaArea() {
        return 0; 
    }
}

class Triangulo extends Objeto {
    private $tipo;

    public function __construct($largura, $altura, $tipo) {
        parent::__construct($largura, $altura);
        $this->tipo = $tipo;
    }

    public function calculaArea() {
        return ($this->largura * $this->altura) / 2;
    }
}

class Retangulo extends Objeto {

    public function __construct($largura, $altura) {
        parent::__construct($largura, $altura);
    }

    public function calculaArea() {
        return $this->largura * $this->altura;
    }

    public function ehQuadrado() {
        return $this->largura == $this->altura;
    }
}

$triangulo = new Triangulo(5, 10, 'Equilátero');
echo "Área do triângulo: " . $triangulo->calculaArea() . "\n";

$retangulo = new Retangulo(4, 4);
echo "Área do retângulo: " . $retangulo->calculaArea() . "\n";
echo "É quadrado? " . ($retangulo->ehQuadrado() ? 'Sim' : 'Não') . "\n";

