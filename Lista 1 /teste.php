<?php
class Pessoa{
    public $nome;
    public $idade;
    public $dia;
    public $mes;
    public $ano;
    public $dataAtual;
    public $diaAtual;
    public $mesAtual;
    public $anoAtual;


    public function __construct($dia, $mes, $ano)
    {
       $this->anoAtual = $ano;
       $this->idade = $this->anoAtual - $this->ano;
    }
    public function informaIdade(){
        return $this->idade;
    }
    public function informarNomae(){
        return $this->nome;
    }
    public function ajustarDataNacimento($dia,$mes,$ano){
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }
}


$enrique = new Pessoa(12, 12, 12);
$enrique->ajustarDataNacimento(16,8,2006);

echo $enrique->informaIdade();