<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens() {
    echo "Olá ";
    echo "Até a próxima!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

echo "<br><hr>";

$variavel = 1; 
function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

echo "<br><hr>";

function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

echo "<br><hr>";

var_dump(trocaValorDeVerdade());