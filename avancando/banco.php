<?php

require_once 'funcoes.php';

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

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);
$contasCorrentes['123.756.789-10'] = sacar($contasCorrentes['123.756.789-10'], 200);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 900);

// função 'unset' usada para excluir um indice de um array
unset($contasCorrentes['123.756.789-10']);

// Pegando a referência da contaCorrente
titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

// foreach / Para cada
foreach($contasCorrentes as $cpf => $conta){
    // com isso informando o list como é o indice ele irá funcionar perfeitamente
    // agora caso não informamos ele vai atribuir o indice númerico de 0 em diante por padrão
    // e irá dar erro
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");
}
