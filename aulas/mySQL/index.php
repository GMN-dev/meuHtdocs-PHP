<?php
// SEM PDO


$conex = new mysqli("localhost", "root", "", "dbphp");
if ($conex->connect_error){
    echo "Deu ruim.." . $conex->connect_error;
}
$login = "gtanx";
$senha = "sofageladeira";


$statement = $conex->prepare("INSERT INTO tabela_usuarios (deslogin, dessenha) VALUES(?,?);");
$statement->bind_param('ss', $login, $senha);
$statement->execute();

$consulta = $conex->query("SELECT * FROM tabela_usuarios ORDER BY id");


$JSON_array = array();

//Estou acessando cada linha que é considerada um array dentro da tabela, e adicionando num array que
// vai virar JSONl, e dando var_demp() para ver na pagina web
while ($linha = $consulta->fetch_array()){
    array_push($JSON_array,$linha);
}

$JSON = json_encode($JSON_array);
var_dump($JSON);




?>