<?php
require_once("config.php");

// funcao para colocar virgula
function prepareArray($array){
    $res = implode(",",$array);
    return $res;
}

// instanciando database
$database = new Sql();

//arquivo que sera editado
$doc = fopen("meuCSV.csv", "a+");

#pegando tabela numa array
$response = $database->listDataBase("SELECT * FROM tabela_usuarios ORDER BY deslogin");


// -=--=--=-==-=-=--=-=-=-=-=-=-=-=- Pegando cabecalho =-=-=-=-==-=-=--
$dbArray = $response[0];
$write = [];
foreach ($dbArray as $key => $value){
    array_push($write, $key);    
}
fwrite($doc, implode(",", $write));
$write = [];


// =-=-=-=-=-=-=-=-=-=-=- Pegando corpo --=-=---=-
foreach ($response as $key) {
    foreach ($key as $value) {
        print_r($value);
        array_push($write ,$value);
    }
    fwrite($doc, "\n\r");
    $msg =  prepareArray($write);
    fwrite($doc, $msg);
    $write = [];
}


fclose($doc);

?>