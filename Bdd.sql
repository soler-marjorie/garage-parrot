-- Active: 1684320516575@@127.0.0.1@3306@garageparrot


--
-- structure de la table 'Horaires'
--

DROP TABLE IF EXISTS horaires;
CREATE TABLE IF NOT EXISTS horaires(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    day VARCHAR(100) NOT NULL,
    horaireMatin VARCHAR(100) NOT NULL,
    horaireSoir VARCHAR(100) NOT NULL
);

--
-- déchargement des données de la table 'Horaires'
--

INSERT INTO horaires(day, horaireMatin, horaireSoir)
VALUES
('Du lundi au vendredi', 'matin : 8h45 - 12h00', "après-midi : 14h00 - 18h00"),
('Le samedi', 'matin : 8h45 - 12h00', "après-midi : fermé");


---------------------------------------------------------------------------------------------------------------------