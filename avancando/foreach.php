<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Edison',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.756.789-10' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['125.854.123-85'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

// foreach / Para cada
foreach($contasCorrentes as $cpf => $conta){
    echo $cpf." ". $conta['titular'].PHP_EOL;
}
