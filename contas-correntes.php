<?php

$conta1 = [
    'titular' => 'Marco',
    'valor' => 100000
];

$conta2 = [
    'titular' => 'Lorene',
    'valor' => 200000
];

$conta3 = [
    'titular' => 'José',
    'valor' => 300000
];

$contas = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contas); $i++){
    echo $contas[$i]['titular'] . PHP_EOL;
}