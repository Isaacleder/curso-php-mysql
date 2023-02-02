<?php

$enunciado = 'Exercicio 01 - Criar uma classe chamada Calculadora, 
<br>esta classe vai ter os seguintes atributos e métodos: 
<br>Atributos: 
<br>Valor1; 
<br>Valor2; 
<br><br>
Métodos: 
<br>Somar(); 
<br>Subtrair(); 
<br>Multiplicar(); 
<br>Dividir();
<br>
 Cada método deve calcular e imprimir na tela o resultado. 
 <br>Realize a criação de objetos através da classe e realize as operações de cada método.
';
$enunciado .= '<br>#######################################################<br>';
$enunciado .= '<br>Exercicio 02 - Crie uma classe chamada CalculadoraCientifica, 
<br>esta classe deve estender(herdar, use o comando extends) de Calculadora 
<br>e implementar o seguinte método: 
<br>Fatorial(); //Irá utilizar somente a variável valor1;
<br>Exemplo de fatorial de um numero:
<br> numero 5 = 5 * 4 * 3 * 2 * 1  => 120
<br><br><br><br>
Ao final entregar no github de cada um.';

class Calculadora {
    public $valor1;
    public $valor2;

    public function somar(){
        return $this->valor1 + $this->valor2;
    }
    public function subtracao(){
        return $this->valor1 - $this->valor2;
    }
    public function divisao(){
        return $this->valor1 / $this->valor2;
    }
    public function multiplicaçao(){
        return $this->valor1 * $this->valor2;
    }

}

$oCalculadora = new Calculadora;
$oCalculadora->valor1 = 10;
$oCalculadora->valor2 = 10;

echo 'soma: ' . $oCalculadora->somar() . '<br>';
echo 'subtracao: ' . $oCalculadora->subtracao() . '<br>';
echo 'divisao: ' . $oCalculadora->divisao() . '<br>';
echo 'multiplicaçao: ' . $oCalculadora->multiplicaçao() . '<br>';
