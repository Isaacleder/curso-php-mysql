<?php

$formulario_html = '
    <form action="cadastro-matricula.php" method="get">
        <label>CPF:</label>
        <input type="text" name="cpf" value="968.419.260-64">
        <br>
        <label>Nome:</label>
        <input type="text" name="nome" value="Gelvazio Camargo">
        <br>
        <label>Cidade:</label>
        <input type="text" name="cidade" value="rio do sul">
        <br>
        <label>Telefone:</label>
        <input type="text" name="telefone" value="47998989898">
        <br>
        <label>Email:</label>
        <input type="text" name="email" value="matricula@gmail.com">
        <br>
        <br>

        <label>Formação:</label>
        <select name="curso">
            <option value="1">Técnico em Agroecologia Integrado ao Ensino Médio</option>
            <option value="2">Técnico em Informática Integrado ao Ensino Médio</option>
            <option value="3">Técnico em Agropecuária Subsequente ao Ensino Médio</option>
            <option value="4">Técnico em Agrimensura Subsequente ao Ensino Médio</option>
            <option value="5">Agronomia</option>
            <option value="6">Técnico em Agropecuária Integrado ao Ensino Médio</option>
            <option value="7">Engenharia Mecatrônica</option>
            <option value="8">Ciência da Computação</option>
            <option value="9">Licenciatura em Pedagogia</option>
            <option value="10">Licenciatura em Matemática</option>
            <option value="11">Licenciatura em Física</option>
            <option value="12">Pós-Graduação em Agronomia: Sistemas Agrícolas Regionais</option> 
        </select>
        <br>
        <br>
        <input type="submit" value="Confirmar">
    </form>    
';

echo $formulario_html;
