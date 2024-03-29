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
                </a>
                <a class="brand" href="?page=accueil">Projet SGBD : Carte à collectionner</a>
                <div>
                    <ul class="nav">
                        <li><a href="?page=accueil">Acceuil</a></li>
                        <li><a id="consultation" href="?page=consultations">Consultation</a></li>
                        <li><a id="statistic" href="?page=statistics">Statistiques</a></li>
                        <li><a id="update" href="?page=updates">Mise à jour</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <div id="consultations" class="well sidebar-nav">
                    <ul class="nav nav-list">
                        <li class="nav-header">
                            <h4>Consultation</h4>
                        </li>
                        <h5>Entités</h5>
                        <li><a href="?page=players" id="players">Joueurs</a></li>
                        <li><a href="?page=cards" id="cards">Cartes</a></li>
                        <li><a href="?page=parties" id="parties">Parties</a></li>
                        <li><a href="?page=decks" id="decks">Mains</a></li>
                        <li><a href="?page=versions" id="versions">Versions</a></li>
                        <h5>Relations</h5>
                        <li><a href="?page=playerPosCard" id="playerPosCard">Carte possédée par joueurs</a></li>
                        <li><a href="?page=playerPosDeck" id="playerPosDeck">Deck possédé par joueurs</a></li>
                        <li><a href="?page=deckPosCard" id="deckPosCard">Carte appartient à Deck</a></li>
                        <li><a href="?page=playerGame" id="playerGame">Parties jouées</a></li>
                        <h5>Avancées</h5>
                        <li><a href="?page=cardType" id="cardType">Cartes par type</a></li>
                        <li><a href="?page=cardNoDeck" id="cardNoDeck">Cartes sans Deck</a></li>
                        <li><a href="?page=playerNoGame" id="playerNoGame">Joueurs sans aucune partie</a></li>
                    </ul>
                </div>
                <div id="statistics" class="well sidebar-nav">
                    <ul class="nav nav-list">
                        <li class="nav-header">
                            <h4>Statistiques</h4>
                        </li>
                        <h5>Obligatoires</h5>
                        <li><a href="?page=pCards" id="pCards">Joueurs avec nombre de cartes qu'ils possèdent</a></li>
                        <li><a href="?page=pValues" id="pValues">Joueurs classé par valeur de collection</a></li>
                        <li><a href="?page=cPlayers" id="cPlayers">Cartes avec nombre des joueurs qui l'utilisent</a></li>
                        <li><a href="?page=pRare" id="pRare">Joueurs possédant le plus de cartes rares</a></li>
                        <li><a href="?page=cardsFamily" id="cardsFamily">Famille de carte</a></li>
                        <h5>Bonus</h5>
                        <li><a href="?page=nVCard" id="nVCard">Le nombre de versions par carte </a></li>
                        <li><a href="?page=nPosCard" id="nPosCard">Le nombre de fois qu'une carte a été possédée</a></li>
                        <li><a href="?page=vCDate" id="vCDate">Les versions créées après une date</a></li>
                        <li><a href="?page=lastPosCard" id="lastPosCard">Le dernier possesseur d'une carte</a></li>
                        <li><a href="?page=firstPosCard" id="firstPosCard">Le premier possesseur d'une carte</a></li>
                        <li><a href="?page=playerCards" id="playerCards">Les cartes d'un joueur</a></li>
                        <li><a href="?page=cardPlayers" id="cardPlayers">Les joueurs qui possedent une carte</a></li>
                        <li><a href="?page=wonGames" id="wonGames">Le nombre de parties gagnées par un joueur</a></li>

                    </ul>
                </div>

                <div id="updates" class="well sidebar-nav">
                    <ul class="nav nav-list">
                        <li class="nav-header">
                        <h4>Mise à jour</h4>
                        </li>
                        <h5>Entités</h5>
                        <li><a href="?page=chosePlayer" id="chosePlayer">Ajouter/Supprimer Un joueur</a></li>
                        <li><a href="?page=choseCard" id="choseCard">Ajouter/Supprimer carte</a></li>
                        <li><a href="?page=choseGame" id="addGame">Ajouter/Supprimer une partie</a></li>
                        <li><a href="?page=choseDeck" id="pRare">Ajouter/Supprimer une main</a></li>
                        <li><a href="?page=choseVersion" id="pRare">Ajouter/Supprimer une version de carte</a></li>
                        <h5>Relations</h5>
                        <li><a href="?page=cardPlayer" id="addCardPlayer">Ajouter/Supprimer une carte à un joueur</a></li>
                        <li><a href="?page=deckPlayer" id="addDeckPlayer">Ajouter/Supprimer une main à un joueur</a></li>
                        <li><a href="?page=gamePlayer" id="addGamePlayer">Ajouter/Supprimer une partie jouées par un joueur</a></li>
                        <li><a href="?page=cardDeck" id="addCardDeck">Ajouter/Supprimer une carte à une main</a></li>

                    </ul>
                </div>
                <!--/.well -->
            </div>
            <!--/span-->
            <div class="span9">
                <div class="hero-unit" id="accueil">
                    <h1>Cartes à collectionner !</h1>
                    <p>Gestion des cartes à jouer au sein de la
                        communauté de joueurs/collectionneurs</p>
                </div>
                <div id="welcome">
                    <h2> Bienvenu dans le service des cartes. </h2>
                </div>
                <div id="CardTypeF" style='text-align: center;'>
                    <form id='ID_FORMULAIRE'>
                    <h4>
                        Veuillez entre le nom du type:
                        <input type='text' id='type' name='type' size='10'>
                            <button id='ty' class='btn btn-primary' type="button">Ok</button> 
                    <h4>
                    </form> 
                </div>

                <!-------————————------------------———— Consult ----------——————————--------——————————--———-->
                <div id="CardTypeResult"></div>
                <div id="Players"></div>
                <div id="Cards"></div>
                <div id="Decks"></div>
                <div id="Parties"></div>
                <div id="Versions"></div>
                <div id="CardType"></div>
                <div id="CardNoDeck"></div>
                <div id="PlayerNoGame"></div>

                <!-------————————------------------———— Stats ----------——————————--------——————————--———-->
                <div id="PCards"></div>
                <div id="PValues"></div>
                <div id="CPlayers"></div>
                <div id="PRare"></div>
                <div id="CardsFamily"></div>
                <!-- bonus -->
                <div id="NVCard"></div>
                <div id="NPosCard"></div>
                <div id="VCDate" style="text-align: center;">
                    <form id="VCDateF">
                        <h3>Les versions crées après une date</h3>
                        <div>
                            <label for="vDate">La date*: </label>
                            <input type="date" name="vDate" id="vDate" required>
                        </div>
                        <div>
                            <button id='VCDateB' class='btn btn-primary' type="button">Montrer</button>
                        </div>
                    </form>
                </div>
                <div id="LastPosCard" style="text-align: center;">
                <form id="LastPosCardF">
                        <h3>Le dernier possesseur d'une carte</h3>
                        <div>
                            <label for="cardID">Id de la carte*: </label>
                            <input type="text" name="cardID" id="cardID" required>
                        </div>
                        <div>
                            <button id='LastPosCardB' class='btn btn-primary' type="button">Montrer</button>
                        </div>
                    </form>
                </div>
                <div id="FirstPosCard" style="text-align: center;">
                <form id="FirstPosCardF">
                        <h3>Le premier possesseur d'une cartee</h3>
                        <div>
                            <label for="cardID">Id de la carte: </label>
                            <input type="text" name="cardID" id="cardID" required>
                        </div>
                        <div>
                            <button id='FirstPosCardB' class='btn btn-primary' type="button">Montrer</button>
                        </div>
                    </form>
                </div>
                <div id="PlayerCards" style="text-align: center;">
                <form id="PlayerCardsF">
                        <h3>Les cartes d'un joueurs</h3>
                        <div>
                            <label for="pseudo">Le pseudo du Joueur*: </label>
                            <input type="text" name="pseudo" id="pseudo" required>
                        </div>
                        <div>
                            <button id='PlayerCardsB' class='btn btn-primary' type="button">Montrer</button>
                        </div>
                    </form>
                </div>
                <div id="CardPlayers" style="text-align: center;">
                <form id="CardPlayersF">
                        <h3>Les joueurs qui possèdent une carte</h3>
                        <div>
                            <label for="cardID">Id de la carte*: </label>
                            <input type="text" name="cardID" id="cardID" required>
                        </div>
                        <div>
                            <button id='CardPlayersB' class='btn btn-primary' type="button">Montrer</button>
                        </div>
                    </form>
                </div>
                <div id="WonGames" style="text-align: center;">
                <form id="WonGamesF">
                        <h3>Le nombre de parties gagnés par un joueur</h3>
                        <div>
                            <label for="pseudo">Le pseudo du joueur*: </label>
                            <input type="text" name="pseudo" id="pseudo" required>
                        </div>
                        <div>
                            <button id='WonGamesB' class='btn btn-primary' type="button">Montrer</button>
                        </div>
                    </form>
                </div>
                <div id="VCDateResult"></div>
                <div id="LastPosCardResult"></div>
                <div id="FirstPosCardResult"></div>
                <div id="PlayerCardsResult"></div>
                <div id="CardPlayersResult"></div>
                <div id="WonGamesResult"></div>

                <!-------————————------------------———— Update ----------——————————--------——————————--———-->
                <div id="MenuPlayer" style="text-align: center;">
                    <button id="addPlayerChose" class="btn btn-primary">Ajouter un joueur</button>
                    <button id="deletePlayerChose" class="btn btn-primary">Supprimer un joueur</button>
                </div>
                <div id="AddPlayer" style="text-align: center;">
                    <form id="addPForm">
                        <h3>Ajouter un Joueur</h3>
                        <div>
                            <label for="Nom">Pseudo*: </label>
                            <input type="text" name="PlayerName" id="PlayerName" required>
                        </div>
                        <div>
                            <label for="Prenom">Nom*: </label>
                            <input type="text" name="PlayerFirstName" id="PlayerFirstName" required>
                        </div>
                        <div>
                            <label for="PlayerPseudo">Prenom*: </label>
                            <input type="text" name="PlayerPseudo" id="PlayerPseudo" required>
                        </div>
                        <div>
                            <button id='addPButton' class='btn btn-primary' type="button">Ajouter</button>
                        </div>
                    </form>
                </div>
                <div id="DeletePlayer" style="text-align: center;">
                    <form id="deletePForm">
                        <h3>Supprimer un Joueur</h3>
                        <div>
                            <label for="PlayerPseudo">Pseudo*: </label>
                            <input type="text" name="PlayerPseudo" id="PlayerPseudo" required>
                        </div>
                        <div>
                            <button id='deletePButton' class='btn btn-primary'  type="button">Supprimer</button>
                        </div>
                    </form>
                </div>
                <div id="MenuCard" style="text-align: center;">
                    <button id="addCardChose" class="btn btn-primary">Ajouter une carte</button>
                    <button id="deleteCardChose" class="btn btn-primary">Supprimer une carte</button>
                </div>
                <div id="AddCard" style="text-align: center;">
                    <form id="addCForm">
                        <h3>Ajouter une Carte</h3>
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
                        <div>
                            <label for="CardFam">Famille de la carte*: </label>
                            <input type="text" name="CardFam" id="CardFam" required>
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
                            <button id='addCButton' class='btn btn-primary' type="button">Ajouter</button>
                        </div>

                    </form>
                </div>
                <div id="DeleteCard" style="text-align: center;">
                    <form id="deletePForm">
                        <h3>Supprimer une carte</h3>
                        <div>
                            <label for="cardID">ID de la carte*: </label>
                            <input type="text" name="cardID" id="cardID" required>
                        </div>
                        <div>
                            <button id='deleteCButton' class='btn btn-primary'>Supprimer</button>
                        </div>
                    </form>
                </div>
                <div id="MenuGame" style="text-align: center;">
                    <button id="addGameChose" class="btn btn-primary">Ajouter une partie</button>
                    <button id="deleteGameChose" class="btn btn-primary">Supprimer une partie</button>
                </div>
                <div id="AddGame" style="text-align: center;">
                    <form id="addGForm">
                        <h3>Ajouter une Partie</h3>
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
                            <button id='addGButton' class='btn btn-primary' type="button">Ajouter</button>
                        </div>
                    </form>
                </div>
                <div id="DeleteGame" style="text-align: center;">
                    <form id="deletePForm">
                        <h3>Supprimer un partie</h3>
                        <div>
                            <label for="GameNumber">Numero de la partie*: </label>
                            <input type="text" name="GameNumber" id="GameNumber" required>
                        </div>
                        <div>
                            <button id='deleteGButton' class='btn btn-primary' type="button">Supprimer</button>
                        </div>
                    </form>
                </div>
                <div id="MenuDeck" style="text-align: center;">
                    <button id="addDeckChose" class="btn btn-primary">Ajouter une main</button>
                    <button id="deleteDeckChose" class="btn btn-primary">Supprimer une main</button>
                </div>
                <div id="AddDeck" style="text-align: center;">
                    <form id="addDForm">
                        <h3>Ajouter une main</h3>
                        <div>
                            <label for="DeckName">Nom la main*: </label>
                            <input type="text" name="DeckName" id="DeckName" required>
                        </div>
                        <div>
                            <button id='addDButton' class='btn btn-primary' type="button">Ajouter</button>
                        </div>
                    </form>
                </div>
                <div id="DeleteDeck" style="text-align: center;">
                    <form id="deleteDForm">
                        <h3>Supprimer une main</h3>
                        <div>
                            <label for="DeckName">Numero de la version*: </label>
                            <input type="text" name="DeckName" id="DeckName" required>
                        </div>
                        <div>
                            <button id='deleteDButton' class='btn btn-primary' type="button">Supprimer</button>
                        </div>
                    </form>
                </div>

                <div id="MenuVersion" style="text-align: center;">
                    <button id="addVersionChose" class="btn btn-primary">Ajouter une carte</button>
                    <button id="deleteVersionChose" class="btn btn-primary">Supprimer une carte</button>
                </div>
                <div id="AddVersion" style="text-align: center;">
                    <form id="addVForm">
                        <h3>Ajouter une version de carte</h3>
                        <div>
                            <label for="cardVID">Id de la carte*:</label>
                            <input type="numero" name="cardVID" id="cardVID" required>
                        </div>
                        <div>
                            <label for="ImpressionDate">Date de l'impression*:</label>
                            <input type="date" name="ImpressionDate" id="ImpressionDate" required>
                        </div>
                        <div>
                            <label for="Rendu">Le rendu de la version de carte*: </label>
                            <input type="number" name="Rendu" id="Rendu" required>
                        </div>
                        <div>
                            <label for="Tirage">Le tirage de la version de carte*: </label>
                            <input type="number" name="Tirage" id="Tirage" required>
                        </div>
                        <div>
                            <label for="Cote">La cote de la version de carte*: </label>
                            <input type="number" name="Cote" id="Cote" required>
                        </div>
                        <div>
                            <button id='addVButton' class='btn btn-primary' type="button">Ajouter</button>
                        </div>
                    </form>
                </div>
                <div id="AddCP" style="text-align: center;">
                   <form id="addCPForm">
                        <h3>Ajouter une carte à un joueur</h3>
                        <div>
                            <label for="CardID">Id de la carte*: </label>
                            <input type="text" name="CardID" id="CardID" required>
                        </div>
                        <div>
                            <label for="PlayerPseudo">Pseudo*: </label>
                            <input type="text" name="PlayerPseudo" id="PlayerPseudo" required>
                        </div>
                        <div>
                            <button id='addCPButton' class='btn btn-primary' type="button">Ajouter</button>
                            <button id='deleteCPButton' class='btn btn-primary' type="button">Supprimer</button>
                        </div>
                    </form>
                </div>
                <div id="AddGP" style="text-align: center;">
                    <form id="addGPForm">
                        <h3>Ajouter une partie à un joueur</h3>
                        <div>
                            <label for="GameNumber">Nom de la partie*: </label>
                            <input type="text" name="GameNumber" id="GameNumber" required>
                        </div>
                        <div>
                            <label for="PlayerPseudo">Pseudo*: </label>
                            <input type="text" name="PlayerPseudo" id="PlayerPseudo" required>
                        </div>
                        <div>
                            <button id='addGPButton' class='btn btn-primary'  type="button">Ajouter</button>
                            <button id='deleteGPButton' class='btn btn-primary'  type="button">Supprimer</button>
                        </div>
                    </form>
                </div>
                <div id="AddDP" style="text-align: center;">
                    <form id="addDPForm">
                        <h3>Ajouter une main à un joueur</h3>
                        <div>
                            <label for="DeckName">Nom de la main*: </label>
                            <input type="text" name="DeckName" id="DeckName" required>
                        </div>
                        <div>
                            <label for="PlayerPseudo">Pseudo*: </label>
                            <input type="text" name="PlayerPseudo" id="PlayerPseudo" required>
                        </div>
                        <div>
                            <button id='addDPButton' class='btn btn-primary'  type="button">Ajouter</button>
                            <button id='deleteDPButton' class='btn btn-primary' type="button">Supprimer</button>
                        </div>
                    </form>
                </div>
                <div id="AddDC" style="text-align: center;">
                    <form id="addDCForm">
                        <h3>Ajouter une carte à une main</h3>
                        <div>
                            <label for="DeckName">Nom de la main*: </label>
                            <input type="text" name="DeckName" id="DeckName" required>
                        </div>
                        <div>
                            <label for="CardID">Id de la carte*: </label>
                            <input type="text" name="CardID" id="CardID" required>
                        </div>
                        <div>
                            <button id='addDCButton' class='btn btn-primary' type="button">Ajouter</button>
                            <button id='deleteDCButton' class='btn btn-primary' type="button">Supprimer</button>
                        </div>
                    </form>
                </div>

                <div id="DeleteVersion" style="text-align: center;">
                    <form id="deleteVForm">
                        <h3>Supprimer une version de carte</h3>
                        <div>
                            <label for="VersionName">Numero de la version*: </label>
                            <input type="text" name="VersionName" id="VersionName" required>
                        </div>
                        <div>
                            <button id='deleteVButton' class='btn btn-primary' type="button">Supprimer</button>
                        </div>
                    </form>
                </div>


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
        var funcs = new Array("#consultations", "#statistics", "#updates",
                            "#VCDate","#LastPosCard", "#FirstPosCard","#PlayerCards", 
                            "#CardPlayers","#WonGames",
                             "#CardTypeF", "#CardTypeResult", "#AddPlayer", "#AddCard",
                             "#AddGame", "#AddVersion", "#AddDeck", "#MenuCard",
                              "#MenuPlayer","#MenuVersion","#MenuDeck","#MenuGame",
                              "#DeleteDeck","#DeleteCard","#DeleteVersion","#DeleteGame",
                              "#DeletePlayer","#AddCP","#AddGP","#AddDP","#AddDC");
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
        //////Entitées
        case "consultations":
            $("#consultations").show();
            break;
        case "statistics":
            $("#statistics").show();
            break;
        case "updates":
            $("#updates").show();
            break;
        case "cardType":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'type';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Consultation</h3>")
                $("#CardTypeF").show();
            } else {
                $("#CardTypeF").hide();
                var tab = "<?php if (isset($_GET['type'])) consltType($_GET['type']) ?>"
                $("#CardTypeResult").html("<h4>Les cartes de type: " + type + "</h4>" + tab);
                $("#CardTypeResult").show();
            }
            break;
        case "players":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Players").html("<h4>La liste des joueurs:</h4> <?php players() ?>")
            break;
        case "cards":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Cards").html("<h4>La liste des cartes:</h4> <?php cartes() ?>")
            break;
        case "parties":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Parties").html("<h4>La liste des parties:</h4> <?php parties() ?>")
            break;
        case "decks":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Decks").html("<h4>La liste des main:</h4> <?php decks() ?>")
            break;
        case "versions":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Versions").html("<h4>La liste des versions:</h4> <?php versions() ?>")
            break;
        //////Relations
        case "playerPosCard":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Cards").html("<h4>La liste des cartes:</h4> <?php playerPosCard() ?>")
            break;
        case "playerPosDeck":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Parties").html("<h4>La liste des parties:</h4> <?php playerPosDeck() ?>")
            break;
        case "deckPosCard":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Decks").html("<h4>La liste des main:</h4> <?php deckPosCard() ?>")
            break;
        case "playerGame":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Versions").html("<h4>La liste des versions:</h4> <?php playerGame() ?>")
            break;
        //////Advanced
        case "cardNoDeck":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#CardNoDeck").html("<h4>cartes n'appartenants à aucune main:</h4> <?php cardnDeck() ?>")
            break;
        case "playerNoGame":
            $("#consultations").show();
            $("#welcome").html("<h3>Consultation</h3>")
            $("#PlayerNoGame").html("<h4>Les joueurs n'ayant aucune partie:</h4> <?php pWithoutGame() ?>");
            break;
        ////\\\\\\\\//////\\\\\\\\\\\\///////\\\\\//STATS/\\\\\\///////\\\\\\\\\\////////\\\\\\\////
        case ("pCards"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $('#PCards').html("<h4>Les cartes avec le nombre de joueurs qui les utilisent:</h4> <?php playersCards() ?>");
            break;
        case ("pValues"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#PValues").html("<h4>Les joueurs avec les valeurs de leurs cartes:</h4> <?php playersValues() ?>")
            break;
        case ("cPlayers"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#CPlayers").html("<h4>Les cartes avec le nombre de joueurs qui l'utilisent:</h4> <?php cardsPlayers() ?>")
            break;
        case ("pRare"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#PRare").html("<h4>Les joueurs avec leurs cartes rares:</h4> <?php playersRare() ?>")
            break;
        case ("cardsFamily"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#CardsFamily").html("<h4>Les familles de cartes:</h4> <?php cardsFamilies() ?>")
            break;
        //////////////////////////////////////BONUS///////////////////////////////////
        case ("nVCard"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#NVCard").html("<h4>Le nombre de versions par carte:</h4> <?php numberVersionsCards() ?>")
            break;
        case ("nPosCard"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#NPosCard").html("<h4>Le nombre de fois qu'une carte a été possédée:</h4> <?php numberPossessionsCard() ?>")
            break;
        case ("vCDate"):
            $("#statistics").show();
            $("#welcome").html("<h3>Mise à Jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'vDate';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#VCDate").show();
            } else {
                $("#VCDate").hide();
                var val = "<?php if (isset($_GET['vDate'])) echo $_GET['vDate'] ?>"
                var tab = "<?php if (isset($_GET['vDate'])) versionsAfterDate($_GET['vDate']) ?>"
                $("#VCDateResult").html("<h4>Les Version crées après: " + val + "</h4>" + tab);
                $("#VCDateResult").show();
            }
            break;
        case ("lastPosCard"):
            $("#statistics").show();
            $("#welcome").html("<h3>Mise à Jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'cardID';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                console.log("here");
                $("#LastPosCard").show();
            } else {
                console.log("here");
                $("#LastPosCard").hide();
                var val = "<?php if (isset($_GET['cardID'])) echo $_GET['cardID'] ?>"
                var tab = "<?php if (isset($_GET['cardID'])) lastPossession($_GET['cardID']) ?>"
                $("#LastPosCardResult").html("<h4>Le dernier possesseur de la carte d'id: " + val + "</h4>" + tab);
                $("#LastPosCardResult").show();
            }
            break;
        case ("firstPosCard"):
            $("#statistics").show();
            $("#welcome").html("<h3>Mise à Jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'cardID';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                console.log("here");
                $("#FirstPosCard").show();
            } else {
                console.log("here");
                $("#FirstPosCard").hide();
                var val = "<?php if (isset($_GET['cardID'])) echo $_GET['cardID'] ?>"
                var tab = "<?php if (isset($_GET['cardID'])) firstPossession($_GET['cardID']) ?>"
                $("#FirstPosCardResult").html("<h4>Le premier possesseur de la carte d'id: " + val + "</h4>" + tab);
                $("#FirstPosCardResult").show();
            }
            break;
        case ("playerCards"):
            $("#statistics").show();
            $("#welcome").html("<h3>Mise à Jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'pseudo';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#PlayerCards").show();
            } else {
                $("#PlayerCards").hide();
                var val = "<?php if (isset($_GET['pseudo'])) echo $_GET['pseudo'] ?>"
                var tab = "<?php if (isset($_GET['pseudo'])) cardsPlayer($_GET['pseudo']) ?>"
                $("#PlayerCardsResult").html("<h4>Les carte du joueur: " + val + "</h4>" + tab);
                $("#PlayerCardsResult").show();
            }
            break;
        case ("cardPlayers"):
            $("#statistics").show();
            $("#welcome").html("<h3>Mise à Jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'cardID';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#CardPlayers").show();
            } else {
                console.log("hhh")
                $("#CardPlayers").hide();
                var val = "<?php if (isset($_GET['cardID'])) echo $_GET['cardID'] ?>"
                var tab = "<?php if (isset($_GET['cardID'])) cardPlayers($_GET['cardID']) ?>"
                $("#CardPlayersResult").html("<h4>Les joueurs qui possèdent la carte d'id: " + val + "</h4>" + tab);
                $("#CardPlayersResult").show();
            }
            break;
        case ("wonGames"):
            $("#statistics").show();
            $("#welcome").html("<h3>Mise à Jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'pseudo';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#WonGames").show();
            } else {
                $("#WonGames").hide();
                var val = "<?php if (isset($_GET['pseudo'])) echo $_GET['pseudo'] ?>"
                var tab = "<?php if (isset($_GET['pseudo'])) winRate($_GET['pseudo']) ?>"
                $("#WonGamesResult").html("<h4>Les parties jouées par: " + val + "</h4>" + tab);
                $("#WonGamesResult").show();
            }
            break;
        case ("lastPosCard"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#LastPosCard").show();
            break;
        case ("firstPosCard"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#FirstPosCard").show();
            break;
        case ("playerCards"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#PlayerCards").show();
            break;
        case ("cardPlayers"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#CardPlayers").show();
            break;
        case ("wonGames"):
            $("#statistics").show();
            $("#welcome").html("<h3>Statistiques</h3>")
            $("#WonGames").show();
            break;

        //\\\\\\\\//////\\\\\\//////\\\////UPDATE//////\\\\\\/////\\\\\\\\////\\\\\\\\
        ////////////////////////////////// PLAYER /////////////////////////////////////
        case ("chosePlayer"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            $("#MenuPlayer").show();
            break;
        case ("addPlayer"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'playerName';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#AddPlayer').show();
            } else {
                var add = "<?php if (
                                isset($_GET['playerName']) &&
                                isset($_GET['playerFirstName']) &&
                                isset($_GET['playerPseudo'])
                            )
                                addPlayer($_GET['playerName'], $_GET['playerFirstName'], $_GET['playerPseudo']); ?>"
                $('#AddPlayer').show();

            }
            break;
        case ("deletePlayer"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'playerPseudo';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#DeletePlayer').show();
            } else {
                var add = "<?php if (
                                isset($_GET['playerPseudo'])
                            )
                                deletePlayer($_GET['playerPseudo']); ?>"
            }
            break;

        ////////////////////////////////// CARD /////////////////////////////////////
        case ("choseCard"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            $("#MenuCard").show();
            break;
        case ("addCard"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'cardTitle';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#AddCard').show();
            } else {
                var add = "<?php if (
                                isset($_GET['cardTitle']) &&
                                isset($_GET['cardDescription']) &&
                                isset($_GET['cardType']) &&
                                isset($_GET['cardFam']) &&
                                isset($_GET['attack']) &&
                                isset($_GET['defence']) &&
                                isset($_GET['speed'])
                            ) {
                                addCard(
                                    $_GET['cardTitle'],
                                    $_GET['cardDescription'],
                                    $_GET['cardType'],
                                    $_GET['cardFam'],
                                    $_GET['attack'],
                                    $_GET['defence'],
                                    $_GET['speed']
                                );
                            }
                            ?>";

            }
            break;
        case ("deleteCard"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'cardID';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#DeleteCard').show();
            } else {
                var add = "<?php if (
                                isset($_GET['playerPseudo'])
                            )
                                deleteCard($_GET['playerPseudo']); ?>"
            }
            break;
        ////////////////////////////////// GAME /////////////////////////////////////
        case ("choseGame"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            $("#MenuGame").show();
            break;
        case ("addGame"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'gameDate';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#AddGame').show();
            } else {
                var add = "<?php if (
                                isset($_GET['gameDate']) &&
                                isset($_GET['gamePlace']) &&
                                isset($_GET['gameType']) &&
                                isset($_GET['gameResult'])
                            ) {
                                addParty($_GET['gameDate'], $_GET['gamePlace'], $_GET['gameType'], $_GET['gameResult']);
                            }
                            ?>";

            }
            break;
        case ("deleteGame"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'gameNumber';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#DeleteGame').show();
            } else {
                var add = "<?php if (
                                isset($_GET['gameNumber'])
                            )
                                deleteGame($_GET['gameNumber']); ?>"
            }
            break;
        ////////////////////////////////// DECK /////////////////////////////////////
        case ("choseDeck"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            $("#MenuDeck").show();
            break;
        case ("addDeck"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'deckName';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#AddDeck').show();
            } else {
                var add = "<?php if (isset($_GET['deckName'])) {
                                addDeck($_GET['deckName']);
                            }
                            ?>";
            }
            break;
        case ("deleteDeck"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'deckName';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#DeleteDeck').show();
            } else {
                var add = "<?php if (
                                isset($_GET['deckName'])
                            )
                                deleteDeck($_GET['deckName']); ?>"
            }
            break;
        ////////////////////////////////// VERSION /////////////////////////////////////
        case ("choseVersion"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            $("#MenuVersion"    ).show();
            break;
        case ("addVersion"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'impressionDate';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#AddVersion').show();
            } else {
                var add = "<?php if (
                                isset($_GET['cardVID']) &&
                                isset($_GET['impressionDate']) &&
                                isset($_GET['rendu']) &&
                                isset($_GET['tirage']) &&
                                isset($_GET['cote'])
                            ) {
                                addVersion($_GET['cardVID'], $_GET['impressionDate'], $_GET['rendu'], $_GET['tirage'], $_GET['cote']);
                                echo($_GET['cardVID']);
                            }
                            ?>";

            }
            break;
        case ("deleteVersion"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'versionName';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#DeleteVersion').show();
            } else {
                var add = "<?php if (
                                isset($_GET['versionName'])
                            )
                                deleteVersion($_GET['versionName']); ?>"
            }
            break;
        case ("cardPlayer"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'mode';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $("#AddCP").show();
            } else {
                if ( url.indexOf('mode=deleteCardPlayer') == -1){
                    var add = "<?php if (
                                isset($_GET['cardTitle']) &&
                                isset($_GET['playerPseudo'])
                            ) {
                                addPossessioncartes($_GET['cardTitle'], $_GET['playerPseudo']);//TO CHANGE
                            }
                            ?>";
                }
                else {
                    var add = "<?php if (
                                isset($_GET['cardID']) &&
                                isset($_GET['playerPseudo'])
                            ) {
                                deletePossesioncartes($_GET['cardID'], $_GET['playerPseudo']); //GOOD
                            }
                            ?>";
                }
            }
            break;
        case ("gamePlayer"):
            console.log("in game player")
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'mode';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                console.log("in if");
                $("#welcome").html("<h3>Mise à Jour</h3>")
            $("#AddGP").show();
            } else {
                if(url.indexOf('mode=addGamePlayer') == -1){
                    var add = "<?php if (
                                isset($_GET['cardTitle']) &&
                                isset($_GET['playerPseudo'])
                            ) {
                                addPartiesjouees($_GET['cardTitle'], $_GET['playerPseudo']);//TO CHANGE
                            }
                            ?>";
                }
                else {
                    var add = "<?php if (
                                isset($_GET['gameN']) &&
                                isset($_GET['playerPseudo'])
                            ) {
                                deletePartiesjouees($_GET['gameN'], $_GET['playerPseudo']);//GOOD
                            }
                            ?>";
                }
            }
            break;
        case ("deckPlayer"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'mode';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#AddDP').show();
            } else {
                if(url.indexOf('mode=deleteDeckPlayer') == -1){
                    var add = "<?php if (
                                isset($_GET['deckName']) &&
                                isset($_GET['playerPseudo'])
                            ) {
                                addPossesiondecks($_GET['deckName'], $_GET['playerPseudo'], 1, 2);//TO CHANGE
                            }
                            ?>";
                }
                else {
                    var add = "<?php if (
                                isset($_GET['deckName']) &&
                                isset($_GET['playerPseudo'])
                            ) {
                                deletePossesiondecks($_GET['deckName'], $_GET['playerPseudo']); //GOOD
                            }
                            ?>";
                }
            }
            break;
        case ("cardDeck"):
            $("#updates").show();
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'deckName';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#AddDC').show();
            } else {
                var add = "<?php if (
                                isset($_GET['deckName']) &&
                                isset($_GET['cardID'])
                            ) {
                                addPartiesjouees($_GET['deckName'], $_GET['playerPseudo'], 1, 2);//TO CHANGE
                            }
                            ?>";
            }
            break;
        
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////NAVBAR/////////////////////////////////////
    $("consultation").click(function() {
        document.location.href = '?page=consultations'
    })

    $("statistic").click(function() {
        document.location.href = '?page=statistics'
    })

    $("update").click(function() {
        document.location.href = '?page=updates'
    })
    ////////////////////////////////////////////////////////////////////////////
    /////////////////////\\\\\\\\\\//Statistics\\\\//////\\\\\\\\\///\\\\\\\\\\\\/

    $("#VCDateB").click(function() {
        var vDate = document.forms['VCDateF'].elements['vDate'].value;
        document.location.href = '?page=vCDate&vDate=' + vDate;
    });
    
    $("#LastPosCardB").click(function() {
        var cardID = document.forms['LastPosCardF'].elements['cardID'].value;
        document.location.href = '?page=lastPosCard&cardID=' + cardID;
    });
    
    $("#FirstPosCardB").click(function() {
        var cardID = document.forms['FirstPosCardF'].elements['cardID'].value;
        document.location.href = '?page=firstPosCard&cardID=' + cardID;
    });
    
    $("#PlayerCardsB").click(function() {
        var pseudo = document.forms['PlayerCardsF'].elements['pseudo'].value;
        document.location.href = '?page=playerCards&pseudo=' + pseudo;
    });

    $("#CardPlayersB").click(function() {
        var cardID = document.forms['CardPlayersF'].elements['cardID'].value;
        document.location.href = '?page=cardPlayers&cardID=' + cardID;
    });

    $("#WonGamesB").click(function() {
        var pseudo = document.forms['WonGamesF'].elements['pseudo'].value;
        document.location.href = '?page=wonGames&pseudo=' + pseudo;
    });
    

    ////////////////////////////////////////////////////////////////////////////
    //////////////////////////////// PLAYER ///////////////////////////////////

    $("#addPlayerChose").click(function() {
        document.location.href = '?page=addPlayer'
        $("#MenuPlayer").hide();
    });

    $("#deletePlayerChose").click(function() {
        document.location.href = '?page=deletePlayer'
        $("#MenuPlayer").hide();
    });

    $('#addPButton').click(function() {
        var nom = document.forms['addPForm'].elements['PlayerName'].value;
        var prenom = document.forms['addPForm'].elements['PlayerFirstName'].value;
        var pseudo = document.forms['addPForm'].elements['PlayerPseudo'].value;
        document.location.href = '?page=addPlayer&playerName=' + nom + '&playerFirstName=' + prenom + '&playerPseudo=' + pseudo;
        alert("Player added");
    });

    $('#deletePButton').click(function() {
        var pseudo = document.forms['deletePForm'].elements['PlayerPseudo'].value;
        document.location.href = '?page=addPlayer&playerPseudo=' + pseudo;
        alert("Player Deleted");
    });

    ////////////////////////////////////////////////////////////////////////////
    //////////////////////////////// CARD /////////////////////////////////////

    $("#ty").click(function() {
        var valeur = document.forms['ID_FORMULAIRE'].elements['type'].value;
        document.location.href = '?page=cardType&type=' + valeur;
    });


    $("#addCardChose").click(function() {
        document.location.href = '?page=addCard'
        $("#MenuCard").hide();
    });

    $("#deleteCardChose").click(function() {
        document.location.href = '?page=deleteCard'
        $("#MenuCard").hide();
    });

    $('#addCButton').click(function() {
        var title = document.forms['addCForm'].elements['CardTitle'].value;
        var desc = document.forms['addCForm'].elements['CardDescription'].value;
        var type = document.forms['addCForm'].elements['CardType'].value;
        var fam = document.forms['addCForm'].elements['CardFam'].value;
        var att = document.forms['addCForm'].elements['Attack'].value;
        var def = document.forms['addCForm'].elements['Defence'].value;
        var spe = document.forms['addCForm'].elements['Speed'].value;
        document.location.href = '?page=addCard&cardTitle=' + title +
            '&cardDescription=' + desc +
            '&cardType=' + type +
            '&cardFam=' + fam +
            '&attack=' + att +
            '&defence=' + def +
            '&speed=' + spe;

        alert("Card added");
    });

    $('#deleteCButton').click(function() {
        var cardID = document.forms['deleteCForm'].elements['cardID'].value;
        document.location.href = '?page=addCard&cardID=' + cardID;
        alert("Card Deleted");
    });

    /////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////// GAME ///////////////////////////////////

    
    $("#addGameChose").click(function() {
        document.location.href = '?page=addGame'
        $("#MenuGame").hide();
    });

    $("#deleteGameChose").click(function() {
        document.location.href = '?page=deleteGame'
        $("#MenuGame").hide();
    });

    $('#addGButton').click(function() {
        var date = document.forms['addGForm'].elements['GameDate'].value;
        var place = document.forms['addGForm'].elements['GamePlace'].value;
        var type = document.forms['addGForm'].elements['GameType'].value;
        var result = document.forms['addGForm'].elements['GameResult'].value;
        document.location.href = '?page=addGame&gameDate=' + date +
            '&gamePlace=' + place +
            '&gameType=' + type +
            '&gameResult=' + result
        alert("Game added");
    });

    $('#deleteGButton').click(function() {
        var GameID = document.forms['deleteGForm'].elements['GameNumber'].value;
        document.location.href = '?page=addGame&gameNumber=' + GameID;
        alert("Game Deleted");
    });


    ////////////////////////////////////////////////////////////////////////////
    //////////////////////////////// DECK /////////////////////////////////////

    $("#addDeckChose").click(function() {
        document.location.href = '?page=addDeck'
        $("#MenuDeck").hide();
    });

    $("#deleteDeckChose").click(function() {
        document.location.href = '?page=deleteDeck'
        $("#MenuDeck").hide();
    });

    $('#addDButton').click(function() {
        var name = document.forms['addDForm'].elements['DeckName'].value;
        document.location.href = '?page=addDeck&deckName=' + name
        alert("Deck added");
    });

    $('#deleteDButton').click(function() {
        var deck = document.forms['deleteDForm'].elements['DeckName'].value;
        document.location.href = '?page=addDeck&deckName=' + deck;
        alert("Deck Deleted");
    });
    ////////////////////////////////////////////////////////////////////////////
    //////////////////////////////// VERSION ///////////////////////////////////


    $("#addVersionChose").click(function() {
        document.location.href = '?page=addVersion'
        $("#MenuVersion").hide();
    });

    $("#deleteVersionChose").click(function() {
        document.location.href = '?page=deleteVersion'
        $("#MenuVersion").hide();
    });

    $('#addVButton').click(function() {
        var card = document.forms['addVForm'].elements['cardVID'].value;
        var date = document.forms['addVForm'].elements['ImpressionDate'].value;
        var rendu = document.forms['addVForm'].elements['Rendu'].value;
        var tirage = document.forms['addVForm'].elements['Tirage'].value;
        var cote = document.forms['addVForm'].elements['Cote'].value;
        document.location.href = '?page=addVersion&impressionDate=' + date +
            '&cardVID=' + card +
            '&rendu=' + rendu +
            '&tirage=' + tirage +
            '&cote=' + cote
        alert("Version added");
    });

    $('#deleteVButton').click(function() {
        var version = document.forms['deleteVForm'].elements['VersionName'].value;
        document.location.href = '?page=addVersion&versionName=' + version;
        alert("Version Deleted");
    });


    $('#addCPButton').click(function() {
        console.log("HHHHH");
        var ID = document.forms['addCPForm'].elements['CardID'].value;
        var pseudo = document.forms['addCPForm'].elements['PlayerPseudo'].value;
        document.location.href = '?page=cardPlayer&mode=addCardPlayer&cardID=' + ID +
                                  '&playerPseudo=' + pseudo;
        alert("Card changed owner");
    });

    $('#addGPButton').click(function() {
        var number = document.forms['addGPForm'].elements['GameNumber'].value;
        var pseudo = document.forms['addGPForm'].elements['PlayerPseudo'].value;
        document.location.href = '?page=gamePlayer&mode=addGamePlayer&gameN=' + number +
                                 '&playerPseudo=' + pseudo;

        alert("The player successfully played a game");
    });

    $('#addDPButton').click(function() {
        var name = document.forms['addDPForm'].elements['DeckName'].value;
        var pseudo = document.forms['addDPForm'].elements['PlayerPseudo'].value;
        document.location.href = '?page=deckPlayer&mode=addDeckPlayer&deckName=' + name +
                                '&playerPseudo=' + pseudo;

        alert("The player owns a deck");
    });

    $('#addDCButton').click(function() {
        var name = document.forms['addDCForm'].elements['DeckName'].value;
        var ID = document.forms['addDCForm'].elements['CardID'].value;
        document.location.href = '?page=cardDeck&mode=addDeckCard&deckName=' + name +
                                '&cardID=' + ID;

        alert("The deck contains a card");
    });

    $('#deleteCPButton').click(function() {
        var ID = document.forms['addCPForm'].elements['CardID'].value;
        var pseudo = document.forms['addCPForm'].elements['PlayerPseudo'].value;
        document.location.href = '?page=cardPlayer&mode=deleteCardPlayer&cardID=' + ID +
            '&playerPseudo=' + pseudo;

        alert("Card changed owner");
    });

    $('#deleteGPButton').click(function() {
        console.log("lll")
        var number = document.forms['addGPForm'].elements['GameNumber'].value;
        var pseudo = document.forms['addGPForm'].elements['PlayerPseudo'].value;
        document.location.href = '?page=gamePlayer&mode=deleteGamePlayer&gameN=' + number +
            '&playerPseudo=' + pseudo;

        alert("The player successfully played a game");
    });

    $('#deleteDPButton').click(function() {
        var name = document.forms['addDPForm'].elements['DeckName'].value;
        var pseudo = document.forms['addDPForm'].elements['PlayerPseudo'].value;
        document.location.href = '?page=deckPlayer&mode=deleteDeckPlayer&deckName=' + name +
            '&playerPseudo=' + pseudo;

        alert("The player owns a deck");
    });

    $('#deleteDCButton').click(function() {
        var name = document.forms['addDCForm'].elements['DeckName'].value;
        var ID = document.forms['addDCForm'].elements['CardID'].value;
        document.location.href = '?page=cardDeck&mode=deleteDeckCard&deckName=' + name +
            '&cardID=' + ID;

        alert("The deck contains a card");
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
    #accueil {
        margin-right: 34%;
    }
    #req {
        padding: 5px;
        width: 50%;
        font-size: 16px;
        line-height: 20px;

    }
    h4 {
        color: #4b4b4b;
    }

    h5 {
        color: #a5a5a5;
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
</style>



</html>