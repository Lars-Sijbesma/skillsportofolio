def verdeel_boodschappen(boodschappen):
    lijst1 = []
    lijst2 = []


    for i, item in enumerate(boodschappen):
        if i % 2 == 0:
            lijst1.append(item)
        else:
            lijst2.append(item)

    return lijst1, lijst2



boodschappenlijst = [
    'bloem', 'ei', 'boter', 'ei', 'melk', 'vanille','suiker',
    'boter', 'walnoten', 'boter', 'melk','ei', 'kaarsjes', 'fondant'
]

tim, youssef = verdeel_boodschappen(boodschappenlijst)

print("Tim's lijst is:", tim)
print("Youssef's lijst is:", youssef)
