

-- CONSULTATION

select *
from CARTES
where type = "MONSTER";


select distinct CARTES.*
from CARTES C
left outer join APPARTENANCE A
on C.id_carte = A.id_carte
where A.n_deck is NULL;


select distinct JOUEURS.*
from JOUEURS J
left outer join PARTIESJOUEES P
on J.PSEUDONYME = P.PSEUDONYME
where P.n_partie is NULL;


-- Statistiques
-- 1-
select distinct pseudonyme, count(id_carte) as Nombre_de_cartes 
from PossessionCartes
group by pseudonyme;

-- 2-

select J.pseudonyme, sum(V.cote * P.etat) as valeur
from Versions V 
	inner join Cartes C 
		on C.id_carte = V.id_carte
    inner join PossessionCartes P
		on P.id_carte = C.id_carte
	inner join Joueurs J
		on J.pseudonyme = P.pseudonyme
	group by J.pseudonyme
    order by valeur desc;
        
        
-- 4
select J.pseudonyme, count(C.id_carte) as rares
from Versions V
	inner join Cartes C 
		on C.id_carte = V.id_carte
    inner join PossessionCartes P
		on P.id_carte = C.id_carte
	inner join Joueurs J
		on J.pseudonyme = P.pseudonyme
	where 
		V.date_impression > '2000-01-01' 
    or
		V.tirage < 100
	group by J.pseudonyme;
