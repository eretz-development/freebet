<?php

	if (isset($_POST['game']))
	{
		extract($_POST);

		$q = $db->prepare("INSERT INTO game_with_equality(sport,ligue,equipe_une,equipe_deux,cote_equipe_une,cote_nul,cote_equipe_deux,date_game) VALUES(:sport,:ligue,:equipe_une,:equipe_deux,:cote_equipe_une,:cote_nul,:cote_equipe_deux,:date_game)");
	$q->execute
	([
		'sport' => $_POST['sport'],
		'ligue' => $_POST['league'],
		'equipe_une' => $_POST['home_team'],
		'equipe_deux' => $_POST['visit_team'],
		'cote_equipe_une' => $_POST['home_team_odd'],
		'cote_nul' => $_POST['tie_game_odd'],
		'cote_equipe_deux' => $_POST['visit_team_odd'],
		'date_game' => $_POST['date_game']
	]);

		$_SESSION['valeur_match_uefa_champions_league'] = $_SESSION['valeur_match_uefa_champions_league'] + 1 ;
		?><meta http-equiv="refresh" content="0.0001;URL=/freebet/index.php"><?php
		?><meta http-equiv="refresh" content="0.0001;URL=/freebet/includes/insert_game/api/api_game_uefa_champions_league.php"><?php

		if ($_SESSION['valeur_match_uefa_champions_league'] == 150) {
			?><meta http-equiv="refresh" content="0.0001;URL=/freebet/index.php"><?php
		}

	}

?>
