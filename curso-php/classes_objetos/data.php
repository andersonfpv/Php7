<div class="titulo">Classe Data</div>

<?php

class Data {
   public $dia = 1; 
   public $mes = 1; 
   public $ano = 1970; 

    public function apresentar() {
        return "Data: {$this->dia} / {$this->mes} / {$this->ano}";
    } 
}

$d1 = new Data();
echo $d1->apresentar(), '<br>';

$d2 = new Data();
$d2->dia = 16;
$d2->mes = 12;
$d2->ano = 2020;
echo $d2->apresentar(), '<br>';