<?php

echo 'listando os candidatos inscritos nas vagas de emprego...';

$arquivo = "listacandidatos.json";
if(file_exists($arquivo)) {
    // Se existe, adiciona mais candidatos na lista
    $lista_matriculas = file_get_contents($arquivo);

    // Adicionar o novo candidato na lista de dados existente
    $lista_matriculas = json_decode($lista_matriculas, true);

    echo 'Candidatos inscritos:<br>';
    echo '<pre>' . print_r($lista_matriculas, true) . '</pre>';
}
