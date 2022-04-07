<?php

$fileName = "usuarios.csv";
$arrayFinal = [];

if (file_exists($fileName)){
    $file = fopen($fileName, "r");
    $headers = explode(",",fgets($file));

    while ($fg = fgets($file)){
        $row = (explode(",",$fg));
        $linha = [];


        for($i = 0; $i < count($headers); $i++){
            $linha[$headers[$i]] = $row[$i];
        }

        array_push($arrayFinal, $linha);
        
    }
}
echo json_encode($arrayFinal);

fclose($file);



?>