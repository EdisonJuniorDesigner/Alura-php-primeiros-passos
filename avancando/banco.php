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

// Uma função pode retornar um valor ou não retornar nada só executar.

function sacar(array $conta, float $valorASacar) : array
{
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem.PHP_EOL;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
}

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);
$contasCorrentes['123.756.789-10'] = sacar($contasCorrentes['123.756.789-10'], 200);

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 900);

// foreach / Para cada
foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}
