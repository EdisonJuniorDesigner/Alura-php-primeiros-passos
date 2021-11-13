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
    echo $mensagem.'<br>';
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

// quando utilizamos o '&' antes da '$conta' estamos querendo dizer
// que queremos receber os valores da própria conta e não uma cópia caso
// fosse escrito sem o '&'.
function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array &$conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}
