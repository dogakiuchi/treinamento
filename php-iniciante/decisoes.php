<?php

$idade = 18;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}
//Arquivo alterado no windows
echo PHP_EOL;
echo "Adeus!";
echo "trabalhando na issue 01";
//correção de bug na branch bug