TRUNCATE TABLE planeten;

ALTER TABLE planeten ADD diameter int(11) NOT NULL;
ALTER TABLE planeten ADD afstand bigint(20) NOT NULL;
ALTER TABLE planeten ADD massa float NOT NULL;
ALTER TABLE planeten ADD datum_bezoek DATE;
ALTER TABLE planeten ADD id INT PRIMARY KEY AUTO_INCREMENT;
INSERT INTO
    planeten(naam, diameter, afstand, massa, datum_bezoek)
    VALUES
        ("Zon", 1392000, 0, 332.946, NULL),
        ("Mercurius", 4880, 57910000, 0.1, NULL),
        ("Venus", 12104, 108208930, 0.9, NULL),
        ("Aarde", 12756, 149597870, 1, NULL),
        ("Mars", 6794, 227936640, 0.1, NULL),
        ("Maan", 3476, 384400, 0.01, DATE("1969-07-20 01:02:03")),
        ("Mars", 6794, 227936640, 0.1, NULL);
UPDATE planeten SET naam = "Teenalp" WHERE id = 7;
DELETE FROM planeten WHERE id = 7;