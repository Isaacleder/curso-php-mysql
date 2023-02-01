<?php


function iniciaAula(){
//tipo de dados 

//tipo numerico - int - long

//tipo texto(string) - classe string

//tipo logico (verdadeiro/faso ou false/true)

//tipo objeto


$var = "1.2";

var_dump($var);

echo '<br>';

$var2 = 1515;

var_dump($var2);
}

// iniciaAula();


// chamando arquivos phpe passar parametros



$nome = "geovazio";
$idade = 36;

$parametros = "?nome=" . $nome . "&idade=" . $idade;

$urlBase = "http://localhost/curso-php-mysql/arquivo.php";

$urlBase = $urlBase . $parametros;
echo '<a href="'. $urlBase .'">chamando arquivo php</a>';
// -----------------------------------------------------------
echo '<br>';

$palavra = "arara";
$parametros = "?palavra=" . $palavra;

$urlBase = $urlBase . $parametros;
$urlBase = "http://localhost/curso-php-mysql/string.php";
echo '<a href="'. $urlBase .'">chamando arquivo string</a>';














