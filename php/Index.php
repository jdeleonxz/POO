<!-- {
    public function run()
    {
        $car = new Car("JKL192", new Account("Andrea Bolaño", "1004461449"));
        $car->setPassengers(4);
        return $car;


    }

    public function mostrarDatos(Car $car)
    {
        echo "
            <html>
                <head>
                <title>Objeto Car - Practica</title>
                </head>
                <body>
                    <table border = 1>
                    <tr><th colspam=2>OBJETO CAR</th></tr>
                    <tr><th>Nro.Placa:</th><th>{$car->GetPlaca()}</th></tr>
                    <tr><th colspam=2>OBJETO DRIVER</th></tr>
                    <tr><td>Conductor:</td><td>{$car->GetDriver()->getNombre()}</td></tr>
                    <tr><td>Nro Placa:</td><td>{$car->getDriver()->GetDocument()}</td></tr>
                    </table>
                </body>
            </html>
        ";
    }
} -->

<?php
require_once('car.php');
require_once('uberX.php');
require_once('account.php');
require_once('uberBan.php')

// $uber4 = new UberX("LAJ923", new Account("Andrea Bolaño", "1004461449"), "Volkswagen", "Gol");
// $uber4->printDataCar();


$uberVan2 = new UberVan("JAH839", new Account("Jorge De León", "1010245437"), "Volkswagen", "Voyage");
$uberVan2->setPassenger(6);
$uberVan->printDataCar();


?>
