<?php
//encapsular = proteger, modificador de acesso 
class pessoa {
    // public function __construct($peso, $nome, $idade){
    //     $this->nome = $nome,
    //     $this->idade = $idade,
    //     $this->peso = $peso
    // }


    //public todo mundo ve
    public $nome = "Gabriel Magalhães";

    //Com protected, eu nao consigo acessar essa variavel de maneira externa, apenas usando funções internas da classe/objeto
    //e o protected e capaz de fazer com que herdeiros herdem essa variavel
    protected $idade = 46;

    //com private é a mesma coisa do protected, porem ele é mais protegido ainda pelo fato de que ele 
    // não é capaz de passar sua variavel para herdeiros
    private $senha = '131535';

    public function verdados(){
        echo $this->nome . "<br>";
        echo $this->idade .  '<br>';
        echo $this->senha; 
        }
}

// aqui estou fazendo uma classe que ramifica de outra, vai herdar todas as variaveis e metodos, mas nãoa aquilo que for private
class programador extends pessoa{
    // se programador não tivesse repetindo aqui dentro a mesma função verdados, ele ia conseguir ver
    // o private de pessoa, mas não de programador

    public function verdados(){
        echo $this->nome . "<br>";
        echo $this->idade .  '<br>';
        echo $this->senha; 
        }
};

$objeto = new programador();
// echo $pessoa->nome . '<br>';
// echo $pessoa->senha;
$objeto->verdados();



?>