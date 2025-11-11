import sys
import mysql.connector
import pandas as pd

verzamelen_1 = mysql.connector.connect(
    host="localhost",
    user="bit_academy",
    password="bit_academy",
)


cur = verzamelen_1.cursor()
cur.execute("""
DROP DATABASE IF EXISTS `verzamelen_1`;
""")
cur.execute("""
CREATE DATABASE `verzamelen_1`;
""")
cur.execute("""
USE `verzamelen_1`;
""")

cur.execute("""
CREATE TABLE marathon (year INT, marathon VARCHAR(255), winner VARCHAR(255), gender VARCHAR(255), country VARCHAR(255), time TIME)
""")

if len(sys.argv) < 2:
    print("Dat is geen csv bestand")
    sys.exit(1)

csv_file = sys.argv[1]


try:
    df = pd.read_csv(csv_file)
except FileNotFoundError:
    print(f"bestand niet gevonden '{csv_file}'")
except pd.errors.ParserError:
    print(f"Fout: {csv_file} kan niet worden gelezen")


tabelnaam = 'marathon'

for _, rij in df.iterrows():
    placeholders = ', '.join(['%s'] * len(rij))
    kolommen = ', '.join(rij.index)
    sql = f"INSERT INTO {tabelnaam} ({kolommen}) VALUES ({placeholders})"
    try:
        cur.execute(sql, tuple(rij))
    except mysql.connector.Error as err:
        print(f"Fout bij invoegen: {err}")
        continue

verzamelen_1.commit()
cur.close()
verzamelen_1.close()
