package POO.java;

public class Car {
    private Integer id;
    private String placa;
    private Account driver;
    private Integer passengers;


    public Car(String placa, Account driver){
        this.placa = placa;
        this.driver = driver;
    }

    void printDataCar() {
        System.out.println("Placa: " + placa + " Conductor: " + driver.name);
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getPlaca() {
        return placa;
    }

    public void setPlaca(String placa) {
        this.placa = placa;
    }

    public Account getDriver() {
        return driver;
    }

    public void setDriver(Account driver) {
        this.driver = driver;
    }

    public Integer getPassengers() {
        return passengers;
    }

    public void setPassengers(Integer passengers) {
        if(passengers == 4){
        this.passengers = passengers;
        }else{
            System.out.println("Son 4 cupos para este tipo de servicio");
        }
    }
    
}
