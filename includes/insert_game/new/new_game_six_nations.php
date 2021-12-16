<?php

	if (isset($_POST['game']))
	{
		extract($_POST);

		$q = $db->prepare("INSERT INTO game(sport,ligue,equipe_une,equipe_deux,cote_equipe_une,cote_equipe_deux,date_game) VALUES(:sport,:ligue,:equipe_une,:equipe_deux,:cote_equipe_une,:cote_equipe_deux,:date_game)");
	$q->execute
	([
		'sport' => $_POST['sport'],
		'ligue' => $_POST['league'],
		'equipe_une' => $_POST['home_team'],
		'equipe_deux' => $_POST['visit_team'],
		'cote_equipe_une' => $_POST['home_team_odd'],
		'cote_equipe_deux' => $_POST['visit_team_odd'],
		'date_game' => $_POST['date_game']
	]);

		$_SESSION['valeur_match_six_nations'] = $_SESSION['valeur_match_six_nations'] + 1 ;
		?><meta http-equiv="refresh" content="0.0001;URL=/freebet/index.php"><?php
		?><meta http-equiv="refresh" content="0.0001;URL=/freebet/includes/insert_game/api/api_game_six_nations.php"><?php

		if ($_SESSION['valeur_match_six_nations'] == 150) {
			?><meta http-equiv="refresh" content="0.0001;URL=/freebet/index.php"><?php
		}

	}

?>
