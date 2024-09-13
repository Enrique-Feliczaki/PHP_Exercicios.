<?php
// Crie uma classe chamada Objeto que contém os atributos largura e altura de um objeto bidimensional genérico.
//  Depois crie as seguintes classes que estendem de Objeto:
// Classe Triângulo, com o atributo “tipo”;
// Classe Retangulo, com um método que verifique se ele é quadrado.
// Adicione um método que calcula a área na classe Objeto, entretanto o cálculo da área difere para cada tipo de objeto,
//  então re-implemente o método que calcula a área nas subclasses para calcular conforme a sua figura geométrica. 

class Objeto{
    public $largura;
    public $altura;
    public $objetoBidimensional;


}
class Triangulo extends Objeto{
    public $tipo;
}