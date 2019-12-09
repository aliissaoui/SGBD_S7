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
                        <li><a href="?page=cardType" id="cardType">Cartes par type</a></li>
                        <li><a href="?page=cardNoDeck" id="cardNoDeck">Cartes sans Deck</a></li>
                        <li><a href="?page=playerNoGame" id="playerNoGame">Joueurs sans aucune partie</a></li>
                        <li class="nav-header">
                            <h4>Statistiques</h4>
                        </li>
                        <li><a href="?page=pCards" id="pCards">Joueurs avec nombre de cartes qu'ils possèdent</a></li>
                        <li><a href="?page=pValues" id="pValues">Joueurs classé par valeur de collection</a></li>
                        <li><a href="?page=cPlayers" id="cPlayers">Cartes avec nombre des joueurs qui l'utilisent</a></li>
                        <li><a href="?page=pRare" id="pRare">Joueurs possédant le plus de cartes rares</a></li>
                        <li><a href="?page=cardsFamily" id="cardsFamily">Famille de carte</a></li>
                        <li class="nav-header">
                            <h4>Mise à jour</h4>
                        </li>
                        <li><a href="?page=addPlayer" id="addPlayer">Ajouter/Supprimer Un joueur</a></li>
                        <li><a href="?page=addCardPlayer" id="addCardPlayer">Ajouter/Supprimer carte à un joueur</a></li>
                        <li><a href="?page=addGamePlayer" id="addGamePlayer">Ajouter/Supprimer une partie à un joueur</a></li>
                        <li><a href="?page=pRare" id="pRare">Ajouter/Supprimer une main à un joueur</a></li>
                        <li><a href="?page=cardsFamily" id="cardsFamily">Ajouter/Supprimer une carte à une main d'un joueur</a></li>
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
                <div id="welcome">
                    <h2> Bienvenu dans le service des cartes. </h2>
                </div>

                <div id="CardType"></div>
                <div id="CardNoDeck"></div>
                <div id="PlayerNoGame"></div>
                <hr>

                <div id="PCards"></div>
                <div id="PValues"></div>
                <div id="CPlayers"></div>
                <div id="PRare"></div>
                <div id="CardsFamily"></div>
                <div id="AddPlayer" style="text-align: center;">
                    <form>
                        <h3>Ajouter un Joueur</h3>
                        <div>
                            <label for="Nom">Nom*: </label>
                            <input type="text" name="PlayerName" id="PlayerName" required>
                        </div>
                        <div>
                            <label for="Prenom">Prenom*: </label>
                            <input type="text" name="PlayerFirstName" id="PlayerFirstName" required>
                        </div>
                        <div>
                            <label for="PlayerPseudo">Pseudo*: </label>
                            <input type="text" name="PlayerPseudo" id="PlayerPseudo" required>
                        </div>
                        <div>
                            <input type="submit" value="Ajouter">
                        </div>
                    </form>
                </div>
                <div id="AddCardPlayer" style="text-align: center;">
                    <form>
                        <h3>Ajouter une Carte à un joueur</h3>
                        <div>
                            <label for="NoPlayerCNamem">Nom du joueur*: </label>
                            <input type="text" name="PlayerCName" id="PlayerCName" required>
                        </div>
                        <div>
                            <label for="CardTitle">Titre de la carte*:</label>
                            <input type="text" name="CardTitle" id="CardTitle" required> </label>
                        </div>
                        <div>
                            <label for="CardDescription">Description de la carte*:</label>
                            <input type="text" name="CardDescription" id="CardDescription" required> </label>
                        </div>
                        <div>
                            <label for="CardType">Type de la carte*: </label>
                            <input type="text" name="CardType" id="CardType" required>
                        </div>
                        <h5>
                            Caractéristiques de la carte:
                        </h5>
                        <div>
                            <label for="Attack">Attaque*: </label>
                            <input type="number" name="Attack" id="Attack" required>
                        </div>
                        <div>
                            <label for="Defence">Défense*: </label>
                            <input type="number" name="Defence" id="Defence" required>
                        </div>
                        <div>
                            <label for="Speed">Rapidité*: </label>
                            <input type="number" name="Speed" id="Speed" required>
                        </div>
                        <h5>
                            Autres options:
                        </h5>
                        <div>
                            <label for="CardDeck">le nom de la main si la carte appartient à une main:
                            </label>
                            <input type="text" name="CardDeck" id="CardDeck">
                        </div>
                        <div>
                            <input type="submit" value="Ajouter">
                        </div>

                    </form>
                </div>
                <div id="AddGamePlayer" style="text-align: center;">
                    <form>
                        <h3>Ajouter une Partie à un joueur</h3>
                        <div>
                            <label for="PseudoPGame">Pseudo du joueur*: </label>
                            <input type="text" name="PseudoPGame" id="PseudoPGame" required>
                        </div>
                        <div>
                            <label for="DeckGame">Le Nom de la main utilisée*:</label>
                            <input type="text" name="DeckGame" id="DeckGame" required>
                        </div>
                        <div>
                            <label for="GameDate">Date de la partie*:</label>
                            <input type="date" name="GameDate" id="GameDate" required>
                        </div>
                        <div>
                            <label for="GamePlace">Lieu de la partie*: </label>
                            <input type="text" name="GamePlace" id="GamePlace" required>
                        </div>
                        <div>
                            <label for="GameType">Type de la partie*: </label>
                            <input type="text" name="GameType" id="GameType" required>
                        </div>

                        <div>
                            <label for="GameResult">Résultat de la partie*:</label>
                            <select name="GameResult" id="GameResult" required>
                                <option value="yes">Gagnée</option>
                                <option value="No">Perdu</option>
                            </select>
                        </div>

                        <div>
                            <label for="Opponent">Adversaire: </label>
                            <input type="text" name="Opponent" id="Opponent" required>
                        </div>
                        <div>
                            <input type="submit" value="Ajouter">
                        </div>
                    </form>
                </div>
                <div id="PRare" style="text-align: center;"></div>
                <div id="CardsFamily" style="text-align: center;"></div>

                <hr>

            </div>

        </div>
    </div>
    <footer>
        <div class="container-fluid padding">
            <p>HALA Mehdi, ISSAOUI Ali, BOUTGAYOUT Imad, FAIZ Abderrahmane 2019</p>
        </div>
    </footer>
</body>



<script>
    var hd = function(keep) {
        var funcs = new Array("#AddPlayer", "#AddCardPlayer", "#AddGamePlayer");
        funcs.forEach(elem => {
            if (elem != keep) {
                $(elem).hide();
            }
        })
    }

    var page = "<?php if (isset($_GET['page'])) echo $_GET['page'] ?>"
    hd("all")

    switch (page) {
        //Consultation
        case "cardType":
            $("#welcome").html("<h3>Consultation</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'type';
            var url = window.location.href;
            if(url.indexOf('&'+field+'=') == -1){
                $("#CardType").html("<div style='text-align: center;'><form id='ID_FORMULAIRE'><h4>Veuillez entre le nom du type:<input type='text' id='type' name='type' size='10'> <a id='ty' class='button-class' >Ok</a> <h4></form></div>")
            }
            else {
                var tab = "<?php if (isset($_GET['type'])) consltType($_GET['type']) ?>"
                $("#CardType").html("<h4>Les cartes de type:" + type + "</h4>" + tab);
                console.log(type.lenght);
            }
            break;
        case "cardNoDeck":
            $("#welcome").html("<h3>Consultation</h3>")
            $("#CardNoDeck").html("<h4>cartes n'appartenants à aucune main:</h4> <?php cardnDeck() ?>")
            break;
        case "playerNoGame":
            $("#welcome").html("<h3>Consultation</h3>")
            $("#PlayerNoGame").html("<h4>Les joueurs n'ayant aucune partie:</h4> <?php pWithoutGame() ?>");
            break;
            //Stats
        case ("pCards"):
            $("#welcome").html("<h3>Statistiques</h3>")
            $('#PCards').html("<h4>Les cartes avec le nombre de joueurs qui les utilisent:</h4> <?php playersCards() ?>");
            break;
        case ("pValues"):
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#PValues").html("<h4>Les joueurs avec les valeurs de leurs cartes:</h4> <?php playersValues() ?>")
            break;
        case ("cPlayers"):
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#CPlayers").html("<h4>Les cartes avec le nombre de joueurs qui l'utilisent:</h4> <?php cardsPlayers() ?>")
            break;
        case ("pRare"):
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#PRare").html("<h4>Les joueurs avec leurs cartes rares:</h4> <?php playersRare() ?>")
            break;
        case ("cardsFamily"):
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#CardsFamily").html("<h4>Les familles de cartes:</h4> <?php cardsFamilies() ?>")
            break;
        case ("addPlayer"):
            $("#welcome").html("<h3>Mise à Jours</h3>")
            $('#AddPlayer').show();
            break;
        case ("addCardPlayer"):
            $("#welcome").html("<h3>Mise à Jours</h3>")
            $('#AddCardPlayer').show();
            break;
        case ("addGamePlayer"):
            $("#welcome").html("<h3>Mise à Jours</h3>")
            $('#AddGamePlayer').show();
            break;
    }

    $("#ty").click(function() {
        var valeur = document.forms['ID_FORMULAIRE'].elements['type'].value;
        document.location.href = '?page=cardType&type=' + valeur;
        // $("#CardType").html("<h4>Les cartes de type: " + valeur + "</h4>" + tab);
        // $("#welcome").hide();
        console.log("hehe");
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
        width: 100%;
        position: fixed;
        bottom: 0;
    }

    input {
        left: 440;
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