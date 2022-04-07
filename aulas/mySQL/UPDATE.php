<?php

$conex = new PDO("mysql:host=localhost;dbname=dbphp","root",'');


//vou atualizar login e senha do usuariod de id = 4
$stmt = $conex->prepare("UPDATE tabela_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD WHERE id = :ID");

$novoLogin = "ThalesMILETO";
$novaSenha = "46h5dddhf6";
$parametroID = 4;

$stmt->bindParam(":LOGIN", $novoLogin);
$stmt->bindParam(":PASSWORD", $novaSenha);
$stmt->bindParam(":ID", $parametroID);

$stmt->execute();


?>