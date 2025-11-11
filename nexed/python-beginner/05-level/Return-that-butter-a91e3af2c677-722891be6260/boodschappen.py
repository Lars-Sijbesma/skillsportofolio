boodschappenlijstje = ["bloem", "ei", "boter", "ei", "melk", "vanille", "suiker", "boter", "cacao", "walnoten", "boter","melk", "ei"]

def boodschappelijst(boodschappen, product):
    tel = 0
    for x in boodschappen:
        if x == product:
            tel += 1

    return tel

boter = boodschappelijst(boodschappenlijstje, "boter")

print(f"In totaal heb ik {boter+3} pakjes boter nodig.")
