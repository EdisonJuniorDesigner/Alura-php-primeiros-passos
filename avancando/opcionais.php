<?php

$carros = [
    'KWD-4562' => [
        'marca' => 'Volkswagen',
        'modelo' => 'Golf'
    ],
    'KKS-4578' => [
        'marca' => 'Volvo',
        'modelo' => 'XC90'
    ],
    'GHW-7845' => [
        'marca' => 'Ferrari',
        'modelo' => 'Aperta'
    ]
];

foreach ($carros as $placas => $carros){
    echo $placas.': '.$carros['modelo'].PHP_EOL;
}
