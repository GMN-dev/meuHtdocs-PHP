<?php
function oi(){
    return  'oi mundo';
}

// Posso fazer um valor padrao (default) pra uma função
//funções sem default devem ser colocadas no inico dos parametro 
function falar($msg = 'oi'){
    return $msg;
}
echo falar();
echo "<br>";
echo falar('mundo');
echo "<br>";



$a = 5;
// para alterar a variavel em si dentro da memoria no escopo fora da função, 
// utiliza-se o "&" antes do parametro. :
function trocaValor(&$a){
    $a = 2;
    return $a;
}
echo $a;
echo "<br>";
trocaValor($a);
echo $a;
echo "<br>";


//Posso fazer uma função que recebe quantos parametros eu quiser
// porem tenho que determinar que todos os parametros serão do mesmo tipo
// em especifico. usando:   function blablabla(tipoDeDado ...$variavel){}

//pelo q eu entendi na fuinção abaixo,  int ...$valores, "int" seria o tipo dos valores que sera colocado
// e "..." e a ação de colcar esses valores em um array, e "$valores" seria o array onde esses valores ficariam.

//eu ja posso formatar o tipo de dado que retornara na função com ":tipoDeDado"

function somaValores(int ...$valores):string{

    return array_sum($valores);
}

$res = somaValores(6,1);
echo gettype($res);





echo
?>