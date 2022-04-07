<?php

$conex = new PDO("mysql:host=localhost;dbname=dbphp","root",'');

$conex->beginTransaction();
$stmt = $conex->prepare("DELETE FROM tabela_usuarios WHERE id = :ID;");

$parametroExclusaoID = 7;

$stmt->bindParam(":ID", $parametroExclusaoID);

$stmt->execute();


?>