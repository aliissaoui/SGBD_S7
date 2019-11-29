

-- CONSULTATION

select *
from Cartes
where type = "MONSTER";


select distinct C.*
from Cartes C
left outer join Appartenance A
on C.id_carte = A.id_carte
where A.n_deck is NULL;


select distinct Joueurs.*
from Joueurs J
left outer join Partiejouees P
on J.pseudonyme = P.pseudonyme
where P.n_partie is NULL;

-- STATS


-- 3
select C.*, count(P.id_carte) as nombre_possession
from Cartes C
inner join Possessioncartes P
on C.id_carte = P.id_carte
group by P.id_carte;