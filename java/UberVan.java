package POO.java;

import java.util.ArrayList;
import java.util.Map;

public class UberVan extends Car{
    Map<String, Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatMaterial;
    private Integer passengers;
    
    public UberVan(String placa, Account driver, Map<String, Map<String,Integer>> typeCarAccepted, ArrayList<String> seatMaterial){
        super(placa, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatMaterial = seatMaterial;
    }

    @Override
    public void setPassengers(Integer passengers) {
        if(passengers == 6){
            this.passengers = passengers;
            }else{
                System.out.println("Son 4 cupos para este tipo de servicio");
            }
    }

    
}
