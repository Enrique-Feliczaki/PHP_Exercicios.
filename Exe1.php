<?php

class Cachorro{
    public $raca;
    public $cor;
    
    public function __construct($raca,$cor)
    {
        $this->raca = $raca;
        $this->cor = $cor;
    }
}
$yoda = new Cachorro("York-shire", "Preto");
echo "O cachorro yoda é da raça $yoda->raca e tem a cor $yoda->cor";