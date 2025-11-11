inp = None

res = {}

while inp is None or inp.lower() != "uitslag":
    inp = input("Op wie wil je stemmen? ")
    if inp is None or inp == "":
        continue

    inp = inp.lower()

    if inp == "uitslag":
        break

    if inp not in res:
        res[inp] = 1
    else:
        res[inp] += 1

stemmen = dict(sorted(res.items(), key=lambda item: item[1]))

winners = []
winners_aantal = 0

for stem in stemmen:
    aantal = stemmen[stem]

    if aantal == winners_aantal:
        winners.append(stem)
    elif aantal > winners_aantal:
        winners.clear()
        winners.append(stem)
        winners_aantal = aantal

if len(winners) == 1:
    print(f"{winners[0]} heeft gewonnen!")
else:
    length = len(winners)
    s = ""
    for i in range(length):
        if i == length - 1:
            s += " en " + winners[i]
        else:
            if s == "":
                s = winners[i]
            else:
                s += ", " + winners[i]

    print(s, "hebben een gelijk aantal stemmen.")
