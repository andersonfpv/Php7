<div class="titulo">Array</div>

<?php 
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>'; // mostra somente o nome array
var_dump($lista); // mostra os valores dentro de chaves junto com o tipo e índice
echo '<br>';
print_r($lista); // mostra índice e valor dentro de parênteses
echo '<br>';
$lista [0] = 1234;
print_r($lista);

//acessando valores do array
echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]);
//pegando a posição da frase
$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; //cuidado! Pode gerar problema
echo '<br>' . mb_substr($texto, 10, 1); // com o substr passo o valor, digo qual é o caracter e digo que desejo pegar um único caracter 

