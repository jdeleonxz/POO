<?php
require_once('account.php');
class Car{
    public $id;
    public $placa;
    public $driver;
    protected $passenger;

    public function __construct($placa,$driver)
    {
        $this->_placa=$placa;
        $this->_driver=$driver;
    }

    public function printDataCar(){
        echo "Licencia: $this->placa 
        Conductor: {$this->driver->name}
        Número de pasajeros: $this->passenger";
    }

    public function getPassenger() {
        return $this->passenger;
    }

    public function setPassenger() {
        if ($passenger ==4) {
            $this->passenger = $passenger;
        }
        else {
            echo "La capacidad es de 4 pasajeros";
        }
    }
}