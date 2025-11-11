cake = [1, 60, 50, 55] # ei, gram boter, gram suiker, gram bloem
portie_amount = 4

def calc_ei(mult):
    return cake[0] * mult

def calc_boter(mult):
    return cake[1] * mult

def calc_suiker(mult):
    return cake[2] * mult

def calc_bloem(mult):
    return cake[3] * mult

def portie_van(portie_grootte):
    mult = portie_grootte / portie_amount
    ei = calc_ei(mult)
    boter = calc_boter(mult)
    suiker = calc_suiker(mult)
    bloem = calc_bloem(mult)
    print(f"Voor een portie van {portie_grootte} heb ik {ei} eieren, {boter}g boter, {suiker}g suiker, {bloem}g bloem nodig.")
    return ei, boter, suiker, bloem

ei_1, boter_1, suiker_1, bloem_1 = portie_van(12)
ei_2, boter_2, suiker_2, bloem_2 = portie_van(24)
ei_3, boter_3, suiker_3, bloem_3 = portie_van(52)

ei_tot = ei_1 + ei_2 + ei_3
boter_tot = boter_1 + boter_2 + boter_3
suiker_tot = suiker_1 + suiker_2 + suiker_3
bloem_tot = bloem_1 + bloem_2 + bloem_3

print(f"In totaal heb ik {(ei_tot):.0f} eieren, {(boter_tot):.1f}g boter, {(suiker_tot):.1f}g suiker, {(bloem_tot):.1f}g bloem nodig.")
