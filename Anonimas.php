<?php

$pessoa = new class(){
    public $nome = "Enrique";
    
    public function dizerNome(){
        echo "Olá meu nome é $this->nome \n";
    }
};
echo $pessoa->nome . "\n";
$pessoa->dizerNome();








