package POO.java;

import java.util.ArrayList;
import java.util.Map;

public class UberBlack extends Car {
    Map<String, Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatMaterial;
    
    public UberBlack(String placa, Account driver, Map<String, Map<String,Integer>> typeCarAccepted, ArrayList<String> seatMaterial){
        super(placa, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatMaterial = seatMaterial;
    }
}
