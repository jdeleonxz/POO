<?php
require_once('account.php');

class Driver extends Account {
    public function __contruct($name, $document, $email, $password){
        parent::__construct($placa, $driver);
        $this->email = email;
        $this->password = password;
    }
}