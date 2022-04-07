<?php

class Animal {
    // Atributos
    public $especie;
    public $idade;
    
    //métodos
    public function dados(){
        echo " Este animal é da epécie $this->especie e tem $this->idade anos.";
    }
}


$lilo = new Animal();
$lilo->especie = 'Lilozinha';
$lilo->idade = 5;

$lilo->dados();

?>
