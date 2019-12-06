

-- CONSULTATION

-- 1-
select * from Cartes where type='slayer';

-- 2- 

select distinct C.*
from Cartes C
left outer join Appartenance A
on C.id_carte = A.id_carte
where A.n_deck is NULL;

-- 3

select distinct J.*
from Joueurs J
left outer join Partiesjouees P
on J.pseudonyme = P.pseudonyme
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


-- 3

select C.*, count(P.id_carte) as nombre_possession
from Cartes C
inner join Possessioncartes P
on C.id_carte = P.id_carte
group by P.id_carte;
        
        
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

-- 5

select famille,
	case
		when greatest(attaque,defense,rapidite)=attaque
        then 'Attaque'
        when greatest(attaque,defense,rapidite)=defense
        then 'Defense'
        when greatest(attaque,defense,rapidite)=rapidite
        then 'Rapidite'
	end as Specialite
	from(
		select famille, max(attaque) as attaque, max(defense) as defense, max(rapidite) as rapidite
		from Cartes
		group by famille
) as T;
