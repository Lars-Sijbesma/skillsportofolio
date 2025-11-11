x = int(input("Wat is de score van speler 1? "))
y = int(input("Wat is de score van speler 2? "))
if y < x :
    print("Speler 1 heeft gewonnen")
elif x < y:
    print("Speler 2 heeft gewonnen")
else:
    print("Gelijkspel")
