<?php

$soma = 0;
do {
    $sorte = rand(0,100);
    $soma = $soma + $sorte;
    echo "$soma <br>";
} while ($soma<1000);