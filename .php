<?php
abstract class Teste{
    public static function testandoClasse(){
        echo "Este metodo e de uma classe abstrata \n";
    }
abstract public function testeAbs();



}

Teste::testandoClasse();
class Nova extends Teste{
    public function testeAbs()
    {
        echo "Teste metodo abstrato\ns"
    }
        
    
}
$n = new Nova;