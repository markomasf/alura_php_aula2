<?php

$idades = [21, 30, 33, 34, 20, 31, 22, 23];

list($idadeMarco, $idadeLorene, $idadeLarissa) = $idades;

echo $idadeLorene . PHP_EOL;

for ($i = 0; $i < count($idades); $i++) {
    echo $idades[$i] . PHP_EOL;
}
