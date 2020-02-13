<?php

$numero = $_GET["numero"];
for ($i=0; $i<10; $i++) { 
    $soma=$numero*$i;
    echo "$numero X $i = $soma<br>";
}