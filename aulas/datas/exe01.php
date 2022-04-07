<?php

//exibir datas
// echo date("d/m/Y H:i:s");
// echo '<br>';

//exibir unix (Segundos que se passaram desde 1 janeiro de 1970)
//  

//Agora vamos pegar um unix de uma determinada data, assim podemos saber diversas informações a respeito dessa data
// Pegadando o time() da data (Sai em formato de string) 
// $ataqueTerrotista = strtotime("2001-09-11");

// echo date("l, d/m/Y", $ataqueTerrotista);
// echo strtotime("week");

//definir o idioma do servidor 





$tsChegada = strtotime('+2 week');
$diaCompra = date('l, d/m/Y');
$diaChegada = date("l, d/m/Y" ,$tsChegada);

echo "Compra feita no dia - $diaCompra";
echo '<br>';
echo "Chegara dia $diaChegada";
?>