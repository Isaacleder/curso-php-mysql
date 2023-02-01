<?php

function grava_ficha_candidato($cpf_candidato, $nome_candidato, $cidade_candidato, $telefone_candidato, $email_candidato, $curso_candidato){
    $matricula_atual = array();
    $matricula_atual["cpf"] = $cpf_candidato;
    $matricula_atual["nome"] = $nome_candidato;
    $matricula_atual["cidade"] = $cidade_candidato;
    $matricula_atual["telefone"] = $telefone_candidato;
    $matricula_atual["email"] = $email_candidato;
    $matricula_atual["curso"] = $curso_candidato;

    // Verificar se existe algum candidato gravado na lista de dados
    $arquivo = "listamatriculados.json";

    // Inicia a lista de candidatos vazia
    $listamatriculas = array();
    if(file_exists($arquivo)){
        // Se existe candidato, adiciona os candidatos na lista
        $listamatriculas = file_get_contents($arquivo);

        // Adicionar o novo candidato na lista de dados existente
        $listamatriculas = json_decode($listamatriculas, true);
    }

    // Adiciono o candidato atual no array de candidatos
    $listamatriculas[] = $matricula_atual;

    $lista_matriculas_json = json_encode($listamatriculas);

    file_put_contents("listamatriculados.json", $lista_matriculas_json);

    echo 'Matricula sendo gravado no sistema:<br>';
       echo '<pre>' . print_r($listamatriculas, true) . '</pre>';
}

function inicia_pagina_candidato() {
    echo '################Ficha de Emprego############';
    echo '<br>';
}

// function mostra_mensagem_candidato($cpf_candidato, $nome_candidato, $opcaoformacao, $opcaovagaemprego) {

//     // Coloca a primeira letra da string em maiusculo
//     $nome_candidato = ucfirst($nome_candidato);

//     // Coloca a primeira letra de cada palavra na string em maiusculo
//     $nome_candidato = ucwords($nome_candidato);

//     $textoformacao = "FORMACAO BRANCO!!";
//     $textovaga = "VAGA BRANCO!!";

//     // switch ($opcaoformacao) {
//     //     case 1:
//     //         $textoformacao = "Ensino Fundamental Incompleto";
//     //         break;
//     //     case 2:
//     //         $textoformacao = "Ensino Fundamental Completo";
//     //         break;
//     //     case 3:
//     //         $textoformacao = "Ensino Medio Incompleto";
//     //         break;
//     //     case 4:
//     //         $textoformacao = "Ensino Medio Completo";
//     //         break;
//     //     case 5:
//     //         $textoformacao = "Ensino Superior Incompleto";
//     //         break;
//     //     case 6:
//     //         $textoformacao = "Ensino Superior Completo";
//     //         break;
//     // }

//     // switch ($opcaovagaemprego) {
//     //     case 1:
//     //         $textovaga = "Desenvolvedor Frontend Junior Java";
//     //         break;
//     //     case 2:
//     //         $textovaga = "Desenvolvedor Frontend Junior PHP";
//     //         break;
//     //     case 3:
//     //         $textovaga = "Desenvolvedor Backend Junior Java";
//     //         break;
//     //     case 4:
//     //         $textovaga = "Desenvolvedor Backend Junior PHP";
//     //         break;
//     // }

//     // Deixando os texto en negrito
//     $nome_candidato = "<b>" . $nome_candidato . "</b>";
//     $textoformacao = "<b>" . $textoformacao . "</b>";
//     $textovaga = "<b>" . $textovaga . "</b>";
//     $cpf_candidato = "<b>" . $cpf_candidato . "</b>";

//     $frase_candidato = "Olá candidato " . $nome_candidato . " <br>
//     CPF:(" . $cpf_candidato.")<br> Seja bem vindo a nossa empresa!<br>
//     Através da sua formação (" . $textoformacao . "), <br>
//     faremos o possível para lhes encaixar na vaga de emprego
//     que você se candidatou.<br>
//     Vaga de emprego solicitada: (" . $textovaga . ").";

//     echo "<p>" . $frase_candidato . "</p>";

//     $botao_voltar = "<a href='index.php'>Voltar</a>";

//     echo $botao_voltar;
// }

$cpf_candidato    = $_GET["cpf"];
$nome_candidato   = $_GET["nome"];
$cidade_candidato = $_GET["cidade"];
$telefone_candidato = $_GET["telefone"];
$email_candidato = $_GET["email"];
$curso_candidato = $_GET["curso"];


inicia_pagina_candidato();

// mostra_mensagem_candidato($cpf_candidato, $nome_candidato, $cidade_candidato, $telefone_candidato, $email_candidato, $curso_candidato);

grava_ficha_candidato($cpf_candidato, $nome_candidato, $cidade_candidato, $telefone_candidato, $email_candidato, $curso_candidato);