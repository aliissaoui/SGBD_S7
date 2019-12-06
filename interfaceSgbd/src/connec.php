<?php 
$link = mysqli_connect("localhost", "root", "", "jeu_cartes");
echo "<br>";
if (!$link)
{
die ('Could not connect:' . mysql_error());
} ?>