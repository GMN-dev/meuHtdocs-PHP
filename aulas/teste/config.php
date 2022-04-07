<?php

spl_autoload_register(function($className){
    $directoryName = 'Classes';
    $fileName = $directoryName . DIRECTORY_SEPARATOR . "$className.php";
    if (file_exists($fileName)){
        require_once($fileName);
    }
    else{
        echo "Arquivo Inexistente";
    } 
});


?>