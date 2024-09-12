<?php
class Pessoas{
    public $nome;
    public $endereco;
    public $email;
    public $telefone;

    public function __construct($nome, $endereco, $email, $telefone)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }
}

class Livro{
    public $nome;
    public $autor;
    public $numeroPaginas;
    public $disponibilidadeAluguel;
    public $pessoaAlugou;


    public function __construct($nome,$autor,$numeroPaginas,$disponibilidadeAluguel)
    {
        $this->nome = $nome;
        $this->autor = $autor;
        $this->numeroPaginas = $numeroPaginas;
        $this->disponibilidadeAluguel = true;
        $this->pessoaAlugou = null;
    }

    public function alugar($pessoa){
        if($this->disponibilidadeAluguel){
        $this->disponibilidadeAluguel=false;
        $this->pessoaAlugou = $pessoa;
        echo "O livro $this->nome foi alugado por $pessoa->nome \n";

        
        } else{
            echo "Desculpe o livro: $this->nome ja foi alugado\n";
        }

        }
        public function devolver(){
            if(!$this->disponibilidadeAluguel){
                $this->disponibilidadeAluguel = true;
                $this->pessoaAlugou = null;
                echo "O livro: $this->nome foi devolvido.\n";

            }else{
                echo "O livro: $this->nome já está disponível para aluguel.\n";
            }

        }
    
    }

    $enrique = new Pessoas("Enrique","Rua Voluntários da Pátria","enriqfel@gmail", "42 99835-9225" );

    
    $livro1 = new Livro("1984", "George Orwell", 328, true);
    $livro1->alugar($enrique);
    $livro1->alugar($enrique);
    $livro1->devolver();
    $livro1->devolver();
