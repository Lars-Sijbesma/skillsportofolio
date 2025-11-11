import random
import time

chips = 10

while chips > 0:
    inp = ""
    inzet = []
    print("Je hebt", str(chips), "chips!")
    print("Op welke nummers wil je inzetten?")
    while inp.lower() != "stop" and chips > 0:
        inp = input()
        try:
            i = int(inp)
            if i <= 35:
                inzet.append(int(inp))
                chips -= 1
        except ValueError:
            pass
    print("rien ne va plus")
    time.sleep(1)

    rand = random.randint(1, 36)
    print("de uitkomst is", str(rand), "!")
    gewonnen = 0
    for i in inzet:
        if i == rand:
            gewonnen += 35
    chips += gewonnen
    if chips == 0:
        break

print("GAME OVER")
