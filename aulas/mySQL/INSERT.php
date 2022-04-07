<?php

$conex = new PDO("mysql:host=localhost;dbname=dbphp","root",'');


$stmt = $conex->prepare("INSERT INTO tabela_usuarios(deslogin,dessenha) VALUES(:LOGIN,:PASSWORD)");

$login = "usuarioNXL";
$senha = '$$!@$';

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $senha);


$stmt->execute();


?>