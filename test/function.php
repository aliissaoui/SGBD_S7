<?php
include "connec.php";

function display_data($data)
{
    $output = "<table>";
    foreach ($data as $key => $var) {
        //$output .= '<tr>';
        if ($key === 0) {
            $output .= '<tr>';
            foreach ($var as $col => $val) {
                $output .= "<td>" . $col . '</td>';
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

function consltType($t){
    global $link;
    $sql = 'select * from Cartes where type = "' . $t . '"';
    $showtables= mysqli_query($link,$sql);
    echo display_data($showtables);

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
?>