import datetime
import os
import random

from vechter import *
from time import sleep
import logging

logger = logging.getLogger(__name__)
os.mkdir("logs") if not os.path.exists("logs") else None
fileName = f"logs/{datetime.date.today().strftime('%I:%M%p on %B %d, %Y')}.log".replace(" ", "_")
logging.basicConfig(level=logging.INFO, filename=fileName, filemode="w", format="%(asctime)s - %(name)s - %(levelname)s - %(message)s")

logger.info("Start project-game.py")

# clear de terminal voor nieuwe tekst
def clear():
    if os.name == "nt":
        os.system("cls")
    else:
        os.system("clear")

# Aliens en aanvallen
aliens = [
    Vechter("Heatblast", 300, 0, [Aanval("Vuurbal", 50), Aanval("Vlammenwerper", 100), Aanval("Supernova", 300)]),
    Vechter("Four Arms", 500, 0, [Aanval("Vier-arm mep", 100), Aanval("Klap shockgolf", 200), Aanval("Steen worp", 400)]),
    Vechter("XLR8", 200, 0, [Aanval("Snelle slag", 50), Aanval("Cycloon", 150), Aanval("Hoge snelheids tackle", 200)]),
    Vechter("Diamondhead", 800, 0, [Aanval("Diamand scherven", 70), Aanval("Genezen", 150, True), Aanval("Zwaard snede", 400)]),
    Vechter("Ripjaws", 200, 0, [Aanval("Bijt", 50), Aanval("Snede", 100), Aanval("Draaikolk", 200)]),
    Vechter("Upgrade", 300, 0, [Aanval("Energie laser", 50), Aanval("Genezen", 150, True), Aanval("Technische fusie aanval", 300)]),
    Vechter("Ghostfreak", 300, 0, [Aanval("Fase aanval", 90), Aanval("Schaduw Grip", 160), Aanval("Bezitting", 200)]),
    Vechter("Wildmutt", 300, 0, [Aanval("Sprong", 50), Aanval("Blaff", 100), Aanval("Klauw veeg", 200)]),
    Vechter("Stinkfly", 250, 0, [Aanval("Slijm schot", 50), Aanval("Giftige spray", 100), Aanval("Lucht aanval", 250)]),
    Vechter("Greymatter", 100, 0,[Aanval("Gadget gebruik", 50), Aanval("Snel hack", 100), Aanval("Lange afstand bomb", 200)]),
]


# Nieuwe aliens en hun aanvallen

te_ontgrendelen = [
    Vechter("Cannonbolt", 800, 0, [Aanval("Rollende beuk", 100), Aanval("Versnelde beuk", 170), Aanval("Kanonbal", 500)]),
    Vechter("Wildvine", 350, 0, [Aanval("Genezen", 200, True), Aanval("Plant aanval", 80), Aanval("Zaadbom", 400)]),
    Vechter("Spitter", 300, 0, [Aanval("Gifbal", 70), Aanval("Gifraket", 140), Aanval("Gifstroom", 400)]),
    Vechter("Buzzshock", 250, 0, [Aanval("Stroomshock", 80), Aanval("Multistroomstoot", 150), Aanval("Gigavoltbom", 500)]),
    Vechter("Articguana", 400, 0, [Aanval("Trap", 70), Aanval("Ijsvloer", 120), Aanval("Ijsstraal", 400)]),
    Vechter("Blitzwolfer", 500, 0, [Aanval("Klauw", 70), Aanval("Jagen", 130), Aanval("Sonische huil", 400)]),
    Vechter("Upchuck", 200, 0, [Aanval("Eten", 60), Aanval("Tong", 110), Aanval("Energiebom", 300)]),
    Vechter("Snare-Oh", 400, 0, [Aanval("Binding", 80), Aanval("Binding worp", 140), Aanval("Wikkel combo", 400)]),
    Vechter("Frankenstrike", 500, 0, [Aanval("Elektrische mep", 80), Aanval("Elektrische beuk", 150), Aanval("Bliksemschicht", 500)]),
    Vechter("Ditto", 200, 0, [Aanval("Kloon worp", 70), Aanval("Kloon lichaamsstapel", 120), Aanval("Kloon combo", 300)]),
    Vechter("Eye Guy", 450, 0, [Aanval("Elektrische shock", 90), Aanval("Energielaser", 140), Aanval("Mega laser", 500)]),
    Vechter("Waybig", 1000, 0, [Aanval("Stomp", 600), Aanval("Ruimteworp", 1000), Aanval("Ruimte laser", 10000)]),
    Vechter("Swampfire", 500, 0, [Aanval("Genezen", 200, True), Aanval("Vuurbal", 150), Aanval("Vlam uppercut", 500)]),
    Vechter("Echo Echo", 350, 0, [Aanval("Sonische schreeuw", 100), Aanval("Kloon schreeuw", 180), Aanval("Muur van geluid", 500)]),
    Vechter("Humungosaur", 600, 0, [Aanval("Mep", 200), Aanval("Truckworp", 400), Aanval("Vergrotingsstamp", 700)]),
    Vechter("Jetray", 300, 0, [Aanval("Ooglaser", 80), Aanval("Staartlaser", 120), Aanval("Hypersnelheid", 300)]),
    Vechter("Big Chill", 350, 0, [Aanval("Ijslijf", 80), Aanval("Ijsadem", 120), Aanval("Ijskristallen", 300)]),
    Vechter("Chromastone", 350, 0, [Aanval("Energiestraal", 80), Aanval("Energiekogels", 130), Aanval("Vliegende straal", 300)]),
    Vechter("Brainstorm", 300, 0, [Aanval("Miljoen IQ-schot", 70), Aanval("Elektrische hand", 110), Aanval("Brein elektrische stoot", 300)]),
    Vechter("Spidermonkey", 300, 0, [Aanval("Dropkick", 70), Aanval("Webben", 100), Aanval("Parkour combo", 200)]),
    Vechter("Goop", 400, 0, [Aanval("Genezen", 400, True), Aanval("Gifschot", 200), Aanval("Gifexplosie", 300)]),
    Vechter("Alien X", 1000000000000000000000000, 0, [Aanval("Mep", 1000000000000000), Aanval("Reality breken", 10000000000000000000), Aanval("Universum reset", pow(2,63))]),
    Vechter("Nanomech", 100, 0, [Aanval("Mini laser", 50), Aanval("Multi laser", 80), Aanval("Sluip aanval", 150)]),
    Vechter("Lodestar", 300, 0, [Aanval("Put deksel schot", 80), Aanval("Magneet trek mep", 130), Aanval("Multi magneet explosie", 300)]),
    Vechter("Rath", 500, 0, [Aanval("Uppercut", 90), Aanval("Sheer cosmic drop", 150), Aanval("IK ZAL JE EENS WAT ZEGGEN!", 500)]),
    Vechter("Waterhazard", 400, 0, [Aanval("Water stroom", 80), Aanval("Water orkaan", 130), Aanval("Kokend water stroom", 350)]),
    Vechter("Ampfibian", 400, 0, [Aanval("Elektrische shock", 80), Aanval("Fasende stroom", 140), Aanval("Megavolt knal", 400)]),
    Vechter("Armodrillo", 500, 0, [Aanval("Boor", 100), Aanval("Impact boor", 200), Aanval("Spleet", 600)]),
    Vechter("Terraspin", 400, 0, [Aanval("Beyblade", 80), Aanval("Vliegdraai", 130), Aanval("Wervelwind", 300)]),
    Vechter("NRG", 400, 0, [Aanval("Radiatieschot", 100), Aanval("Pak explosie", 200), Aanval("Radiatie superbom", 600)]),
    Vechter("Fasttrack", 200, 0, [Aanval("Snelle mep", 60), Aanval("Windmep", 110), Aanval("Sonische knal", 200)]),
    Vechter("Chamalien", 200, 0, [Aanval("Onzichtbare mep", 60), Aanval("Staartmep", 110), Aanval("Gifstaart steek", 200)]),
    Vechter("Clockwork", 500, 0, [Aanval("Langzame tijd", 100), Aanval("Versnelde tijd", 200), Aanval("Tijdcontrole aanval", 500)]),
    Vechter("Jury Rig", 200, 0, [Aanval("Geweer", 70), Aanval("Bazooka", 120), Aanval("Robotleger", 300)]),
    Vechter("Shocksquatch", 400, 0, [Aanval("Volt mep", 80), Aanval("Volt grond", 130), Aanval("Elektrische god modus aanval", 500)]),
    Vechter("Feedback", 400, 0, [Aanval("Volt mep", 70), Aanval("Contact kabels", 130), Aanval("Ultra volt explosie", 500)]),
    Vechter("Bloxx", 400, 0, [Aanval("Aardbeving", 90), Aanval("Herstel", 200, True), Aanval("Bal impact", 300)]),
    Vechter("Gravattack", 800, 0, [Aanval("Zwaartekracht verlies", 100), Aanval("Zwaartekracht impact", 200), Aanval("Zwart gat", 10000, False, False, True, )]),
    Vechter("Crashhopper", 400, 0, [Aanval("Kopstoot", 90), Aanval("Sprong trap", 130), Aanval("Sprong kopstoot", 400)]),
    Vechter("Ball Weevil", 200, 0, [Aanval("Balschot", 80), Aanval("Rolbal", 130), Aanval("Giga explosie bal", 500)]),
    Vechter("Walkatrout", 1000000, 0, [Aanval("Vis trap", 1), Aanval("Glei", 1), Aanval("Paniek", 1)]),
    Vechter("Pesky Dust", 200, 0, [Aanval("Vlieg", 50), Aanval("Slaapstof", 70), Aanval("Slaap", 90)]),
    Vechter("Mole-Stache", 200, 0, [Aanval("Scherpe snor", 80), Aanval("Snorimpact", 120), Aanval("Snor boor", 200)]),
    Vechter("The Worst", 1000000000000000000000000000000000000000000000000000000000000000000000000, 0, [Aanval("Trap", 0), Aanval("Worp", 0), Aanval("Mep", 0)]),
    Vechter("Kickin Hawk", 300, 0, [Aanval("Kungfu trap", 80), Aanval("Wervelwind trap", 130), Aanval("Ultieme trap combo", 300)]),
    Vechter("Toepick", 200, 0, [Aanval("Mep", 70), Aanval("Kopstoot", 90), Aanval("Open masker", 400)]),
    Vechter("Astrodactyl", 400, 0, [Aanval("Zweep slag", 90), Aanval("Energie schreeuw", 130), Aanval("Energie explosie", 400)]),
    Vechter("Bullfrag", 300, 0, [Aanval("Sprong trap", 80), Aanval("Tong mep", 120), Aanval("Incursaen combo", 300)]),
    Vechter("Atomix", 800, 0, [Aanval("Atomische impact", 200), Aanval("Atomische raket", 400), Aanval("Nuclear Winnaar", 1000, False, True)]),
    Vechter("Gutrot", 300, 0, [Aanval("Zwavel zuur gas", 80), Aanval("Mosterd gas", 130), Aanval("Gif gas", 300)]),
    Vechter("Whampire", 400, 0, [Aanval("Orgaan eten", 150, True), Aanval("Hersen spoel", 120), Aanval("Hersen spoel leger aanval", 400)]),
    Vechter("Shock rock", 400, 0,[Aanval("Herstel", 150, True), Aanval("bliksem schot", 120), Aanval("Electrische vorm", 400)]),
    Vechter("Gax", 500, 0,[Aanval("Mep", 100,), Aanval("laser ogen", 150), Aanval("aardbeving", 400)]),
    Vechter("Slap back", 400, 0,[Aanval("clone", 100), Aanval("clone combo", 130), Aanval("lichaamstapel", 400)]),

]

vijanden = [
    Vijand("Vilgax drone", 300, 0, [Aanval("laser", 150)]),
    Vijand("Hex", 400, 0, [Aanval("bliksem", 130), Aanval("Magische shock", 200), Aanval("Energie explosie", 400)]),
    Vijand("Albedo", 500, 0, [Aanval("Alien aanval", 300), Aanval("evolutie alien aanval", 400), Aanval("Ultieme alien aanval", 500)]),
    Vijand("Charmcaster", 400, 0, [Aanval("steen monsters", 130), Aanval("Explosie", 200), Aanval("Energie explosie", 400)]),
    Vijand("Michael Morningstar", 500, 0, [Aanval("bliksem", 130), Aanval("energie absorptie", 200, True), Aanval("Energie explosie", 400)]),
    Vijand("Eon", 500, 0, [Aanval("tijd zwaard", 150), Aanval("tijd laser", 200), Aanval("Energie explosie", 400)]),
    Vijand("Zs'skayr", 450, 0, [Aanval("zeis snede", 130), Aanval("bezitting", 200), Aanval("telekinese", 400)]),
    Vijand("Attea", 300, 0, [Aanval("tong mep", 120), Aanval("geweer schot", 170), Aanval("armada laser", 500)]),
    Vijand("Malware", 500, 0, [Aanval("herstel", 150, True), Aanval("Kanon", 200), Aanval("Energie explosie", 400)]),
    Vijand("Vilgax", 1000, 0, [Aanval("Mep", 300), Aanval("aardbeving", 300), Aanval("Vilgaxian aanval", 600)]),
    Vijand("Dr. Animo", 300, 0, [Aanval("Mep", 100), Aanval("mutant aanval", 200), Aanval("Dieren mutant bespringing", 400)]),
    Vijand("Dagon", 1000, 0,[Aanval("Mep", 300), Aanval("Dimensie parasieten", 400), Aanval("Dimensie laser", 500)]),
    Vijand("Aggregor", 500, 0,[Aanval("Mep", 200), Aanval("staf slag", 250), Aanval("Absorptie aanval", 500)]),
    Vijand("Ultieme Kevin", 700, 0, [Aanval("Mep", 300), Aanval("Energie laser", 400), Aanval("Dna aanval", 700)]),
    Vijand("Grote teek", 1000, 0, [Aanval("Mep", 200), Aanval("Gif", 300), Aanval("planeet zuiging", 300)]),

]


alien: Vechter | None = None
vijand: Vijand | None = None
beurt = 0
eerste_transformatie = True
meester_controle = False

rondes_als_alien_over = 5

def get_glitch_transform(o):
    g = None

    while g is None or g == o or (g is not None and g.HP == 0):
        g = random.choice(aliens)

    return g


def main():
    global beurt, vijand
    vechtend = True

    def speler_beurt():
        global aliens, alien, beurt, eerste_transformatie, te_ontgrendelen, vijand, meester_controle, rondes_als_alien_over

        clear()

        mag_aanvallen = True

        if alien is not None:
            if alien.HP == 0:
                mag_aanvallen = False

            rondes_als_alien_over -= 1

            if rondes_als_alien_over == 0 and not meester_controle:
                logger.info(("rondes als",alien.naam,"over"))
                print("Je transformeert terug")
                alien.HP = 0
                alien = None

        heeft_nog_aliens = False
        for a in aliens:
            if a.HP > 0:
                heeft_nog_aliens = True
                break

        if not heeft_nog_aliens:
            logger.info(("omnitrix ontgrendelt een alien"))
            alien = random.choice(te_ontgrendelen)
            te_ontgrendelen.remove(alien)
            aliens.append(alien)
            print("De omnitrix heeft", alien.naam, "ontgrendeld!")
            logger.info(("speler krijgt", alien.naam))
            sleep(2)

        if alien is None:
            #
            # SPELER KIEST EERSTE TRANSFORMATIE
            #

            # speler heeft nog geen alien gekozen
            if eerste_transformatie:
                logger.info("eerste transformatie door speler")
                print(f"Je wordt aangevallen door {vijand.naam} snel transformeer!")
                eerste_transformatie = False
            else:
                logger.info("transformatie door speler")
                print("Snel transformeer opnieuw!")
            print("Maak je keuze: ")

            # STAPPEN
            # 1. random getal
            # 2. check of het een glitch is of niet
            # 3. als geglitched laat de speler eerst kiezen en maak dan een andere keuze
            # 4. als niet geglitched laat de speler zn gang gaan

            #Alien kiesen
            i = 0
            for a in aliens:
                print(i+1, a.naam)
                i += 1
            keuze = None
            while keuze is None:
                t = input()
                if t.isnumeric():
                    keuze = int(t)-1
                    if keuze < 0 or keuze >= len(aliens):
                        print("Dat is geen geldige keuze!")
                        keuze = None
                else:
                    print("Dat is geen getal!")
                    keuze = None


            logger.info(("speler kiest alien #",keuze))

            # Kans op mistransformatie
            randomet = random.randint(1, 100)
            if randomet <= 70 and not meester_controle:
                mistransformed_alien:Vechter = get_glitch_transform(aliens[keuze])
                logger.info(("speler krijgt mistransformatie van",mistransformed_alien.naam))
                print("Je bent verandert in", mistransformed_alien.naam, "in plaats van", aliens[keuze].naam, "!")
                alien = mistransformed_alien
                mag_aanvallen = False
            else:
                alien = aliens[keuze]
                logger.info(("speler krijgt geldige transformatie van",alien.naam))
                print("Jij bent in", alien.naam, "getransformeerd!")
                mag_aanvallen = True

            rondes_als_alien_over = 5

            beurt = 1



        if mag_aanvallen is True:
            #
            # SPELER IS AAN DE BEURT EN GEBRUIKT EEN AANVAL
            #

            logger.info(("speler aanval als",alien.naam))

            print("Je bent nu", alien.naam, "welke aanval wil je gebruiken?")

            i = 0
            for aanval in alien.aanvallen:
                print(i+1, aanval.naam)
                i += 1

            keuze = None
            while keuze is None:
                t = input("Kies een aanval: ")
                if t.isnumeric():
                    keuze = int(t)-1
                else:
                    print("Dat is geen getal!")
                    keuze = None
                if keuze is None or (keuze < 0 or keuze >= len(alien.aanvallen)):
                    print("Dat is geen geldige keuze!")
                    keuze = None

            aanval = alien.aanvallen[keuze]
            logger.info(("speler aanval",aanval.naam))

            if aanval.eindig:
                exit(print("Je verliest!"))
            elif aanval.heal:
                logger.info(("speler aanval heeft heel zijns gehealt voor", aanval.schade, "punten"))
                print("Jij gebruikte", aanval.naam, "je heeft", aanval.schade, "punten terug gekregen!")
                alien.HP = min(alien.HP + aanval.schade, alien.max_hp)
                logger.info(("speler heeft nu", alien.HP, "punten"))
                print("Je hebt", alien.HP, "punten!")
            elif aanval.zelfmoord:
                logger.info(("speler pleegt zelfmoord"))
                alien.HP = 0
                vijand.HP = 0
                print("Je gebruikt", aanval.naam, "en je tranformeert terug en neemt",vijand.naam,"mee")
            else:
                logger.info(("speler aanval heeft gehealt voor", aanval.schade, "punten"))
                print("Jij gebruikt", aanval.naam, "je doet", aanval.schade, "punten schade!")

                vijand.HP = max(vijand.HP - aanval.schade, 0)
                logger.info(("vijand heeft nu", vijand.HP, "punten HP"))

            if vijand.HP == 0:
                logger.info(("vijand is dood"))
                print("Je hebt", vijand.naam, "verslagen!")
                vijanden.remove(vijand)
                if len(vijanden) == 0:
                    logger.info(("alle vijanden zijn verslagen"))
                    print("Je hebt alle vijanden verslagen!")
                    sleep(2)
                    print("Je hebt gewonnen")
                    exit(0)
                vijand = vijanden[0]
                logger.info(("vijand is nu", vijand.naam))
                print("Je ziet in de verte", vijand.naam, "naar je toe rennen!")
                sleep(2)
            else:
                print(vijand.naam, "heeft", vijand.HP, "punten HP over!")
                sleep(5)

            beurt = 1
            return

        if alien.HP == 0:
            logger.info(("speler transformatie is dood"))
            print("Je transformeert terug")
            sleep(2)
            print("Je draait aan de omnitrix")

            rand = random.randint(1, 100)

            logger.info(("omnitrix rolt",rand))

            if not meester_controle:
                if rand < 9:
                    logger.info(("speler krijgt meester controle (fuck)"))
                    # resultaat 4 (meester controle)
                    for a in te_ontgrendelen:
                        aliens.append(a)
                    print("De omnitrix begint te gloeien!")
                    sleep(2)
                    print("De omnitrix heeft meester controle ontgrendeld!")
                    sleep(2)
                    print("Je kan nu in elke alien transformeren")
                    alien = None
                    meester_controle = True
                    sleep(2)
                elif rand < 10:
                    logger.info(("omnitrix blaast op"))
                    # resultaat 3 (boom)
                    print("Je hoort de omnitrix piepen")
                    sleep(2)
                    print("De omnitrix explodeerd!")
                    sleep(2)
                    print("Je bent dood!")
                    exit(0)
                elif rand < 50:
                    logger.info(("omnitrix geeft willekeurige transformatie"))
                    # resultaat 2 (willekeurige transformatie)
                    r:Vechter|None = None
                    while r is None or r.HP == 0:
                        r = random.choice(aliens)
                    alien = r
                    print("Je bent in", alien.naam, "getransformeerd!")
                    logger.info(("speler wordt",alien.naam))
                    sleep(2)
                elif rand < 90 and not meester_controle:
                    logger.info(("omnitrix ontgrendelt een alien"))
                    alien = random.choice(te_ontgrendelen)
                    te_ontgrendelen.remove(alien)
                    aliens.append(alien)
                    print("De omnitrix heeft", alien.naam, "ontgrendeld!")
                    logger.info(("speler krijgt",alien.naam))
                    sleep(2)
                else:
                    logger.info(("niks gebeurt, speler kiest nieuwe transformatie"))
                    # resultaat 1 (opnieuw transformeren) (hoef niks te doen lol)
                    alien = None
                    speler_beurt()
                    sleep(2)
                    pass
            else:
                alien = None
                speler_beurt()
                sleep(2)
                pass

    def vijand_beurt():
        global beurt, vijand, alien
        clear()
        print(vijand.naam, "maakt zich klaar om je aan te vallen!")
        sleep(1.5)

        if len(vijand.aanvallen) == 1:
            aanval = vijand.aanvallen[0]
        else:
            aanval = random.choice(vijand.aanvallen)

        print(vijand.naam, "gebruikt", aanval.naam)
        logger.info(("vijand aanval",aanval.naam))

        miss_chance = random.random()

        if miss_chance <= 0.1 and not aanval.heal:
            logger.info(("vijand aanval mist"))
            print(vijand.naam + "'s aanval mist!")
        else:
            if aanval.heal:
                vijand.HP = min(vijand.HP + aanval.schade, vijand.max_hp)
                print(vijand.naam, "heeft", aanval.schade, "punten HP hersteld!")
                logger.info(("vijand heeft geheald voor", aanval.schade, "en heeft nu", vijand.HP, "punten"))
                sleep(2)
            else:
                alien.HP = max(alien.HP - aanval.schade, 0)
                print("Je wordt geraakt voor", aanval.schade, "punten schade!")
                logger.info(("vijand doet", aanval.schade, "punten schade"))
                if alien.HP == 0:
                    logger.info(("speler transformatie is dood"))
                    print("Je veranderd terug naar je menselijke vorm!")
                else:
                    logger.info(("speler heeft nu", alien.HP, "HP"))
                    print("Je hebt nog", alien.HP, "HP!")

        beurt = 0

        sleep(2.5)

    random.shuffle(vijanden)

    vijand = vijanden[0]

    clear()
    while vechtend:
        if beurt == 0:
            # speler beurt
            logger.info("Speler beurt")
            speler_beurt()
            pass
        elif beurt == 1:
            # vijand beurt
            logger.info("Vijand beurt")
            vijand_beurt()
            pass

if __name__ == "__main__":
    try:
        logger.info("Game started")
        main()
    except KeyboardInterrupt:
        logger.info("Game stopped")
        clear()
        print("Game over!")