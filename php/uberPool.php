<?php
require_once('car.php');
class UberPool extends Car{
    public $marca;
    public $modelo;

    public function __contruct($placa, $driver, $marca, $modelo){
        parent::__construct($placa, $driver);
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    
}
?>