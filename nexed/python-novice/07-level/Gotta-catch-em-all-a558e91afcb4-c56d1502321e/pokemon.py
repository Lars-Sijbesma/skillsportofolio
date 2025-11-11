import json
import mysql.connector
import requests

URL = 'https://pokeapi.co/api/v2/pokemon/'

# JE MOET USER EN PASSWORD AANPASSEN WAAG HET NIET OM EEN ISSUE TE MAKEN EROVER >:(
cnx=mysql.connector.connect(
    host="localhost",
    port=3306,
    user="bit_academy",
    password="bit_academy",
    database="python_novice"
)

cur = cnx.cursor()


cur.execute("DROP TABLE IF EXISTS pokemon")
cur.execute("CREATE TABLE pokemon(id SMALLINT, Name VARCHAR(50), Weight BIGINT, Height SMALLINT)")


def get_pokemon(pokemon_id):
    data = json.loads(requests.get(URL + str(pokemon_id)).content)
    pid = int(data["id"])
    name = data["name"]
    weight = int(data["weight"])
    height = int(data["height"])
    cur.execute(f"INSERT INTO pokemon (id, Name, Weight, Height) VALUES ({pid}, \"{name}\", {weight}, {height})")

for i in range(1, 151):
    get_pokemon(i)

print("Succes! Alle pokemon zijn gevangen!")

cnx.commit()

cnx.close()
