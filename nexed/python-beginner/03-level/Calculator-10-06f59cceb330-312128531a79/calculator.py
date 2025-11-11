print("Operatie?")
symbol = input("+,-,*,/")
getal1 = float(input("Eerste getal?"))
getal2 = float(input("Tweede getal?"))
if symbol == "+":
    print(getal1 + getal2)
elif symbol == "-":
    print(getal1 - getal2)
elif symbol == "*":
    print(getal1 * getal2)
elif symbol == "/":
    if getal2 != 0:
        print(getal1 / getal2)
    else:
        print("Kan niet delen door 0")
