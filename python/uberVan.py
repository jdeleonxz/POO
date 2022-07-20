from car import Car

class UberBlack(Car):
    typeCarAccepted = []
    seatMaterial    = []

    def __init__(self, placa, driver, typeCarAccepted, seatMaterial):
        super.__init__(placa, driver)
        self.typeCarAccepted = typeCarAccepted
        self.seatMaterial    = seatMaterial