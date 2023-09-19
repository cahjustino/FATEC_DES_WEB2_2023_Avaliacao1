<?php

session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true) {
    header("location: index.php");
    exit;
}

$nome = $_POST['nome'];
$ra = $_POST['ra'];
$placa = $_POST['placa'];

$arquivo = "arquivo.txt";

if(!file_exists($arquivo)){
    $arquivoAberto = fopen($arquivo, "w");
}else{
    $arquivoAberto = fopen($arquivo, "a");
}


fwrite($arquivoAberto, "Nome: $nome | ra: $ra | placa: $placa\n");
fflush($arquivoAberto);
fclose($arquivoAberto);


$arquivoAberto = fopen($arquivo, "r");
while(!feof($arquivoAberto)){
    $line = fgets($arquivoAberto);
    echo $line . "<br>";
}

fclose($arquivoAberto);
    
?>
