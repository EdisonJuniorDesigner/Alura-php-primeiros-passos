<?php

// estrutura de repetição 'for'
for($contador = 1; $contador <= 15; $contador++) {
    if($contador == 13){
        continue;
        //break;
    }

    echo "#$contador" . PHP_EOL;
}
