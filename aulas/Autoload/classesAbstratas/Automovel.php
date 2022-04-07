<?php

interface Veiculos{
    public function mover();
    public function parar();
}


abstract class Automovel implements Veiculos{
    public function mover(){
        echo 'Andando...';
    }
    public function parar(){
        echo 'Parou';
    }
}

?>