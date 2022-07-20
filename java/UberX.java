package POO.java;

class UberX extends Car {
    String marca;
    String modelo;

    public UberX(String placa, Account driver, String marca, String modelo){
        super(placa, driver);
        this.marca = marca;
        this.modelo = modelo;
    }
}