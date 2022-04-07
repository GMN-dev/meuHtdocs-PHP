<?php

class Carro extends Automovel{
    public $feature1 = 'Volante';
    public $feature2 = 'Parabrisa';

    public function showSpeed(){
        echo '60km/h';
    }

    public function showFeatures(){
        echo $this->feature1 . '<br>';
        echo $this->feature2;
    }
}
?>