<?php

// Desafio 01
for($i = 1; $i <= 100; $i++){
    if($i != ($i % 2 == 0)){
        echo $i . PHP_EOL;
    }
}
