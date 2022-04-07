<?php

// $dirName = "imagens";

// $listFiles = scandir($dirName);

// foreach($listFiles as $file){
//     if (! in_array($file, array(".", '..'))){
//         unlink("imagens" . DIRECTORY_SEPARATOR . $file);
//     }
// }   

$a = ["asd" => 1, 123 => "123"];

$v = "zulu";
$z = 12;
$a[$v] = $z;
print_r($a);
?>