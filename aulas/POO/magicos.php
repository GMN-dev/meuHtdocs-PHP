<?php

class Pessoa {
    private $nome;
    private $idade;
    private $cidade;

    public function __construct($nomePessoa, $idadePessoa, $cidadePessoa){
        $this->nome = $nomePessoa;
        $this->idade = $idadePessoa;
        $this->cidade = $cidadePessoa;
    }

    public function __destruct(){
        
    }

    // __toString serve pra quando eu for printar meu objeto, ele printe dessa forma formatada (praticamente dformata meu echo)
    public function __toString(){
        return $this->nome . ", " . $this->idade . ", " . $this->cidade;
    }
}




$Gabriel = new Pessoa("binhel", 21, "sobradinho");

echo $Gabriel;




// class Endereco{

//     private $logradouro;
//     private $numero;
//     private $cidade;

//     public function __construct($a, $b,$c){
//         $this->logradouro = $a;

//         $this->numero = $b;

//         $this->cidade = $c;

//     }
// }
// $meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");



// var_dump($meuEndereco);
?>