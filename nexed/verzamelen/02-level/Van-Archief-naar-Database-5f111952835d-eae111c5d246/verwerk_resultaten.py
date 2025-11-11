import sys
import os
import mysql.connector
import pandas as pd

# ✅ Controleer of map is opgegeven
if len(sys.argv) < 2:
    print("Gebruik: python script.py <pad_naar_map_met_csv>")
    sys.exit(1)

map_pad = sys.argv[1]

if not os.path.isdir(map_pad):
    print("Fout: opgegeven pad is geen geldige map.")
    sys.exit(1)

# ✅ Maak verbinding met MySQL
verzamelen_1 = mysql.connector.connect(
    host="localhost",
    user="bit_academy",
    password="bit_academy"
)

cur = verzamelen_1.cursor()

# ✅ Maak database en tabel aan
cur.execute("DROP DATABASE IF EXISTS verzamelen_1")
cur.execute("CREATE DATABASE verzamelen_1")
cur.execute("USE verzamelen_1")

cur.execute("""
CREATE TABLE marathon (
    year INT,
    marathon VARCHAR(255),
    winner VARCHAR(255),
    gender VARCHAR(255),
    country VARCHAR(255),
    time TIME
)
""")

# ✅ Verwerk elk CSV-bestand in de map
for archive in sorted(os.listdir(map_pad)):
    if archive.endswith(".csv"):
        bestandspad = os.path.join(map_pad, archive)
        print(f"Verwerken: {bestandspad}")

        df = pd.read_csv(bestandspad)


        for _, rij in df.iterrows():
            placeholders = ', '.join(['%s'] * len(rij))
            kolommen = ', '.join(rij.index)
            sql = f"INSERT INTO marathon ({kolommen}) VALUES ({placeholders})"
            try:
                cur.execute(sql, tuple(rij))
            except mysql.connector.Error as err:
                print(f"Fout bij invoegen uit {archive}: {err}")
                continue

# ✅ Commit & afsluiten
verzamelen_1.commit()
cur.close()
verzamelen_1.close()

print("Alle CSV-bestanden succesvol verwerkt.")
