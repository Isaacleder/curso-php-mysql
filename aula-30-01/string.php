<?php
echo 'arquivo string';

if(isset($_GET["palavra"])){
    $palavra = $_GET["palavra"];
    echo 'palavra: ' . $palavra;
    echo '<br> iniciando com string';
    
    $tamanho = strlen($palavra);
    
    echo 'tamanho: ' . $tamanho;
    
    echo '<br>percorredo as letras da palavra';

    $aNovaPalavra = array();
    
    for($i = 0; $i < $tamanho; $i++) {
        $letra = $palavra[$i];
        echo '<br>letra: ' . $letra . ' na posiçao ' . $i;
    
        $aNovaPalavra[] = $letra;
    }
    
    echo '<br>Nova palavra: ';
    // pega tamanho do array
    $tamanho = count($aNovaPalavra);

    for($i = 0; $i < $tamanho; $i++) {
        $letra = $palavra[$i];
        echo '<br>letra nova: ' . $letra . ' na posiçao ' . $i;
    }

    function mostraPalavra ($palavra){
        if(is_array($palavra)){
            $tamanho = count($palavra);
        }else if(is_string($palavra)){
            $tamanho = strlen($palavra);
        }else{
            throw new Exception("palavra invalida");
        }

        for($i = 0; $i < $tamanho; $i++){
            
        }
    }