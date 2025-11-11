boodschappenlijstje = ["bloem", "ei", "boter", "ei", "melk", "vanille", "suiker", "boter", "cacao", "walnoten", "boter","melk", "ei"]

def boodschappelijst(boodschappen, product):
    tel = 0
    for x in boodschappen:
        if x == product:
            tel += 1

    print(f"{product} komt {tel} keer voor in de boodschappenlijst.")

boodschappelijst(boodschappenlijstje, "boter")
boodschappelijst(boodschappenlijstje, "ei")
boodschappelijst(boodschappenlijstje, "melk")
