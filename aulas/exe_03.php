<form>
    <input type="text" name="nome">
    <br>
    <input type="date" name="data">
    <br>
    <input type="submit">
</form>

<?php

$idade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if($idade <=  $idadeCrianca){
    echo "vc tem $idade, portando é uma crinaça";
}
else if ($idade <= $idadeMaior){
    echo "vc tem $idade, portando é uma adulto";
}
else if ($idadeMelhor){
    echo "vc tem $idade, portando é um velho";
}


// pegando o dia da semana 
$diaSemana = date("w");
switch ($diaSemana){
    case 0:
        echo "Domingo";
        break;
    
    case 1: 
        echo "segunda";
        break;
    
    default:
    echo 'invalida';

}

echo "<select>";
for ($i = date("y") + 2000; $i >= 1945 ; $i--){
    echo  '<option value="'.$i.'">'.$i.'</option>';
    }
echo "<select/>";


echo '<select>';
for($anoAtual = date("Y"); $anoAtual >= 1945; $anoAtual--){
    if ($anoAtual <= 2010 &&  $anoAtual > 2005) continue;
    
    echo '<option value="'.$anoAtual.'">'.$anoAtual.' </option>';    
}
echo '<select/>';


 $meses = ['janeiro', "fevereiro", 'março'];

foreach($meses as $mes){
    echo $mes;
}


if(isset($_GET)){
    foreach ($_GET as $inputName => $inputValue){
        echo "$inputName: $inputValue <br>";
    }
}



while (true){
    $numero = rand(0,5);
    echo $numero;
    if ($numero == 3){
        echo "Deu $numero";
        break;
    } 
    else{
        break;
    }
}



$status = false;

function libera(){
global $status;
if  ($status == true){
    $liberado = 1;
// }
// else{
//     $liberado = 0;
// }
// return $liberado;
// }

// $liberacao = $status == true?1:0;

// echo $liberacao . 'var';
// echo "<br>";
// echo libera() . 'func';


// $turmas = array('A','B','C');
// $alunos = [
//     'Nome' => 'Gabriel',
//     'Idade' => 21
// ];
// var_dump($alunos);
// $a = json_encode($turmas);
// array_push($turmas,$alunos);
// $meu = json_encode($turmas);
// print_r($meu);

//constantes

define("NOME", "127.0.0.1");
define("BANCODEDADOS",[
    '127.0.0.1',
    'max',
    'hcode'
]);
print_r(BANCODEDADOS);
// ?>
