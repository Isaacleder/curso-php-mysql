<?php

// echo 'inicio do arquivo.php';
// echo '<br>';
// echo 'pegando dados dos parametros da url';

$nome_parametro = "NOME EM BRANCO";
$idade_parametro = "IDADE EM BRANCO";

$validaDados = true;

if(isset($_GET["nome"])){
    $nome_parametro = $_GET["nome"];
}else {
    $validaDados = false;
}

if(isset($_GET["idade"])){
    $idade_parametro = $_GET["idade"];
}else {
    $validaDados = false;
}

if($validaDados){
    $frase = 'meu nome é ' . $nome_parametros . ' e tenho ' . $idade_parametros . ' anos de idade';
    
    echo '<br><br><br>' . $frase;

}else{
    echo "parametros invalidos";
}
