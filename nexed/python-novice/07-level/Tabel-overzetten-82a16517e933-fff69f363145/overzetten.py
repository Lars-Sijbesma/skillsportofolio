import json
import mysql.connector

conn = mysql.connector.connect(
    host="localhost",
    user="bit_academy",
    passwd="bit_academy",
    database="python_novice"
)
cursor = conn.cursor()

data = {}

with open("gebruikers.json", "r") as f:
    data = json.load(f)

    f.close()

for d in data:
    print(d)
    cursor.execute("INSERT INTO users(name, gender, age, fav_color) VALUES (%s, %s, %s, %s)", (d["name"], d["gender"], d["age"], d["fav_color"]))

conn.commit()
cursor.close()
conn.close()
