<?php

    require 'Conta.php';
    echo "\n\tContador antes " . Conta::$contador .PHP_EOL;
    $conta1 = new Conta();
    $conta1->criaConta();

    echo "\n\tContador primeira ". Conta::$contador . PHP_EOL;
    $conta2 = new Conta();
    echo "\n\tContador segunda ".  Conta::$contador .PHP_EOL;
 ?>
