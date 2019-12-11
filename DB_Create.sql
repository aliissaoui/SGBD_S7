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
CONSTRAINT fk_inv_id_carte_appartenance FOREIGN KEY (id_carte) REFERENCES Cartes(id_carte) ON DELETE CASCADE,
n_deck SMALLINT UNSIGNED,
PRIMARY KEY (n_deck, id_carte),
CONSTRAINT fk_inv_id_deck_appartenance FOREIGN KEY (n_deck) REFERENCES Decks(n_deck) ON DELETE CASCADE,
date_ajout DATETIME
);



CREATE TABLE IF NOT EXISTS Versions (
id_carte SMALLINT UNSIGNED,
n_version SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
date_impression DATETIME NOT NULL,
rendu SMALLINT UNSIGNED DEFAULT 1 NOT NULL,
tirage SMALLINT UNSIGNED DEFAULT 0 NOT NULL,
cote SMALLINT UNSIGNED NOT NULL,
CONSTRAINT fk_inv_carte_id_version FOREIGN KEY (id_carte) REFERENCES Cartes(id_carte) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS Joueurs (
pseudonyme VARCHAR(40) PRIMARY KEY,
nom VARCHAR(40) NOT NULL,
prenom VARCHAR(40) NOT NULL
);

CREATE TABLE IF NOT EXISTS Possessioncartes (
id_carte SMALLINT UNSIGNED,
PRIMARY KEY (id_carte, pseudonyme),
CONSTRAINT fk_inv_carte_id_possession FOREIGN KEY (id_carte) REFERENCES Cartes(id_carte) ON DELETE CASCADE,
pseudonyme VARCHAR(40),
CONSTRAINT fk_inv_carte_pseudo_possession FOREIGN KEY (pseudonyme) REFERENCES Joueurs(pseudonyme) ON DELETE CASCADE,
date_possession DATETIME NOT NULL,
methode_possession VARCHAR(20),
date_non_possession DATETIME,
etat SMALLINT UNSIGNED DEFAULT 1 NOT NULL
);

CREATE TABLE IF NOT EXISTS Possessiondecks (
n_deck SMALLINT UNSIGNED,
pseudonyme VARCHAR(40),
PRIMARY KEY (n_deck, pseudonyme),
CONSTRAINT fk_inv_deck FOREIGN KEY (n_deck) REFERENCES Decks(n_deck) ON DELETE CASCADE,
CONSTRAINT fk_inv_pseudo FOREIGN KEY (pseudonyme) REFERENCES Joueurs(pseudonyme) ON DELETE CASCADE,
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
CONSTRAINT fk_inv_partie FOREIGN KEY (n_partie) REFERENCES Parties(n_partie) ON DELETE CASCADE,
CONSTRAINT fk_inv_pseudo_partie FOREIGN KEY (pseudonyme) REFERENCES Joueurs(pseudonyme) ON DELETE CASCADE,
CONSTRAINT fk_inv_deck_partie FOREIGN KEY (n_deck) REFERENCES Decks(n_deck) ON DELETE CASCADE,
nb_joueurs TINYINT
);

-- Insertion des carte pour exemple
insert into Cartes (titre,description,type,famille,attaque,defense,rapidite) values('akali', 'green', 'slayer', 'pirates', 90, 40, 85);
insert into Cartes (titre,description,type,famille,attaque,defense,rapidite) values('teemo', 'orange', 'specialist', 'pirates', 80, 30, 90);
insert into Cartes (titre,description,type,famille,attaque,defense,rapidite) values('yasuo', 'black', 'slayer', 'polices', 90, 60, 70);
insert into Cartes (titre,description,type,famille,attaque,defense,rapidite) values('fizz', 'blue', 'slayer', 'marines', 30, 20, 85);
insert into Cartes (titre,description,type,famille,attaque,defense,rapidite) values('olaf', 'red', 'fighter', 'corsaires', 74, 70, 60);
insert into Cartes (titre,description,type,famille,attaque,defense,rapidite) values('jinx', 'rose', 'marksman', 'rois', 96, 98, 95);
insert into Cartes (titre,description,type,famille,attaque,defense,rapidite) values('jinn', 'roubya', 'marksman', 'voleurs', 30, 25, 97);
insert into Cartes (titre,description,type,famille,attaque,defense,rapidite) values('syndra', 'violet', 'mage', 'rois', 80, 36, 73);

insert into Decks (nom) values('Majmou3ato lmawt');
insert into Decks (nom) values('Majmou3ato L7ayat');

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
insert into Joueurs values('Relayys','BOUTGAYOUT','Imad');

insert into Possessioncartes values(1,'BigShaq1208','1950-10-10',NULL,NULL,1);
insert into Possessioncartes values(2,'BigShaq1208',now(),NULL,NULL,2);
insert into Possessioncartes values(3,'Fizzy','1950-10-10',NULL,NULL,4);
insert into Possessioncartes values(4,'Fizzy',now(),NULL,NULL,3);
insert into Possessioncartes values(7,'Fizzy',now(),NULL,NULL,1);
insert into Possessioncartes values(5,'Alisrey7',now(),NULL,NULL,1);
insert into Possessioncartes values(3,'Alisrey7','1953-10-10',NULL,NULL,2);
insert into Possessioncartes values(7,'WearyStar111','1950-10-10',NULL,NULL,1);
insert into Possessioncartes values(6,'Relayys',now(),NULL,NULL,3);

insert into Versions (id_carte,date_impression,rendu,tirage,cote) values(1,'1950-10-10', 5, 90, 19);
insert into Versions (id_carte,date_impression,rendu,tirage,cote) values(2,'1950-10-10', 4, 230, 17);
insert into Versions (id_carte,date_impression,rendu,tirage,cote) values(1,'1950-10-10', 2, 2, 101);
insert into Versions (id_carte,date_impression,rendu,tirage,cote) values(1,'1950-10-10', 1, 430, 16);
insert into Versions (id_carte,date_impression,rendu,tirage,cote) values(1,'2010-10-10', 5, 200, 29);
insert into Versions (id_carte,date_impression,rendu,tirage,cote) values(3,'2010-10-10', 3, 540, 33);
insert into Versions (id_carte,date_impression,rendu,tirage,cote) values(4,'1950-10-10', 7, 120, 30);

insert into Possessiondecks values(1, 'BigShaq1208', '1990-10-10');


insert into Parties (date, lieu, type, resultat) values('1990-10-10', 'Bordeaux', 'Fun', 1);
insert into Parties (date, lieu, type, resultat) values('1991-10-10', 'Bordeaux', 'Fun', 1);
insert into Parties (date, lieu, type, resultat) values('1992-10-10', 'Bordeaux', 'Fun', 0);

insert into Partiesjouees values(1, 'BigShaq1208', 1, 2);
insert into Partiesjouees values(2, 'BigShaq1208', 1, 2);
insert into Partiesjouees values(3, 'BigShaq1208', 1, 2);

-- Trigger

DELIMITER @@;

create trigger posseder after insert on Possessioncartes
for each row begin
if id_carte = new.id_carte then
update Possessioncartes
set date_non_possession = new.date_possession;
end if;
end$$

DELIMITER ; 



insert into Possessioncartes values(7,'BigShaq1208','2959-10-10',NULL,NULL,1);

select * from Possessioncartes;


-- --------------- Le nombre de versions par carte 

-- select titre, date_impression, count(n_version) as nombre
-- from Versions V
-- natural join Cartes C
-- group by id_carte, titre, date_impression
-- order by nombre desc;


-- -------------- Les versions créées après une date

-- select *
-- from Versions
-- where date_impression > '1998-08-07'; -- la date sera donnée par l'utilisateur

--  ------------- Le nombre de fois qu'une carte a été possédée 

-- select C.*, count(P.pseudonyme) as nombre_de_possessions
-- from Cartes C
-- natural join Possessioncartes P
-- group by C.id_carte;

-- -------------- Le dernier possesseur d'une carte

-- create view derniere_possession as 
-- select id_carte, date_derniere_possession from Cartes natural join (
-- select id_carte, max(date_possession) as date_derniere_possession
--     from Possessioncartes
--     group by id_carte) as P;
--     
-- select pseudonyme
-- from (
-- select * from derniere_possession natural join Possessioncartes
-- where date_possession = date_derniere_possession) as P
-- natural join Cartes C
-- where C.titre = 'akali'; -- Nom de carte à ajouter

-- -------------- Le premier possesseur d'une carte

-- create view premiere_possession as 
-- select id_carte, date_premiere_possession from Cartes natural join (
-- select id_carte, min(date_possession) as date_premiere_possession
--     from Possessioncartes
--     group by id_carte) as P;
--     
-- select pseudonyme
-- from (
-- select * from premiere_possession natural join Possessioncartes
-- where date_possession = date_premiere_possession) as P
-- natural join Cartes C
-- where C.titre = 'yasuo'; -- Nom de carte à ajouter

-- ----------------- Les cartes d'un joueur

-- select C.*
-- from (Cartes C natural join Possessioncartes P)
-- natural join Joueurs J
-- where J.pseudonyme = 'BigShaq1208'; -- Pseudo à ajouter

-- ------------------ Les joueurs qui possedent une carte

-- select J.*
-- from (Cartes C natural join Possessioncartes P)
-- natural join Joueurs J
-- where C.titre = 'yasuo'; -- titre à ajouter

-- ------------------ Le nombre de parties gagnées par un joueur

-- select sum(resultat) as nombre_wins, count(resultat) - sum(resultat) as nombre_losses 
-- from Parties
-- natural join Partiesjouees
-- where pseudonyme = 'BigShaq1208';



