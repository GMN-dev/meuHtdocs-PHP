<?php
function __autoload($nameClass){
    require_once("$nameClass.php");
}



$civic = new Carro();
$civic->showFeatures();
?>