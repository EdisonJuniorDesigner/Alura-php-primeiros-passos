<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Edison',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12375678910 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

// foreach / Para cada
foreach($contasCorrentes as $cpf => $conta){
    echo $cpf.PHP_EOL;
}
