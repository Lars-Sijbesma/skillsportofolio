import json

class Aanval:
    def __init__(self, naam, schade, heal=False, zelfmoord=False, eindig=False):
        self.naam = naam
        self.schade = schade
        self.heal = heal
        self.zelfmoord = zelfmoord
        self.eindig = eindig

# Vechter classe
class Vechter:
    def __init__(self, naam:str, max_hp:int, schade:int, aanval:list=None):
        self.naam = naam
        self.HP = max_hp
        self.max_hp = max_hp
        self.schade = schade
        self.aanvallen = aanval

    def take_damage(self, aanval:Aanval):
        if not aanval.heal:
            self.HP -= aanval.schade
            self.HP = max(self.HP, 0)
            print(f"{self.naam} krijgt {aanval.schade} schade! Resterend HP: {self.HP}")
        else:
            self.HP = min(self.HP + aanval.schade, self.max_hp)
            print(f"{self.naam} krijgt {aanval.schade} HP! Resterend HP: {self.HP}")

    def levend(self):
        return self.HP > 0

class Vijand(Vechter):
    pass