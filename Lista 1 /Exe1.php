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

    public function __construct($nome, $dia, $mes, $ano)
    {
        $this->nome=$nome;
        $this->dia=$dia;
        $this->mes=$mes;
        $this->ano=$ano;
    }

    public function calculaIdade($dia,$mes,$ano){
        $this->dataAtual=time();
        $this->diaAtual=getdate($this->dataAtual)['mday'];
        $this->mesAtual=getdate($this->dataAtual)['mon'];
        $this->anoAtual=getdate($this->dataAtual)['year'];

        $this->idade = $this->anoAtual - $ano;

        if($this->mesAtual<$mes) {$this->idade--;}
        elseif($this->mesAtual== $this->mes){
            if($this->diaAtual<$dia){
                $this->idade--;
            }

        }


        return $this->idade;
    }

    public function informaIdade(){
        echo "A idade é: " . $this->idade . "\n";
    }

    public function informaNome(){
        echo "Nome: " . $this->nome;
    }
    public function ajustaDataDeNascimento(){
        echo "Dia de nascimento: " . $this->dia . "\n";
        echo "Mes de nascimento: ". $this->mes . "\n";
        echo "Ano de nascimento: ". $this->ano . "\n";
    } 
}

$enrique = new Pessoa("Enrique", 16, 8, 2006);
$enrique->calculaIdade(16,8,2006) . "\n";
echo $enrique->informaNome() . "\n";
echo $enrique->informaIdade() . "\n";
echo $enrique->ajustaDataDeNascimento() . "\n";

$emanuelly = new Pessoa("Emanuelly",11,05,2006);
$emanuelly->calculaIdade(11,5,2006) . "\n";
echo $emanuelly->informaNome() . "\n";
echo $emanuelly->informaIdade() . "\n";
echo $emanuelly->ajustaDataDeNascimento() . "\n";