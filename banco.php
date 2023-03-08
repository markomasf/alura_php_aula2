<?php

require 'funcoes.php';

$contas = [
    '123.456.789-10' => [
        'titular' => 'Marco',
        'valor' => 100000
    ],
    '123.456.789-11' => [
        'titular' => 'Lorene',
        'valor' => 200000
    ],
    '123.456.789-12' => [
        'titular' => 'Larissa',
        'valor' => 500
    ]
];

sacar($contas['123.456.789-12']['valor'], 326);

depositar($contas['123.456.789-10']['valor'], 600);

titularComLetrasMaiusculas($contas['123.456.789-12']);

foreach ($contas as $cpf => $conta) {
    ['titular' => $titular, 'valor' => $valor] = $conta;
    quebrarLinha("$cpf =  $titular  =  $valor");
}
