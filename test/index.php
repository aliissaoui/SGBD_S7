<!DOCTYPE html>
<html>
<head>
	<title>Page d'acceuil du projet SGBD</title>
</head>
<body>
	<div>
		Si vous voulez savoir les cartes appartenant à aucun Deck:
	</div>
	<a href="cartesaucundeck.php?" class="button-class" >Cliquez-ici</a>

	<div>
		Si vous voulez savoir les cartes ayant le type:
	</div>
	<form id="ID_FORMULAIRE">
		<input type="text" id="type" name="type" size="10">
		<a href="javascript:aller();" class="button-class" >Cliquez-ici</a>
	</form>
	<div>
		Si vous voulez savoir les joueurs ne jouant aucune partie:
	</div>
	<a href="joueursaucpartie.php?" class="button-class" >Cliquez-ici</a>




<script type="text/javascript">
	function aller()
{
var valeur = document.forms['ID_FORMULAIRE'].elements['type'].value; // Contient la valeur de l'<input />
document.location.href = 'consutype.php?type='+valeur;
}
</script>

</body>
</html>