<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: unset;
border: 1px solid #588c7e;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;
border-color: #588c7e;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>

<?php include "connec.php"; ?>
<?php include "function.php"; ?>


<?php

$showtables= mysqli_query($link,"
select distinct C.*
from Cartes C
left outer join Appartenance A
on C.id_carte = A.id_carte
where A.n_deck is NULL;
");
echo display_data($showtables);

?>
</body>
</html>