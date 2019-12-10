<?php
include "connec.php";

function display_data($data)
{
    $output = "<table class='table table-hover table-dark' style='width:70%; padding-left:40%'>";
    foreach ($data as $key => $var) {
        //$output .= '<tr>';
        if ($key === 0) {
            $output .= '<tr>';
            foreach ($var as $col => $val) {
                $output .= "<th>" . $col . '</th>';
            }
            $output .= '</tr>';
            foreach ($var as $col => $val) {
                $output .= '<td>' . $val . '</td>';
            }
            $output .= '</tr>';
        } else {
            $output .= '<tr>';
            foreach ($var as $col => $val) {
                $output .= '<td>' . $val . '</td>';
            }
            $output .= '</tr>';
        }
    }
    $output .= '</table>';
    echo $output;
}



function pWithoutGame()
{
    global $link;
    $showtables = mysqli_query($link, "
            select distinct J.*
            from Joueurs J
            left outer join Partiesjouees P
            on J.pseudonyme = P.pseudonyme
            where P.n_partie is NULL;");
    echo display_data($showtables);
}

function cardnDeck()
{
    global $link;
    $showtables = mysqli_query($link, "
            select distinct C.*
            from Cartes C
            left outer join Appartenance A
            on C.id_carte = A.id_carte
            where A.n_deck is NULL;
            ");
    echo display_data($showtables);
}

function playersCards()
{
    global $link;
    $showtables = mysqli_query($link, "
            select distinct pseudonyme, count(id_carte) as Nombre_de_cartes 
            from Possessioncartes
            group by pseudonyme;
            ");
    echo display_data($showtables);
}

function playersValues()
{
    global $link;
    $showtables = mysqli_query($link, "
            select J.pseudonyme, sum(V.cote * P.etat) as valeur
            from Versions V 
                inner join Cartes C 
                    on C.id_carte = V.id_carte
                inner join Possessioncartes P
                    on P.id_carte = C.id_carte
                inner join Joueurs J
                    on J.pseudonyme = P.pseudonyme
                group by J.pseudonyme
                order by valeur desc;
            ");
    echo display_data($showtables);
}

function cardsPlayers()
{
    global $link;
    $showtables = mysqli_query($link, "
            select C.*, count(P.id_carte) as nombre_possession
            from Cartes C
            inner join Possessioncartes P
            on C.id_carte = P.id_carte
            group by P.id_carte;
        ");
    echo display_data($showtables);
}

function playersRare()
{
    global $link;
    $showtables = mysqli_query($link, "
            select J.pseudonyme, count(C.id_carte) as rares
            from Versions V
                inner join Cartes C 
                    on C.id_carte = V.id_carte
                inner join Possessioncartes P
                    on P.id_carte = C.id_carte
                inner join Joueurs J
                    on J.pseudonyme = P.pseudonyme
                where 
                    V.date_impression > '2000-01-01' 
                or
                    V.tirage < 100
                group by J.pseudonyme;
            ");
    echo display_data($showtables);
}

function cardsFamilies()
{
    global $link;
    $showtables = mysqli_query($link, "
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
        ");
    echo display_data($showtables);
}

function consltType($t){
    global $link;
    $sql = 'select * from Cartes where type = "' . $t . '"';
    $showtables= mysqli_query($link,$sql);
    echo display_data($showtables);

}

function addPlayer($name, $firstName, $pseudo)
{
    global $link;
    $sql = " insert into Joueurs values('".$pseudo."','".$name."','".$firstName."') ";
    mysqli_query($link,$sql);
}


function deletePlayer($pseudo)
{
    global $link;
    $sql = " delete from Joueurs where pseudonyme='".$pseudo."' ";
    mysqli_query($link,$sql);
}

function addCard($titre, $description, $type, $famille, $attaque, $defense, $rapidite)
{
    global $link;
    $sql = " insert into Cartes (titre, description, type, famille, attaque, defense, rapidite) values('".$titre."','".$description."','".$type."','".$famille."','".$attaque."','".$defense."','".$rapidite."') ";
    mysqli_query($link,$sql);
}

function deleteCard($id_carte)
{
    global $link;
    $sql = " delete from Cartes where id_carte='".$id_carte."' ";
    mysqli_query($link,$sql);
}

function addParty($date, $lieu, $type, $resultat)
{
    global $link;
    $sql = " insert into Parties (date, lieu, type, resultat) values('".$date."','".$lieu."','".$type."','".$resultat."') ";
    mysqli_query($link,$sql);
}

function deleteParty($n_partie)
{
    global $link;
    $sql = " delete from Parties where n_partie='".$n_partie."' ";
    mysqli_query($link,$sql);
}

function addDeck($nom)
{
    global $link;
    $sql = " insert into Decks (nom) values('".$nom."') ";
    mysqli_query($link,$sql);
}

function deleteDeck($n_deck)
{
    global $link;
    $sql = " delete from Decks where n_deck='".$n_deck."' ";
    mysqli_query($link,$sql);
}

function addVersion($card, $date_impression, $rendu, $tirage, $cote)
{
    global $link;
    $sql = " insert into Versions (id_carte ,date_impression, rendu, tirage, cote) values('".$card."','".$date_impression."','".$rendu."','".$tirage."','".$cote."' ) ";
    mysqli_query($link,$sql);
}

function deleteVersion($n_version)
{
    global $link;
    $sql = " delete from Versions where n_version='".$n_version."' ";
    mysqli_query($link,$sql);
}

function addAppartenance($id_carte, $n_deck, $date_ajout)
{
    global $link;
    $sql = "insert into  Appartenance values('".$id_carte."','".$n_deck."','".$date_ajout."') ";
    mysqli_query($link,$sql);
}

function deleteAppartenance($id_carte, $n_deck)
{
    global $link;
    $sql = " delete from Appartenance where id_carte='".$id_carte."' and n_deck='".$n_deck."' ";
    mysqli_query($link,$sql);
}

function addPossesiondecks($n_deck, $pseudonyme, $date_possession)
{
    global $link;
    $sql = "insert into  Possessiondecks values('".$n_deck."','".$pseudonyme."','".$date_possession."') ";
    mysqli_query($link,$sql);
}

function deletePossesiondecks($n_deck, $pseudonyme)
{
    global $link;
    $sql = " delete from Possessiondecks where n_deck='".$n_deck."' and pseudonyme='".$pseudonyme."' ";
    mysqli_query($link,$sql);
}

function addPossessioncartes($id_carte, $pseudonyme, $date_possession, $date_non_possession, $etat)
{
    global $link;
    $sql = "insert into  Possessioncartes values('".$n_deck."','".$pseudonyme."','".$date_possession."') ";
    mysqli_query($link,$sql);
}

function addPartiesjouees($n_partie, $pseudonyme, $n_deck, $nb_joueurs)
{
    global $link;
    $sql = "insert into  Partiesjouees values('".$n_partie."','".$pseudonyme."','".$n_deck."','".$nb_joueurs."') ";
    mysqli_query($link,$sql);
}

function players()
{
    global $link;
    $sql = "select * from Joueurs";
    echo display_data(mysqli_query($link,$sql));

}

function cartes()
{
    global $link;
    $sql = "select distinct * from Cartes";
    echo display_data(mysqli_query($link,$sql));
}

function decks()
{
    global $link;
    $sql = "select distinct * from Decks";
    echo display_data(mysqli_query($link,$sql));
}

function parties()
{
    global $link;
    $sql = "select distinct * from Parties";
    echo display_data(mysqli_query($link,$sql));
}

function versions()
{
    global $link;
    $sql = "select distinct * from Versions";
    echo display_data(mysqli_query($link,$sql));
}
?>