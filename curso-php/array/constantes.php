<div class="titulo">Arrays Constantes</div>
<?php
const FRUTAS = ['laranja', 'abacaxi'];
// Essas duas operações abaixo não são permitidas,
//pois o array foi inicializado como uma variável constante
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';

// Só será permitido fazer a leitura de um array constante
echo FRUTAS[0];

const CARROS = ["Fiat" => "uno", "Ford" => "Fiesta"];
//CARROS ["BMW"] = '325i'
echo '<br>' . CARROS["Fiat"];

//utilizando define() também não é possível mudar a referência e o conteúdo interno do array
define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];
