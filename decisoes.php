<?php

// condicional normal
$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado." . PHP_EOL;

if($idade >= 18){
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";

// condição ternária
$idade = 15;
$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
echo $mensagem;
