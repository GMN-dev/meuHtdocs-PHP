<?php
require "exe_02.php";

$saudacao = "Ola mundo";
$nome1 = 'Gabriel'; //string
$salario = 5500.99;
$ano = 2022;
$souBonito = false;
echo "{$saudacao} e meu nome {$nome1}";
echo '<br>';

////////// tipos de dados compostos
$frutas = array("abacaxi",546,true,5500.90);
var_dump ($frutas);
// echo $frutas[1];

$nascimento = new DateTime(); //objeto

////////// tipos especiais
// $arquivo = fopen('index.html', 'r');
// // echo $arquivo;

// $nulo = NULL;
// $n1 = 2;
// $n2 = 4;

// // echo $n1 + $n2;


// ////////////// variaveis pré definidas



// //funções
// function teste($nome){
//     echo $nome;
// }
// function teste2(){
//     // aqui a variavel é de escopo global
//     global $nome1;
//     echo '<br>'. $nome1;
// }
// teste($nome1);
// teste2();

//operadores
//soma
// $res = $n1 + $n2;
// echo '<br>'. $res;

// //menos
// $res = $n1 - $n2;
// echo '<br>'. $res;

// //mult
// $res = $n1 * $n2;
// echo '<br>'. $res;

// //divisao
// $res = $n1 / $n2;
// echo '<br>'. $res;

// //resto da divisao
// $res = $n1 % $n2;
// echo '<br>'. $res;

// //potenciação
// $res = $n1 ** $n2;
// echo '<br>'. $res;



// //mais igual
// $valorTotal = 0;

// $valorTotal += 123;
// $valorTotal += 10;
// echo '<br>'.$valorTotal;

// //menos igual
// $valorTotal -= 5;
// echo '<br>'. $valorTotal;

// $valorTotal *= .9;
// echo '<br>'.$valorTotal;
// echo '<br>';

// //operadores comparativos
// $n1 = 2;
// $n2 = 8;
// var_dump($n1 > $n2);
// echo '<br>';
// var_dump($n1 < $n2);
// echo '<br>';
// var_dump($n1 == $n2);
// echo '<br>';

// //da pra fazer tudo isso utilizando
// var_dump($n1 <=> $n2);
// //  <     =     >
// // -1     0     1

// // 3 '=' (===) verifica se ele é identico, se até os tipos de dados sao iguals
// var_dump($n1 === $n2);
// echo'<br>';
// var_dump($n1 != $n2);
// // ! + 2 '=' (===) verifica se ele é diferente, se até os tipos de dados sao diferentes
// echo '<br>';
// var_dump($n1 !== $n2);
// echo '<br>';


// $a = 12;
// $b = 10;
// $c = 45;
// // "se a for null imprime b, se b for null imprime c "
// echo $a ?? $b ?? $c;
// echo '<br>';

// //incrementar
// $a++;
// echo $a;


//strings
// aspas duplas e como se fosse o printf('{}')
$nome = 'Gabriel';
$nome2 = 'magalhães';
$frase = "A repetição é a mãe da retenção";
echo $nome[5];
echo '<br>';
//tudo em letra maiusculads
// echo strtoupper($nome);
// echo '<br>';
// echo strtolower($nome);
// echo '<br>';
// echo ucwords("$nome $nome2");
// echo '<br>';
// $nome2 = str_replace('e','h',$nome2);
// echo $nome2;

$palavraStart = "ab";
$palavraLimite = 'retenção';
echo '<br>';

function slice($palavraInicial, $palavraFinal){
    global $frase;
    $start = strpos($frase, $palavraInicial);
    $until = strpos($frase, $palavraFinal) + strlen($palavraFinal);
    $frase_mod1 = substr($frase, $start, $until);
    echo $frase_mod1;    
}
echo slice($palavraStart, $palavraLimite);
// echo '<br>';
// echo somando($n1, $n2);

// comandos de decião
// $idadeCriança = 12;
// $idadeMaior = 18;
// $idadeMelhor = 65;

// if ($idadeCriança == 18){
//     echo "ola mundo";

// }else if($idadeCriança == 12){
//     echo "{$idadeCriança}";
// }

// ?>