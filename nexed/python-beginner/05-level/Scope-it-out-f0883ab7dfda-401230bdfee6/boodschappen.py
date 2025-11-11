boodschappen = ["bloem", "ei", "boter", "melk", "vanille", "suiker"]

def overschrijf_boodschappen(lijst):
    lijst = ["wafels", "vruchtenhagel", "kwark"]
    print (lijst)

def modify_boodschappen(product):
    product.remove("boter")
    product.append("kaarsjes")
    product.append("fondant")

print (boodschappen)
overschrijf_boodschappen(boodschappen)
print(boodschappen)
modify_boodschappen(boodschappen)
print(boodschappen)
print(boodschappen)
