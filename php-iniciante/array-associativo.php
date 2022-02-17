<?php

$contaCorrente = [
    '999.756.110-23' => [
        'titular' => "Leandro",
        'saldo' => 200
    ], 
    '123.456.789-10' => [
        'titular' => "Leonardo",
        'saldo' => 300
    ],
    '987.654.321-10' => [
        'titular' => "Lucas",
        'saldo' => 400
    ]
];
echo "     CPF       | Titular" . PHP_EOL;
foreach ($contaCorrente as $cpf => $conta){
    echo $cpf . " | " . $conta['titular'] . PHP_EOL;
}