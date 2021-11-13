<?php

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
