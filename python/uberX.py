from car import Car

class UberX(Car):
    marca   = str
    modelo  = str

    def __init__(self, placa, driver, marca, modelo):
        super.__init__(placa, driver)
        self.marca = marca
        self.modelo = modelo