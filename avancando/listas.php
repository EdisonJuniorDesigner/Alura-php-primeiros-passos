<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

// por padrão quando deixamos o array vazio o
// PHP adiciona o item no final do array que no
// caso vai adicionar o '20' ao lado do '18'
$idadeList[] = 20;

foreach ($idadeList as $idade){
    echo $idade.PHP_EOL;
}
