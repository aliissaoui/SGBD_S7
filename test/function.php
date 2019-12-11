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


function consltType($t){ //DONE
    global $link;
    $sql = "select * from Cartes where type = '" . $t . "'";
    $showtables= mysqli_query($link,$sql);
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";

    echo display_data($showtables);
}

function pWithoutGame() //DONE
{
    global $link;
    $showtables = mysqli_query($link, "
            select distinct J.*
            from Joueurs J
            left outer join Partiesjouees P
            on J.pseudonyme = P.pseudonyme
            where P.n_partie is NULL;");

    echo "<div id='req' class='hero-unit'>";
    echo "select distinct J.* <br> from Joueurs J <br> left outer join Partiesjouees P <br> on J.pseudonyme = P.pseudonyme <br> where P.n_partie is NULL;";
    echo "</div>";
    echo display_data($showtables);
}

function cardnDeck() //DONE
{
    global $link;
    $showtables = mysqli_query($link, "
            select distinct C.*
            from Cartes C
            left outer join Appartenance A
            on C.id_carte = A.id_carte
            where A.n_deck is NULL;
            ");
    echo "<div id='req' class='hero-unit'>";
    echo " select distinct C.* <br> from Cartes C <br> left outer join Appartenance A <br> on C.id_carte = A.id_carte <br> where A.n_deck is NULL;";
    echo "</div>";
    echo display_data($showtables);
}

///////////////////  STATS  ///////////////////
function playersCards()  //DONE
{
    global $link;
    $showtables = mysqli_query($link, "
            select distinct pseudonyme, count(id_carte) as Nombre_de_cartes 
            from Possessioncartes
            group by pseudonyme;
            ");
    echo "<div id='req' class='hero-unit'>";
    echo  "select distinct pseudonyme, count(id_carte) as Nombre_de_cartes <br> from Possessioncartes <br> group by pseudonyme;";
    echo "</div>";
    echo display_data($showtables);
}

function playersValues() //DONE
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
    echo "<div id='req' class='hero-unit'>";
    echo " select J.pseudonyme, sum(V.cote * P.etat) as valeur <br> from Versions V <br> inner join Cartes C on C.id_carte = V.id_carte <br> inner join Possessioncartes P on P.id_carte = C.id_carte <br> inner join Joueurs J on J.pseudonyme = P.pseudonyme  <br> group by J.pseudonyme  <br> order by valeur desc;";
    echo "</div>";
    echo display_data($showtables);
}

function cardsPlayers() //DONE
{
    global $link;
    $showtables = mysqli_query($link, "
            select C.*, count(P.id_carte) as nombre_possession
            from Cartes C
            inner join Possessioncartes P
            on C.id_carte = P.id_carte
            group by P.id_carte;
        ");
    echo "<div id='req' class='hero-unit'>";
    echo " select C.*, count(P.id_carte) as nombre_possession <br> from Cartes C <br> inner join Possessioncartes P <br> on C.id_carte = P.id_carte  <br> group by P.id_carte;";
    echo "</div>";
    echo display_data($showtables);
}

function playersRare() //DONE
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
    echo "<div id='req' class='hero-unit'>";
    echo "select J.pseudonyme, count(C.id_carte) as rares <br> from Versions V <br> inner join Cartes C on C.id_carte = V.id_carte <br> inner join Possessioncartes Pon P.id_carte = C.id_carte <br> inner join Joueurs Jon J.pseudonyme = P.pseudonyme <br> where  <br> V.date_impression > '2000-01-01'  <br> or <br> V.tirage < 100 <br> group by J.pseudonyme;";
    echo "</div>";
    echo display_data($showtables);
}

function cardsFamilies() //DONE
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
    echo "<div id='req' class='hero-unit'>";
    echo "select famille, <br> case <br> when greatest(attaque,defense,rapidite)=attaque <br> then 'Attaque' <br> when greatest(attaque,defense,rapidite)=defense <br> then 'Defense' <br> when greatest(attaque,defense,rapidite)=rapidite <br> then 'Rapidite' <br> end as Specialite <br> from( <br> select famille, max(attaque) as attaque, max(defense) as defense, max(rapidite) as rapidite <br> from Cartes <br> group by famille <br> ) as T;";
    echo "</div>";
    echo display_data($showtables);
}


//////////// UPDATE ////////////
function addPlayer($name, $firstName, $pseudo)  //DONE
{
    global $link;
    $sql = " insert into Joueurs values('".$name."','".$firstName."','".$pseudo."') ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}


function deletePlayer($pseudo)  //DONE
{
    global $link;
    $sql = " delete from Joueurs where pseudonyme='".$pseudo."' ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function addCard($titre, $description, $type, $famille, $attaque, $defense, $rapidite)  //DONE
{
    
    global $link;
    $sql = " insert into Cartes (titre, description, type, famille, attaque, defense, rapidite) values('".$titre."','".$description."','".$type."','".$famille."','".$attaque."','".$defense."','".$rapidite."') ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function deleteCard($id_carte)  //DONE
{
    global $link;
    $sql = " delete from Cartes where id_carte='".$id_carte."' ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function addParty($date, $lieu, $type, $resultat)  //DONE
{
    global $link;
    $sql = " insert into Parties (date, lieu, type, resultat) values('".$date."','".$lieu."','".$type."','".$resultat."') ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function deleteParty($n_partie)  //DONE
{
    global $link;
    $sql = " delete from Parties where n_partie='".$n_partie."' ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function addDeck($nom)  //DONE
{
    global $link;
    $sql = " insert into Decks (nom) values('".$nom."') ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function deleteDeck($n_deck)  //DONE
{
    global $link;
    $sql = " delete from Decks where n_deck='".$n_deck."' ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function addVersion($card, $date_impression, $rendu, $tirage, $cote)  //DONE
{
    global $link;
    $sql = " insert into Versions (id_carte ,date_impression, rendu, tirage, cote) values('".$card."','".$date_impression."','".$rendu."','".$tirage."','".$cote."' ) ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function deleteVersion($n_version)  //DONE
{
    global $link;
    $sql = " delete from Versions where n_version='".$n_version."' ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

///// RELATIONS

function addAppartenance($id_carte, $n_deck, $date_ajout)
{
    global $link;
    $sql = "insert into Appartenance values('".$id_carte."','".$n_deck."','".$date_ajout."') ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);

}

function deleteAppartenance($id_carte, $n_deck)
{
    global $link;
    $sql = " delete from Appartenance where id_carte='".$id_carte."' and n_deck='".$n_deck."' ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function addPossesiondecks($n_deck, $pseudonyme, $date_possession)
{
    global $link;
    $sql = "insert into  Possessiondecks values('".$n_deck."','".$pseudonyme."','".$date_possession."') ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function deletePossesiondecks($n_deck, $pseudonyme)
{
    global $link;
    $sql = " delete from Possessiondecks where n_deck='".$n_deck."' and pseudonyme='".$pseudonyme."' ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function addPossessioncartes($id_carte, $pseudonyme, $date_possession, $etat)
{
    global $link;
    $sql = "insert into  Possessioncartes values('".$n_deck."','".$pseudonyme."','".$date_possession."') ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function deletePossesioncartes($id_carte, $pseudonyme)
{
    global $link;
    $sql = " delete from Possessioncartes where id_carte='".$id_carte."' and pseudonyme='".$pseudonyme."' ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function addPartiesjouees($n_partie, $pseudonyme, $n_deck, $nb_joueurs)
{
    global $link;
    $sql = "insert into  Partiesjouees values('".$n_partie."','".$pseudonyme."','".$n_deck."','".$nb_joueurs."') ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

function deletePartiesjouees($n_partie, $pseudonyme)
{
    global $link;
    $sql = " delete from Partiesjouees where n_partie='".$n_partie."' and pseudonyme='".$pseudonyme."' ";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    mysqli_query($link,$sql);
}

///////\\\\\\\\///////\\\\\\\\\//////\\\\\\\\\///////\\\\\\\\\/////\\\\\\\\//////\\\\\\/
///////\\\\\\\\///////\\\\\\\\\//////\\\\\\\\\///////\\\\\\\\\/////\\\\\\\\//////\\\\\\/

function numberVersionsCards() // DONE
{
    global $link;
    $sql = "select titre, date_impression, count(n_version) as nombre
            from Versions V
            natural join Cartes C
            group by id_carte, titre, date_impression
            order by nombre desc";

    echo "<div id='req' class='hero-unit'>";
    echo "select titre, date_impression, count(n_version) as nombre <br> from Versions V <br> natural join Cartes C <br> group by id_carte, titre, date_impression <br> order by nombre desc";
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

function numberPossessionsCard() //DONE
{
    global $link;
    $sql = "select C.*, count(P.pseudonyme) as nombre_de_possessions
            from Cartes C
            natural join Possessioncartes P
            group by C.id_carte";
    echo "<div id='req' class='hero-unit'>";
    echo "select C.*, count(P.pseudonyme) as nombre_de_possessions <br> from Cartes C <br> natural join Possessioncartes P <br> group by C.id_carte";
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

function versionsAfterDate($date_impression) //DONE
{
    global $link;
    $sql = "select *
            from Versions
            where date_impression > '".$date_impression."' ";
    echo "<div id='req' class='hero-unit'>";
    echo "select * <br> from Versions <br> where date_impression > '".$date_impression."' ";
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

function lastPossession($cardID) //DONE
{
    global $link;
    $sql1 = " create view derniere_possession as 
              select id_carte, date_derniere_possession from Cartes natural join (
              select id_carte, max(date_possession) as date_derniere_possession
           from Possessioncartes
           group by id_carte) as P; ";
    


    $sql2 = "select pseudonyme
            from (
              select * from derniere_possession natural join Possessioncartes
              where date_possession = date_derniere_possession) as P
            natural join Cartes C
            where C.id_carte = '".$cardID."'";
    
    mysqli_query($link,$sql1);
    echo "<div id='req' class='hero-unit'>";
    echo "create view derniere_possession as <br> select id_carte, date_derniere_possession from Cartes natural join ( <br> select id_carte, max(date_possession) as date_derniere_possession <br> from Possessioncartes <br> group by id_carte) as P;";
    echo "</div>";
    echo "<div id='req' class='hero-unit'>";
    echo "select pseudonyme <br> from ( <br> select * from derniere_possession natural join Possessioncartes <br> where date_possession = date_derniere_possession) as P <br> natural join Cartes C <br> where C.id_carte = '".$cardID."'";
    echo "</div>";
    echo display_data(mysqli_query($link,$sql2));
}



function firstPossession($cardID) //DONE
{
    global $link;
    // $sql="select * from Cartes;";
    $sql1 = "create view premiere_possession as 
    select id_carte, date_premiere_possession from Cartes natural join (
    select id_carte, min(date_possession) as date_premiere_possession
        from Possessioncartes
        group by id_carte) as P;";


    $sql2= " select pseudonyme
    from (
    select * from premiere_possession natural join Possessioncartes
    where date_possession = date_premiere_possession) as P
    natural join Cartes C
    where C.id_carte = '".$cardID."'";

    echo "<div id='req' class='hero-unit'>";
    echo "create view premiere_possession as <br> select id_carte, date_premiere_possession from Cartes natural join ( <br> select id_carte, min(date_possession) as date_premiere_possession <br> from Possessioncartes <br> group by id_carte) as P;";
    echo "</div>";
    echo "<div id='req' class='hero-unit'>";
    echo " select pseudonyme <br> from ( <br> select * from premiere_possession natural join Possessioncartes <br> where date_possession = date_premiere_possession) as P <br> natural join Cartes C <br> where C.id_carte = '".$cardID."'";
    echo "</div>";

    mysqli_query($link,$sql1);
    echo display_data(mysqli_query($link,$sql2));

}


function cardsPlayer($player) //DONE
{
    global $link;
    $sql = "select C.*
            from (Cartes C natural join Possessioncartes P)
            natural join Joueurs J
            where J.pseudonyme = '".$player."' ";
    echo "<div id='req' class='hero-unit'>";
    echo "select C.* <br> from (Cartes C natural join Possessioncartes P) <br> natural join Joueurs J <br> where J.pseudonyme = '".$player."' ";;
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

function cardPlayers($player) //DONE
{
    global $link;

    $sql = "select J.*
            from (Cartes C natural join Possessioncartes P)
            natural join Joueurs J
            where C.id_carte = '".$player."'";
           
    echo "<div id='req' class='hero-unit'>";
    echo "select J.* <br> from (Cartes C natural join Possessioncartes P) <br> natural join Joueurs J <br> where C.id_carte = '".$player."'";
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}



function winRate($cardID) //DONE
{
    global $link;
    $sql = "select sum(resultat) as nombre_wins, count(resultat) - sum(resultat) as nombre_losses 
            from Parties
            natural join Partiesjouees
            where pseudonyme = '".$cardID."'";
    echo "<div id='req' class='hero-unit'>";
    echo "select sum(resultat) as nombre_wins, count(resultat) - sum(resultat) as nombre_losses <br> from Parties <br> natural join Partiesjouees <br> where pseudonyme = '".$cardID."'";
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

///////\\\\\\\\///////\\\\\\\\\//////\\\\\\\\\///////\\\\\\\\\/////\\\\\\\\//////\\\\\\/
///////\\\\\\\\///////\\\\\\\\\//////\\\\\\\\\///////\\\\\\\\\/////\\\\\\\\//////\\\\\\/
function players() //DONE
{
    global $link;
    $sql = "select * from Joueurs";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));


}

function cartes() //DONE
{
    global $link;
    $sql = "select distinct * from Cartes";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

function decks() //DONE
{
    global $link;
    $sql = "select distinct * from Decks";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

function parties() //DONE
{
    global $link;
    $sql = "select distinct * from Parties";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

function versions() //DONE
{
    global $link;
    $sql = "select distinct * from Versions";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}
////// Relations
function playerPosCard() //DONE
{
    global $link;
    $sql = "select distinct * from Possessioncartes";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

function playerPosDeck() //DONE
{
    global $link;
    $sql = "select distinct * from Possessiondecks";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

function deckPosCard() //DONE
{
    global $link;
    $sql = "select distinct * from Appartenance";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}

function playerGame() //DONE
{
    global $link;
    $sql = "select distinct * from Partiesjouees";
    echo "<div id='req' class='hero-unit'>";
    echo $sql;
    echo "</div>";
    echo display_data(mysqli_query($link,$sql));
}
?>