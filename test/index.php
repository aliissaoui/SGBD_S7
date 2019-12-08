<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php include "function.php" ?>
    <meta charset="utf-8">
    <title>Projet SGBD: Carte à collectionner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                </button>
                <a class="brand" href="#">Projet SGBD : Carte à collectionner</a>
                <div>
                    <ul class="nav">
                        <li class="active"><a href="#">Acceuil</a></li>
                        <li><a href="#consult">Consultation</a></li>
                        <li><a href="#stats">Statistiques</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <div class="well sidebar-nav">
                    <ul class="nav nav-list">
                        <li class="nav-header">
                            <h4>Consultation</h4>
                        </li>
                        <li><a href="#" id="cardType">Cartes par type</a></li>
                        <li><a href="#" id="cardNoDeck">Cartes sans Deck</a></li>
                        <li><a href="#" id="playerNoGame">Joueurs sans aucune partie</a></li>
                        <li class="nav-header">
                            <h4>Statistiques</h4>
                        </li>
                        <li><a href="#">Joueurs avec nombre de cartes qu'ils possèdent</a></li>
                        <li><a href="#">Joueurs classé par valeur de collection</a></li>
                        <li><a href="#">Cartes avec nombre des joueurs qui l'utilisent</a></li>
                        <li><a href="#">Joueurs possédant le plus de cartes rares</a></li>
                        <li><a href="#">Famille de carte</a></li>
                    </ul>
                </div>
                <!--/.well -->
            </div>
            <!--/span-->
            <div class="span9">
                <div class="hero-unit">
                    <h1>Cartes à collectionner !</h1>
                    <p>Gestion des cartes à jouer au sein de la
                        communauté de joueurs/collectionneurs</p>
                </div>
                <div id="CardType"></div>
                <div id="CardNoDeck"></div>
                <div id="PlayerNoGame"></div>
                <hr>

                <footer>
                    <div class="container-fluid padding">
                        <p>HALA Mehdi, ISSAOUI Ali, BOUTGAYOUT Imad, FAIZ Abderrahmane 2019</p>
                    </div>
                </footer>

            </div>

</body>

<script>
    $("#CardType").hide();
    $("#CardNoDeck").hide();
    $("#PlayerNoGame").hide();

    $("#cardType").click(function() {
        $('#CardType').toggle();
        $("#CardType").html("<form id='ID_FORMULAIRE'> <input type='text' id='type' name='type' size='10'> <a id='ty' class='button-class' >Ok</a> </form>")
        $("#ty").click(function() {
            var valeur = document.forms['ID_FORMULAIRE'].elements['type'].value;
            var tab = "<?php consltType("slayer") ?>"
            $("#CardType").html("<h4>Les cartes de type: " + valeur + "</h4>" + tab);
        });
    });

    $("#cardNoDeck").click(function() {
        $('#CardNoDeck').toggle();
        $("#CardNoDeck").html("<h4>cartes n'appartenants à aucune main:</h4> <?php cardnDeck() ?>")
    });

    $("#playerNoGame").click(function() {
        $('#PlayerNoGame').toggle();
        $("#PlayerNoGame").html("<h4>Les joueurs n'ayant aucune partie:</h4> <?php pWithoutGame() ?>")
    });
</script>
<!-- Le styles -->
<link href="../assets/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
    body {
        padding-top: 60px;
        padding-bottom: 40px;
    }

    .sidebar-nav {
        padding: 9px 0;
    }

    @media (max-width: 980px) {

        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
            float: none;
            padding-left: 5px;
            padding-right: 5px;
        }
    }

    footer {
        background-color: grey;
        color: white;
        width: 100%
    }

    table {
         border-collapse: collapse;
        border: 1px solid #588c7e;
        width: 75%;
        color: #588c7e;
        text-align: center;
        border-color: #588c7e;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }
</style>



</html>