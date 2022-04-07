<?php

use function PHPSTORM_META\type;

$conex = new PDO("mysql:dbname=dbphp;host=localhost", "root", "");

$stmt = $conex->prepare("SELECT * FROM tabela_usuarios;");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump(type($result));
echo '<br>===============================================================<br>';
foreach($result as $bloco){
    foreach($bloco as $index => $value){
        echo "{$index} = $value";
        echo "<br>";
    }
    echo "<br>";
    echo "==================" ;
    echo "<br>";
}



// var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

?> 