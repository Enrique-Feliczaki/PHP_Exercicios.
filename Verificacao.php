</php
class Humano{
    public $idade;
    public $nome;
    public $proficao;
}
if(class_exists("Humano")){
    echo "A classe existe";
}
if(class_exists("Chachorro")){
    echo "A classe existe";
} else{
    echo "A classe cachorro não existe\n";
}

print_r(get_class_vars("Humano"))