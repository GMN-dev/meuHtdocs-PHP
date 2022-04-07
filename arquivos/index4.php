<?php

// Pegando o nome do diretorio
$nameDir = "imagens";
//scaneando arquivos do diretorio - pegando conteudo do diretorio
$diretorio = scandir($nameDir);

// andando pelo conteudo do diretorio 
foreach($diretorio as $arquivo){
    // Verificando se algum desses arquivos dentro do diretorio nao e um '.' ou '..'
    if(! in_array($arquivo, array(".", ".."))){
        //apagando caminho do diretorio 
        unlink($nameDir . DIRECTORY_SEPARATOR . $arquivo);
    }
}

?>