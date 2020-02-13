<?php

$soma = $_GET ["soma"];
$res = 0;
for ($i=0; $i<$soma+1 ; $i++) { 
    $res = $res + $i;
}
echo "A soma de todos os numeros de 1 até $soma é $res";