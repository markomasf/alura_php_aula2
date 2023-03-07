<?php

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
        'titular' => 'José',
        'valor' => 300000
    ]
];

$contas['123.456.987-10'] = [
    'titular' => 'Marcos',
    'valor' => 450000
];

foreach($contas as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

