from lib2to3.pgen2 import driver
from car import Car
from account import Account

if __name__ == "__main__":
    print("PETRO PRESIDENTE FRANCIA VICEPRESIDENTA")

    # car = Car()
    # car.placa = "JQK918"
    # car.id = 1
    # car.passenger = 4
    # car.driver = "Jorge De León"

    car2 = Car("LAK172", Account("Andrea Bolaño", "1010245437"))
    print(vars(car2))
    print(vars(car2.driver))
