

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