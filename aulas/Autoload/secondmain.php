<?php
// requerimento de classes em pastas, nome da pasta: "classesAbstratas"
spl_autoload_register(function($nameClass){
    if(file_exists("classesAbstratas". DIRECTORY_SEPARATOR . "$nameClass.php") === true){
        require_once("classesAbstratas". DIRECTORY_SEPARATOR . "$nameClass.php");
    }
});

//requerindo classe cujo o arquivo esta na mesma pasta desse arquivo
spl_autoload_register(function($nameClass){
    if(file_exists("$nameClass.php") === true){
        require_once("$nameClass.php");
    }
});
//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

$gol = new Carro();
$gol->showFeatures();
$gol->parar();

?>