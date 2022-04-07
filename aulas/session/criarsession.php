<?php
//requisitando o arquivo .config
require "config.php";

// printando o conteudo da minha variavel de sessão
// print_r($_SESSION);

//pegadno id de sessão
// session_id();
// echo session_id();

echo "<br>";


echo "<br>";
session_unset();
//descobrindo status da sessao{
switch(session_status()){
    case PHP_SESSION_ACTIVE:
        echo "ativo";
        break;
    case PHP_SESSION_NONE:
        echo 'fora do ar';
        break;
    case PHP_SESSION_DISABLED:
        echo "inativo";
        break;
}