<?php 
$link = mysqli_connect("localhost", "root", "", "Jeu_Cartes");
echo "<br>";
if (!$link)
{
die ('Could not connect:' . mysql_error());
} ?>