<?php
// Fazer um programa com as seguintes características:
// Uma classe chamada Universidade que terá como atributo um nome e terá um método para informar o seu nome.
// Relacionar a classe Pessoa com a classe Universidade. Cada pessoa poderá ser associada a uma Universidade.
// A classe Pessoa, por sua vez, terá um método que dirá seu nome e em que universidade trabalha.
// Criar dois ou mais objetos Universidade e dois ou mais objetos Pessoa (uma para cada universidade).
class Universidade{
    private $nome;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

}

class Pessoa extends Universidade{
    private $nome;
    private $universidade;

    public function __construct($nome, Universidade $universidade)
    {
        $this->nome=$nome;
        $this->universidade = $universidade;
    } 
    public function getInformacao(){
        return "Nome: " . $this->nome . "\nUniversidade: " . $this-> universidade->getNome();
    }

}

$universidade1 = new Universidade("Campo Real");
$universidade2 = new Universidade("UTFPTR");

$enrique = new Pessoa("Enrique", $universidade1);
$emanuelly = new Pessoa("Emanuelly", $universidade2);

echo $enrique->getInformacao() . "\n";
echo $emanuelly->getInformacao();

