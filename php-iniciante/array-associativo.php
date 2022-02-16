<?php

$conta1 = [
    'titular' => "Leandro",
    'saldo' => 200
];
$conta2 = [
    'titular' => "Leonardo",
    'saldo' => 300
];
$conta3 = [
    'titular' => "Lucas",
    'saldo' => 400
];
$contaCorrente = [$conta1, $conta2, $conta3];

foreach ($contaCorrente as $conta){
    echo $conta['titular'] . PHP_EOL;
}