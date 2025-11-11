from rewards import get_new_skin

common,rare,epic,legendary = 0,0,0,0

for i in range(5):
    skin = get_new_skin()

    if skin == "COMMON":
        common += 1
    if skin == "RARE":
        rare += 1
    if skin == "EPIC":
        epic += 1
    if skin == "LEGENDARY":
        legendary += 1

if common > 0:
    print(f"{common}x common")
if rare > 0:
    print(f"{rare}x rare")
if epic > 0:
    print(f"{epic}x epic")
if legendary > 0:
    print(f"{legendary}x legendary")