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
        'valor' => 500
    ]
];

function quebrarLinha($mensagem){
    echo "$mensagem" . PHP_EOL;
}

function sacar(&$conta, $valor){
    if($conta > $valor){
        $conta -= $valor;
    } else{
        quebrarLinha("Não possui saldo para sacar!");
    }
    return $conta;
}

function depositar(&$conta, $valor){
    if($valor < 0){
        quebrarLinha("Não pode efetuar depósito negativo!");
    }else{
        $conta += $valor;
    }
    return $conta;

}

sacar($contas['123.456.789-12']['valor'], 326);

depositar($contas['123.456.789-10']['valor'], 600);


foreach($contas as $cpf => $conta){
    quebrarLinha($cpf . " - " . $conta['titular'] . " = " . $conta['valor']);
}

