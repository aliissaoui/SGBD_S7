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

    echo "<div id='req' class='hero-unit'><h5>";
    echo "select distinct J.* <br> from Joueurs J <br> left outer join Partiesjouees P <br> on J.pseudonyme = P.pseudonyme <br> where P.n_partie is NULL;";
    echo "</h5></div>";
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
    echo "<div id='req' class='hero-unit'><h5>";
    echo " select distinct C.* <br> from Cartes C <br> left outer join Appartenance A <br> on C.id_carte = A.id_carte <br> where A.n_deck is NULL;";
    echo "</h5></div>";
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
    echo "<div id='req' class='hero-unit'><h5>";
    echo  "select distinct pseudonyme, count(id_carte) as Nombre_de_cartes <br> from Possessioncartes <br> group by pseudonyme;";
    echo "</h5></div>";
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
    echo "<div id='req' class='hero-unit'><h5>";
    echo " select J.pseudonyme, sum(V.cote * P.etat) as valeur <br> from Versions V <br> inner join Cartes C on C.id_carte = V.id_carte <br> inner join Possessioncartes P on P.id_carte = C.id_carte <br> inner join Joueurs J on J.pseudonyme = P.pseudonyme  <br> group by J.pseudonyme  <br> order by valeur desc;";
    echo "</h5></div>";
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
    // echo "<div id='req' class='hero-unit'><h5>";
    // echo $sql;
    // echo "</h5></div>";
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
            // echo "<div id='req' class='hero-unit'><h5>";
            // echo $sql;
            // echo "</h5></div>";
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
    // echo "<div id='req' class='hero-unit'><h5>";
    // echo $sql;
    // echo "</h5></div>";
    echo display_data($showtables);
}

function consltType($t){
    global $link;
    $sql = 'select * from Cartes where type = "' . $t . '"';
    $showtables= mysqli_query($link,$sql);
    // echo "<div id='req' class='hero-unit'><h5>";
    // echo $sql;
    // echo "</h5></div>";
    echo display_data($showtables);

}

function addPlayer($name, $firstName, $pseudo)
{
    global $link;
    $sql = " insert into Joueurs values('".$name."','".$firstName."','".$pseudo."') ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}


function deletePlayer($pseudo)
{
    global $link;
    $sql = " delete from Joueurs where pseudonyme='".$pseudo."' ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function addCard($titre, $description, $type, $famille, $attaque, $defense, $rapidite)
{
    
    global $link;
    $sql = " insert into Cartes (titre, description, type, famille, attaque, defense, rapidite) values('".$titre."','".$description."','".$type."','".$famille."','".$attaque."','".$defense."','".$rapidite."') ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function deleteCard($id_carte)
{
    global $link;
    $sql = " delete from Cartes where id_carte='".$id_carte."' ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function addParty($date, $lieu, $type, $resultat)
{
    global $link;
    $sql = " insert into Parties (date, lieu, type, resultat) values('".$date."','".$lieu."','".$type."','".$resultat."') ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function deleteParty($n_partie)
{
    global $link;
    $sql = " delete from Parties where n_partie='".$n_partie."' ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function addDeck($nom)
{
    global $link;
    $sql = " insert into Decks (nom) values('".$nom."') ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function deleteDeck($n_deck)
{
    global $link;
    $sql = " delete from Decks where n_deck='".$n_deck."' ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function addVersion($card, $date_impression, $rendu, $tirage, $cote)
{
    global $link;
    $sql = " insert into Versions (id_carte ,date_impression, rendu, tirage, cote) values('".$card."','".$date_impression."','".$rendu."','".$tirage."','".$cote."' ) ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function deleteVersion($n_version)
{
    global $link;
    $sql = " delete from Versions where n_version='".$n_version."' ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
    
}

function addAppartenance($id_carte, $n_deck, $date_ajout)
{
    global $link;
    $sql = "insert into  Appartenance values('".$id_carte."','".$n_deck."','".$date_ajout."') ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);

}

function deleteAppartenance($id_carte, $n_deck)
{
    global $link;
    $sql = " delete from Appartenance where id_carte='".$id_carte."' and n_deck='".$n_deck."' ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function addPossesiondecks($n_deck, $pseudonyme, $date_possession)
{
    global $link;
    $sql = "insert into  Possessiondecks values('".$n_deck."','".$pseudonyme."','".$date_possession."') ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function deletePossesiondecks($n_deck, $pseudonyme)
{
    global $link;
    $sql = " delete from Possessiondecks where n_deck='".$n_deck."' and pseudonyme='".$pseudonyme."' ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function addPossessioncartes($id_carte, $pseudonyme, $date_possession, $date_non_possession, $etat)
{
    global $link;
    $sql = "insert into  Possessioncartes values('".$n_deck."','".$pseudonyme."','".$date_possession."') ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function deletePossesioncartes($n_deck, $pseudonyme)
{
    global $link;
    $sql = " delete from Possessiondecks where n_deck='".$n_deck."' and pseudonyme='".$pseudonyme."' ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function addPartiesjouees($n_partie, $pseudonyme, $n_deck, $nb_joueurs)
{
    global $link;
    $sql = "insert into  Partiesjouees values('".$n_partie."','".$pseudonyme."','".$n_deck."','".$nb_joueurs."') ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function deletePartiesjouees($n_partie, $pseudonyme)
{
    global $link;
    $sql = " delete from Partiesjouees where n_partie='".$n_partie."' and pseudonyme='".$pseudonyme."' ";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    mysqli_query($link,$sql);
}

function numberVersionsCards()
{
    global $link;
    $sql = "select titre, date_impression, count(n_version) as nombre
            from Versions V
            natural join Cartes C
            group by id_carte, titre, date_impression
            order by nombre desc";
    echo display_data(mysqli_query($link,$sql));
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
}

function versionsAfterDate($date_impression)
{
    global $link;
    $sql = "select *
            from Versions
            where date_impression > '".$date_impression."' ";
    echo display_data(mysqli_query($link,$sql));
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
}

function numberPossessionsCard()
{
    global $link;
    $sql = "select C.*, count(P.pseudonyme) as nombre_de_possessions
            from Cartes C
            natural join Possessioncartes P
            group by C.id_carte";
    echo display_data(mysqli_query($link,$sql));
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
}

function lastPossession($cardID)
{
    global $link;
    $sql = "create view derniere_possession as 
            select id_carte, date_derniere_possession from Cartes natural join (
            select id_carte, max(date_possession) as date_derniere_possession
              from Possessioncartes
              group by id_carte) as P;
        
            select pseudonyme
            from (
              select * from derniere_possession natural join Possessioncartes
              where date_possession = date_derniere_possession) as P
            natural join Cartes C
            where C.id_carte = '".$cardID."'";
    echo display_data(mysqli_query($link,$sql));
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";

}

function firstPossession($cardID)
{
    global $link;
    $sql = "create view derniere_possession as 
            select id_carte, date_derniere_possession from Cartes natural join (
            select id_carte, min(date_possession) as date_derniere_possession
              from Possessioncartes
              group by id_carte) as P;
        
            select pseudonyme
            from (
              select * from derniere_possession natural join Possessioncartes
              where date_possession = date_derniere_possession) as P
            natural join Cartes C
            where C.id_carte = '".$cardID."'";
    echo display_data(mysqli_query($link,$sql));
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";

}

function cardsPlayer($player)
{
    global $link;
    $sql = "select C.*
            from (Cartes C natural join Possessioncartes P)
            natural join Joueurs J
            where J.pseudonyme = '".$player."' ";
            echo "<div id='req' class='hero-unit'><h5>";
            echo $sql;
            echo "</h5></div>";
}

function winRate($player)
{
    global $link;
    $sql = "select sum(resultat) as nombre_wins, count(resultat) - sum(resultat) as nombre_losses 
            from Parties
            natural join Partiesjouees
            where pseudonyme = '".$player."' ";
            echo "<div id='req' class='hero-unit'><h5>";
            echo $sql;
            echo "</h5></div>";
}



function players()
{
    global $link;
    $sql = "select * from Joueurs";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    echo display_data(mysqli_query($link,$sql));


}

function cartes()
{
    global $link;
    $sql = "select distinct * from Cartes";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    echo display_data(mysqli_query($link,$sql));
}

function decks()
{
    global $link;
    $sql = "select distinct * from Decks";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    echo display_data(mysqli_query($link,$sql));
}

function parties()
{
    global $link;
    $sql = "select distinct * from Parties";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    echo display_data(mysqli_query($link,$sql));
}

function versions()
{
    global $link;
    $sql = "select distinct * from Versions";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    echo display_data(mysqli_query($link,$sql));
}
////// Relations
function playerPosCard()
{
    global $link;
    $sql = "select distinct * from Possessioncartes";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    echo display_data(mysqli_query($link,$sql));
}

function playerPosDeck()
{
    global $link;
    $sql = "select distinct * from Possessiondecks";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    echo display_data(mysqli_query($link,$sql));
}

function deckPosCard()
{
    global $link;
    $sql = "select distinct * from Appartenance";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    echo display_data(mysqli_query($link,$sql));
}

function playerGame()
{
    global $link;
    $sql = "select distinct * from Partiesjouees";
    echo "<div id='req' class='hero-unit'><h5>";
    echo $sql;
    echo "</h5></div>";
    echo display_data(mysqli_query($link,$sql));
}
?>