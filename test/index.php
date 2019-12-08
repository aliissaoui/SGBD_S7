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
                        <li><a href="#" id="pCards">Joueurs avec nombre de cartes qu'ils possèdent</a></li>
                        <li><a href="#" id="pValues">Joueurs classé par valeur de collection</a></li>
                        <li><a href="#" id="cPlayers">Cartes avec nombre des joueurs qui l'utilisent</a></li>
                        <li><a href="#" id="pRare">Joueurs possédant le plus de cartes rares</a></li>
                        <li><a href="#" id="cardsFamily">Famille de carte</a></li>
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
                <div id="welcome"> <h2> Bienvenu dans le service des cartes. </h2></div>
                <div id="cslt"> <h3 >Consultations</h3></div>
                <div id="CardType"></div>
                <div id="CardNoDeck"></div>
                <div id="PlayerNoGame"></div>
                <hr>
                <div id="sts"><h3>Statistiques</h3></div>
                <div id="PCards"></div>
                <div id="PValues"></div>
                <div id="CPlayers"></div>
                <div id="PRare"></div>
                <div id="CardsFamily"></div>
                <hr>
                <footer>
                    <div class="container-fluid padding">
                        <p>HALA Mehdi, ISSAOUI Ali, BOUTGAYOUT Imad, FAIZ Abderrahmane 2019</p>
                    </div>
                </footer>

            </div>

</body>

<script>

    var hd = function(keep){
        var funcs = new Array("#CardType","#CardNoDeck", "#PlayerNoGame", "#PCards", "#PValues", "#CPlayers", "#PRare", "#CardsFamily");
        funcs.forEach(elem => { if ( elem != keep ){
                                    $(elem).hide();
                                }})
    }

    hd("all");
    $("#cslt").hide();
    $("#sts").hide();

    $("#cardType").click(function() {
        $("#welcome").hide();
        $("#cslt").show();
        $("#sts").hide();
        hd("CardType");
        $('#CardType').toggle();
        $("#CardType").html("<form id='ID_FORMULAIRE'> <input type='text' id='type' name='type' size='10'> <a id='ty' class='button-class' >Ok</a> </form>")
        $("#ty").click(function() {
            var valeur = document.forms['ID_FORMULAIRE'].elements['type'].value;
            var tab = "<?php consltType("slayer") ?>"
            $("#CardType").html("<h4>Les cartes de type: " + valeur + "</h4>" + tab);
        });
    });

    $("#cardNoDeck").click(function() {
        $("#welcome").hide();
        $("#cslt").show();
        $("#sts").hide();
        hd("cardNoDeck");
        $('#CardNoDeck').toggle();
        $("#CardNoDeck").html("<h4>cartes n'appartenants à aucune main:</h4> <?php cardnDeck() ?>")
    });

    $("#playerNoGame").click(function() {
        $("#welcome").hide();
        $("#cslt").show();
        $("#sts").hide();
        hd("#playerNoGame");
        $('#PlayerNoGame').toggle();
        $("#PlayerNoGame").html("<h4>Les joueurs n'ayant aucune partie:</h4> <?php pWithoutGame() ?>")
    });

    $("#pCards").click(function() {
        $("#welcome").hide();
        $("#cslt").hide();
        $("#sts").show();
        hd("#pCards");
        $('#PCards').toggle();
        $('#PCards').html("<h4>Les cartes avec le nombre de joueurs qui les utilisent:</h4> <?php playersCards() ?>");
    });

    $("#pValues").click(function() {
        $("#welcome").hide();
        $("#cslt").hide();
        $("#sts").show();
        hd("#pValues");
        $('#PValues').toggle();
        $("#PValues").html("<h4>Les joueurs avec les valeurs de leurs cartes:</h4> <?php playersValues() ?>")

    });

    $("#cPlayers").click(function() {
        $("#welcome").hide();
        $("#cslt").hide();
        $("#sts").show();
        hd("#cPlayers");
        $('#CPlayers').toggle();
        $("#CPlayers").html("<h4>Les cartes avec le nombre de joueurs qui l'utilisent:</h4> <?php cardsPlayers() ?>")
    });

    $("#pRare").click(function() {
        $("#welcome").hide();
        $("#cslt").hide();
        $("#sts").show();
        hd("#pRare");
        $('#PRare').toggle();
        $("#PRare").html("<h4>Les joueurs avec leurs cartes rares:</h4> <?php playersRare() ?>")
    });

    $("#cardsFamily").click(function() {
        $("#welcome").hide();
        $("#cslt").hide();
        $("#sts").show();
        hd("#cardsFamily");
        $('#CardsFamily').toggle();
        $("#CardsFamily").html("<h4>Les familles de cartes:</h4> <?php cardsFamilies() ?>")
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
        width: 30%
    }

    th {
        font-size: 17px;
        color: #5a5a5a;
    }

    /* table {
        border-collapse: collapse;
        border: 1px solid #588c7e;
        width: 75%;
        color: #588c7e;
        text-align: center;
        border-color: #588c7e;
    }

    th {
        background-color: #989898;
        color: white
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    } */
</style>



</html>