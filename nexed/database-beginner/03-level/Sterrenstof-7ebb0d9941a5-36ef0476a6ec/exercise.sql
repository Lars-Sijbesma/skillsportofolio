TRUNCATE TABLE planeten;

ALTER TABLE planeten ADD diameter int(11);
ALTER TABLE planeten ADD afstand bigint(20);
ALTER TABLE planeten ADD massa float;

INSERT INTO
    planeten (planeten.naam, planeten.diameter, planeten.afstand, planeten.massa)
    VALUES
        ("Zon", 1392000, 0, 332.946),
        ("Mercurius", 4880, 57910000, 0.1),
        ("Venus", 12104, 108208930, 0.9),
        ("Aarde", 12756, 149597870, 1),
        ("Mars", 6794, 227936640, 0.1);