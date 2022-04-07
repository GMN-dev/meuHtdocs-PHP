<?php
require_once('config.php');
use cliente\Cadastro as Client;

$cadastro = new Client;

$cadastro->setPrivates("Gabriel", "g.magalhaes.dev@gmail.com", "15desetembro125");

$cadastro->sell();
echo $cadastro->getEmail();

?>