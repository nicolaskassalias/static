<?php

    require 'Conta.php';
    require 'Conta1.php';
    echo "\n\tContador antes " . Conta::$contador .PHP_EOL;
    $conta = new Conta();
    $conta->criaConta();

    echo "\n\tContador primeira conta". Conta::$contador . PHP_EOL;
    echo "\n\tUsa static - Note que não existe new".PHP_EOL;
    $conta1 = Conta1::criaConta();
    echo "\n\tContador segunda ".  Conta1::$contador .PHP_EOL;
    //$conta1->criaConta();
    //echo " Conta static: " . Conta1::$numero .PHP_EOL;

    $conta1->mostra();
//
    $conta2 = Conta1::criaConta();
    echo "\n\tContador terceira ".  Conta1::$contador .PHP_EOL;

    $conta2->mostra();

    echo "\n\tSaldo inicial: $conta2->saldo".PHP_EOL;
    $conta2->deposito(1002.67);
    $conta2->mostrasaldo();
    //
    $conta2->deposito(300.00);
    $conta2->mostrasaldo();

 ?>
