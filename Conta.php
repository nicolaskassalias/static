<?php
require_once 'lib/Carbon.php';
use Carbon\Carbon;
class Conta{
    public $numero;
    public $saldo;
    public $data;
    public static $contador=0;
    public function __construct(){
      echo "\n\tConstrui a conta".PHP_EOL;
      self::$contador++;
      $this->numero;
    }
    //static public function criaConta(){
    public function criaConta(){
      echo "\n\tOi" .PHP_EOL;
      $this->data = Carbon::createFromDate(1990,10,3);
      echo "\n\tConta: ". $this->numero .PHP_EOL;
      echo "\n\tData: ". $this->data .PHP_EOL;
      return new Conta;
    }
}

 ?>
