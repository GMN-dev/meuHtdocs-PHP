<?php

// $nomeDiretorio = "Imagens";

// // Criando diretorios
// // if (!is_dir($nomeDiretorio)){
// // 	mkdir($nomeDiretorio);
// // 	echo "Diretorio criado com sucesso";
// // }
// // else{
// // 	echo "Diretório ja existe";
// // }

// //lendo diretorios
// //Aqui eu consigo ver o nome do path dos arquivos dentro da pasta imagens

// $arquivosDir = scandir($nomeDiretorio);
// $data = array();

// // echo "Path dos arquivos" . "<br>";
// foreach($arquivosDir as $arquivo){
// 	if(! in_array($arquivo, array(".", ".."))){
// 		$filename = $nomeDiretorio . DIRECTORY_SEPARATOR . $arquivo;
// 		$info = pathinfo($filename);
// 		$info["size"] = filesize($filename);
// 		$info["Last modification"] = date("d/m/Y H:i:s", filemtime($filename));
// 		array_push($data, $info);
		
// 	}
// }	
// echo json_encode($data);

$nameDir = "imgs";

if (! is_dir($nameDir)){
	mkdir($nameDir);
	echo "Diretorio criado com sucesso";
}
else{
	// echo "Diretorio ja existe";sss
}

$filesDirRaw = scandir($nameDir);
$filesDir = array();

foreach ($filesDirRaw as $file) {
	if(! in_array($file, array(".",".."))){
		array_push($filesDir, $file);
	}
}











 ?>

