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
                        <li><a href="?page=players" id="players">Joueurs</a></li>
                        <li><a href="?page=cards" id="cards">Cartes</a></li>
                        <li><a href="?page=parties" id="parties">Parties</a></li>
                        <li><a href="?page=decks" id="decks">Mains</a></li>
                        <li><a href="?page=versions" id="versions">Versions</a></li>
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
                        <li><a href="?page=chosePlayer" id="chosePlayer">Ajouter/Supprimer Un joueur</a></li>
                        <!-- <li><a href="?page=addPlayer" id="addPlayer">Ajouter/Supprimer Un joueur</a></li> -->
                        <li><a href="?page=choseCard" id="choseCard">Ajouter/Supprimer carte</a></li>
                        <!-- <li><a href="?page=addCard" id="addCard">Ajouter/Supprimer carte</a></li> -->
                        <li><a href="?page=choseGame" id="addGame">Ajouter/Supprimer une partie</a></li>
                        <!-- <li><a href="?page=addGame" id="addGame">Ajouter/Supprimer une partie</a></li> -->
                        <li><a href="?page=choseDeck" id="pRare">Ajouter/Supprimer une main</a></li>
                        <!-- <li><a href="?page=addVersion" id="pRare">Ajouter/Supprimer une version de carte</a></li> -->
                        <li><a href="?page=choseVersion" id="pRare">Ajouter/Supprimer une version de carte</a></li>
                        <li><a href="?page=cardPlayer" id="addCardPlayer">Ajouter/Supprimer une carte à un joueur</a></li>
                        <li><a href="?page=deckPlayer" id="addDeckPlayer">Ajouter/Supprimer une main à un joueur</a></li>
                        <li><a href="?page=gamePlayer" id="addGamePlayer">Ajouter/Supprimer une partie jouées par un joueur</a></li>
                        <li><a href="?page=gamePlayer" id="addCardDeck">Ajouter/Supprimer une carte à une main</a></li>

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
                <div id="Players"></div>
                <div id="Cards"></div>
                <div id="Decks"></div>
                <div id="Parties"></div>
                <div id="Versions"></div>
                <div id="CardType"></div>
                <div id="CardNoDeck"></div>
                <div id="PlayerNoGame"></div>
                <hr>

                <div id="PCards"></div>
                <div id="PValues"></div>
                <div id="CPlayers"></div>
                <div id="PRare"></div>
                <div id="CardsFamily"></div>
                <div id="MenuPlayer" style="text-align: center;">
                    <button id="addPlayerChose" class="btn btn-primary">Ajouter un joueur</button>
                    <button id="deletePlayerChose" class="btn btn-primary">Supprimer un joueur</button>
                </div>
                <div id="AddPlayer" style="text-align: center;">
                    <form id="addPForm">
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
                            <a id='addPButton' class='button-class'>Ajouter</a>
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
                            <a id='deletePButton' class='button-class'>Supprimer</a>
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
                            <a id='addCButton' class='button-class'>Ajouter</a>
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
                            <a id='deleteCButton' class='button-class'>Supprimer</a>
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
                            <a id='addGButton' class='button-class'>Ajouter</a>
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
                            <a id='deleteGButton' class='button-class'>Supprimer</a>
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
                            <a id='addDButton' class='button-class'>Ajouter</a>
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
                            <a id='deleteDButton' class='button-class'>Supprimer</a>
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
                            <a id='addVButton' class='button-class'>Ajouter</a>
                        </div>
                        </form>
                </div>
                <div id="AddCP" style="text-align: center;">
                   <form id="addCPForm">
                        <h3>Ajouter une carte à un joueur</h3>
                        <div>
                            <label for="CardTitle">Titre de la carte*: </label>
                            <input type="text" name="CardTitle" id="CardTitle" required>
                        </div>
                        <div>
                            <label for="PlayerPseudo">Pseudo*: </label>
                            <input type="text" name="PlayerPseudo" id="PlayerPseudo" required>
                        </div>
                        <div>
                            <a id='addCPButton' class='button-class'>Ajouter</a>
                        </div>
                    </form>
                </div>
                <div id="AddGP" style="text-align: center;">
                    <form id="addGPForm">
                        <h3>Ajouter une partie à un joueur</h3>
                        <div>
                            <label for="GameName">Nom de la partie*: </label>
                            <input type="text" name="CardTitle" id="CardTitle" required>
                        </div>
                        <div>
                            <label for="PlayerPseudo">Pseudo*: </label>
                            <input type="text" name="PlayerPseudo" id="PlayerPseudo" required>
                        </div>
                        <div>
                            <a id='addGPButton' class='button-class'>Ajouter</a>
                        </div>
                    </form>
                </div>

                        <div>
                <div id="DeleteVersion" style="text-align: center;">
                    <form id="deleteVForm">
                        <h3>Supprimer une version de carte</h3>
                        <div>
                            <label for="VersionName">Numero de la version*: </label>
                            <input type="text" name="VersionName" id="VersionName" required>
                        </div>
                        <div>
                            <a id='deleteVButton' class='button-class'>Supprimer</a>
                        </div>
                    </form>
                </div>

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
        var funcs = new Array("#AddPlayer", "#AddCard", "#AddGame",
                              "#AddVersion", "#AddDeck", "#MenuCard",
                              "#MenuPlayer","#MenuVersion","#MenuDeck","#MenuGame",
                              "#DeleteDeck","#DeleteCard","#DeleteVersion","#DeleteGame",
                              "#DeletePlayer","#AddCP","#AddGP");
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
            if (url.indexOf('&' + field + '=') == -1) {
                $("#CardType").html("<div style='text-align: center;'><form id='ID_FORMULAIRE'><h4>Veuillez entre le nom du type:<input type='text' id='type' name='type' size='10'> <a id='ty' class='button-class' >Ok</a> <h4></form></div>")
            } else {
                var tab = "<?php if (isset($_GET['type'])) consltType($_GET['type']) ?>"
                $("#CardType").html("<h4>Les cartes de type: " + type + "</h4>" + tab);
            }
            break;
        case "players":
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Players").html("<h4>La liste des joueurs:</h4> <?php players() ?>")
            break;
        case "cards":
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Cards").html("<h4>La liste des cartes:</h4> <?php cartes() ?>")
            break;
        case "parties":
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Parties").html("<h4>La liste des parties:</h4> <?php parties() ?>")
            break;
        case "decks":
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Decks").html("<h4>La liste des main:</h4> <?php decks() ?>")
            break;
        case "versions":
            $("#welcome").html("<h3>Consultation</h3>")
            $("#Versions").html("<h4>La liste des versions:</h4> <?php versions() ?>")
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

        ////////////////////////////////// PLAYER /////////////////////////////////////
        case ("chosePlayer"):
            $("#welcome").html("<h3>Mise à jour</h3>")
            $("#MenuPlayer").show();
            break;
        case ("addPlayer"):
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
            $("#welcome").html("<h3>Mise à jour</h3>")
            $("#MenuCard").show();
            break;
        case ("addCard"):
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
            $("#welcome").html("<h3>Mise à jour</h3>")
            $("#MenuGame").show();
            break;
        case ("addGame"):
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
            $("#welcome").html("<h3>Mise à jour</h3>")
            $("#MenuDeck").show();
            break;
        case ("addDeck"):
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
            $("#welcome").html("<h3>Mise à jour</h3>")
            $("#MenuVersion"    ).show();
            break;
        case ("addVersion"):
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
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'playerPseudo';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $("#AddCP").show();
            } else {
                var add = "<?php if (
                                isset($_GET['cardTitle']) &&
                                isset($_GET['playerPseudo'])
                            ) {
                                addAppartenance($_GET['cardTitle'], $_GET['playerPseudo']);
                            }
                            ?>";
            }
            break;
            case ("gamePlayer"):
            $("#welcome").html("<h3>Mise à jour</h3>")
            var type = "<?php if (isset($_GET['type'])) echo $_GET['type'] ?>"
            var field = 'gameName';
            var url = window.location.href;
            if (url.indexOf('&' + field + '=') == -1) {
                $("#welcome").html("<h3>Mise à Jour</h3>")
                $('#AddGP').show();
            } else {
                var add = "<?php if (
                                isset($_GET['gameName']) &&
                                isset($_GET['playerPseudo'])
                            ) {
                                addPartiesjouees($_GET['gameName'], $_GET['playerPseudo'], 1, 2);
                            }
                            ?>";
            }
            break;
        
    }

    $("#ty").click(function() {
        var valeur = document.forms['ID_FORMULAIRE'].elements['type'].value;
        document.location.href = '?page=cardType&type=' + valeur;
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

    $('#deleteVButton').click(function() {
        var version = document.forms['deleteVForm'].elements['VersionName'].value;
        document.location.href = '?page=addVersion&versionName=' + version;
        alert("Version Deleted");
    });
    ////////////////////////////////////////////////////////////////////////////

    $('#addCPButton').click(function() {
        var title = document.forms['addCPForm'].elements['CardTitle'].value;
        var pseudo = document.forms['addCPForm'].elements['PlayerPseudo'].value;
        document.location.href = '?page=addCardPlayer&cardTitle=' + title 
            'playerPseudo=' + pseudo;

        alert("Card changed owner");
    });

    $('#addGPButton').click(function() {
        var name = document.forms['addGPForm'].elements['GameName'].value;
        var pseudo = document.forms['addGPForm'].elements['PlayerPseudo'].value;
        document.location.href = '?page=addGamePlayer&gameName=' + name +
            'playerPseudo=' + pseudo;

        alert("The player successfully played a game");
    });

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
</style>



</html>