def faculteit(fac):
    i = 1

    for j in range(1, fac+1):
        i *= j

    return i

oorsprong = int(input("Van welke getal wil je de faculteit weten? "))

kut = faculteit(oorsprong)

print(kut)
