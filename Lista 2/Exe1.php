

<?php
// <!-- Crie um programa que implemente uma classe Funcionário que contenha os
// atributos id, nome e cargo e o método calculaSalario, em seguida 
// crie uma classe Gerente que contenha os atributos cargo e quantidadeDeColaboradores.
//  Além disso, o gerente recebe um salário diferente, 
// então utilizando polimorfismo implemente um método calculaSalario para o gerente também. -->
class Funcionário{
    public $id;
    public $nome;
    public $cargo;
    public $salario;

    public function __construct($id,$nome,$cargo, $salario)
    {
        $this->id=$id;
        $this->nome=$nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    public function calculaSalario(){
        echo "Salario do funcionario: " . $this->salario . "\n";
    }
}
class Gerente {
    public $cargo;
    public $quantidadeDeColaboradores;
    public $salario;

    public function __construct($cargo, $quantidadeDeColaboradores,$salario)
    {
        $this->cargo = $cargo;
        $this->quantidadeDeColaboradores = $quantidadeDeColaboradores;
        $this->salario = $salario;
    }

    public function calculaSalario(){
        echo "Salario do Gerente: " . $this->salario . "\n";
    }
}

$enrique = new Funcionário(1234, "enrique", "Vendedor" , 1300);
$emanuelly = new Gerente("Gerente", 50, 20.000);

echo $enrique->calculaSalario();
echo $emanuelly->calculaSalario();


