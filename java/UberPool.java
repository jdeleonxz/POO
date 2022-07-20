package POO.java;

public class UberPool  extends Car{
    String marca;
    String modelo;

    public UberPool(String placa, Account driver, String marca, String modelo){
        super(placa, driver);
        this.marca = marca;
        this.modelo = modelo;
    }
}
