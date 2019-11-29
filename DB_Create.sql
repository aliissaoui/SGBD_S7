DROP DATABASE IF EXISTS Jeu_Cartes;
CREATE DATABASE Jeu_Cartes CHARACTER SET 'utf8';
USE Jeu_Cartes;

CREATE TABLE IF NOT EXISTS Cartes (
id_carte SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
titre VARCHAR(40) NOT NULL,
description TEXT,
type VARCHAR(20),
famille VARCHAR(20),
attaque SMALLINT UNSIGNED DEFAULT 0 NOT NULL,
defense SMALLINT UNSIGNED DEFAULT 0 NOT NULL,
rapidite SMALLINT UNSIGNED DEFAULT 0 NOT NULL
);

CREATE TABLE IF NOT EXISTS Decks (
n_deck SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(40) NOT NULL
);

CREATE TABLE IF NOT EXISTS Appartenance (
id_carte SMALLINT UNSIGNED,
FOREIGN KEY (id_carte) REFERENCES Cartes(id_carte),
n_deck SMALLINT UNSIGNED,
PRIMARY KEY (n_deck, id_carte),
FOREIGN KEY (n_deck) REFERENCES Decks(n_deck),
date_ajout DATETIME
);



CREATE TABLE IF NOT EXISTS Versions (
id_carte SMALLINT UNSIGNED,
n_version SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
date_impression DATETIME NOT NULL,
rendu SMALLINT UNSIGNED DEFAULT 1 NOT NULL,
tirage SMALLINT UNSIGNED DEFAULT 0 NOT NULL,
cote SMALLINT UNSIGNED NOT NULL,
FOREIGN KEY (id_carte) REFERENCES Cartes(id_carte)
);

CREATE TABLE IF NOT EXISTS Joueurs (
pseudonyme VARCHAR(40) PRIMARY KEY,
nom VARCHAR(40) NOT NULL,
prenom VARCHAR(40) NOT NULL
);

CREATE TABLE IF NOT EXISTS Possessioncartes (
id_carte SMALLINT UNSIGNED,
PRIMARY KEY (id_carte, pseudonyme),
FOREIGN KEY (id_carte) REFERENCES Cartes(id_carte),
pseudonyme VARCHAR(40),
FOREIGN KEY (pseudonyme) REFERENCES Joueurs(pseudonyme),
date_possession DATETIME NOT NULL,
methode_possession VARCHAR(20),
date_non_possession DATETIME,
etat SMALLINT UNSIGNED DEFAULT 1 NOT NULL
);

CREATE TABLE IF NOT EXISTS Possessiondecks (
n_deck SMALLINT UNSIGNED,
pseudonyme VARCHAR(40),
PRIMARY KEY (n_deck, pseudonyme),
FOREIGN KEY (n_deck) REFERENCES Decks(n_deck),
FOREIGN KEY (pseudonyme) REFERENCES Joueurs(pseudonyme),
date_possession DATETIME
);

CREATE TABLE IF NOT EXISTS Parties (
n_partie SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
date DATETIME NOT NULL,
lieu VARCHAR(40),
type VARCHAR(20),
resultat VARCHAR(40)
);

CREATE TABLE IF NOT EXISTS Partiesjouees (
n_partie SMALLINT UNSIGNED,
pseudonyme VARCHAR(40),
n_deck SMALLINT UNSIGNED,
PRIMARY KEY (n_partie, pseudonyme),
FOREIGN KEY (n_partie) REFERENCES Parties(n_partie),
FOREIGN KEY (pseudonyme) REFERENCES Joueurs(pseudonyme),
FOREIGN KEY (n_deck) REFERENCES Decks(n_deck),
nb_joueurs TINYINT
);

-- Insertion des carte pour exemple
insert into Cartes values(1, 'akali', 'green', 'slayer', 'badenjan', 90, 40, 85);
insert into Cartes values(2, 'teemo', 'orange', 'specialist', 'batata', 80, 30, 90);
insert into Cartes values(3, 'yasuo', 'black', 'slayer', 'maticha', 90, 60, 70);
insert into Cartes values(4, 'fizz', 'blue', 'slayer', 'khizo', 85, 20, 85);
insert into Cartes values(5, 'olaf', 'red', 'fighter', 'gar3a', 74, 70, 60);
insert into Cartes values(6, 'jinx', 'rose', 'marksman', 'loubia', 95, 25, 95);
insert into Cartes values(7, 'syndra', 'violet', 'mage', 'jelbana', 80, 36, 73);

insert into Decks values(1, 'Majmou3ato lmawt');
insert into Decks values(2, 'Majmou3ato L7ayat');

insert into Appartenance values(1,1, now());
insert into Appartenance values(2,1, now());
insert into Appartenance values(6,1, now());
insert into Appartenance values(3,2, now());
insert into Appartenance values(7,2, now());

insert into Joueurs values('BigShaq1208','HALA','Mehdi');
insert into Joueurs values('Fizzy','FAIZ','Abderrahmanne');
insert into Joueurs values('Alisrey7','ISSAOUI','Ali');
insert into Joueurs values('WearyStar111','FERIAT','Abdessamad');
insert into Joueurs values('B00S3AMY','BASTAMY','Oussama');

insert into Possessioncartes values(1,'BigShaq1208',now(),NULL,NULL,1);
insert into Possessioncartes values(2,'BigShaq1208',now(),NULL,NULL,1);
insert into Possessioncartes values(3,'Fizzy',now(),NULL,NULL,1);
insert into Possessioncartes values(5,'Alisrey7',now(),NULL,NULL,1);
insert into Possessioncartes values(7,'WearyStar111',now(),NULL,NULL,1);






-- 1-
select * from Cartes where type='slayer';

-- 2- 

select distinct C.*
from Cartes C
left outer join Appartenance A
on C.id_carte = A.id_carte
where A.n_deck is NULL;




