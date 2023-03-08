<?php

function quebrarLinha($mensagem)
{
    echo "$mensagem" . PHP_EOL;
}

function sacar(&$conta, $valor)
{
    if ($conta > $valor) {
        $conta -= $valor;
    } else {
        quebrarLinha("Não possui saldo para sacar!");
    }
    return $conta;
}

function depositar(&$conta, $valor)
{
    if ($valor < 0) {
        quebrarLinha("Não pode efetuar depósito negativo!");
    } else {
        $conta += $valor;
    }
    return $conta;
}
