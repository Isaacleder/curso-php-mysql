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

$cpf_candidato    = $_GET["cpf"];
$nome_candidato   = $_GET["nome"];
$cidade_candidato = $_GET["cidade"];
$telefone_candidato = $_GET["telefone"];
$email_candidato = $_GET["email"];
$curso_candidato = $_GET["curso"];


inicia_pagina_candidato();

grava_ficha_candidato($cpf_candidato, $nome_candidato, $cidade_candidato, $telefone_candidato, $email_candidato, $curso_candidato);