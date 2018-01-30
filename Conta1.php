<?php
declare(strict_types = 1);
require_once 'lib/Carbon.php';
use Carbon\Carbon;
class Conta1{
    public $numero;
    public $saldo=0;
    public $data;
    public static  $contador=0;
    public function __construct(){
      echo "\n\tConstrui a conta".PHP_EOL;
      self::$contador++;
      $this->numero = self::$contador;
      // NÃO pode $this->$contador;
      //$this->numero;
    }
    static public function criaConta(){
      return new Conta1();
    }

     public function mostra(){
      echo "\n\tOlá" .PHP_EOL;
    //  $this->data = Carbon::createFromDate(1990,10,3);
    echo "\n\tNúmero da conta: ". $this->numero .PHP_EOL;
    //  echo "\n\tData: ". $this->data .PHP_EOL;

    }
    //
    public function saldo(){
      $this->setsaldo(100.51);
    }
    public function setSaldo( $s ){
      $this->saldo = $s;
      echo "\n\tsaldo: $this->saldo".PHP_EOL;
    }
    public function deposito (float $s){
      $this->saldo += $s;
    }
    public function mostraSaldo( ){
      echo "\n\tsaldo atual : $this->saldo".PHP_EOL;
    }

}

 ?>
