<?php
require_once('car.php');
class UberBlack extends Car {
    public $typeCarAccepted;
    public $seatMaterial;

    public function __construct($placa, $driver, $typeCarAccepted, $seatMaterial){
        parent::__construct($placa, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatMaterial = $seatMaterial;
    }
}
?>