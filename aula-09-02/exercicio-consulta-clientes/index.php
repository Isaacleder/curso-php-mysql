<?php

$enunciado = 'Criar uma consulta de clientes igual a que acabamos de fazer.
<br>
    Para isso, no arquivo "conexao.php", adicione antes do "return $pdo", o trecho de codigo abaixo:<br>
<code>
    <i>
        $query = "CREATE TABLE IF NOT EXISTS cliente (cliente_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nome TEXT, telefone TEXT, email TEXT, cidade TEXT)";
        <br>
        $this->pdoConection->exec($query);
    </i>    
</code>
';

echo $enunciado;


require_once 'conexao.php';

exit;