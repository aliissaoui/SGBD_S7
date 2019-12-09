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


?>