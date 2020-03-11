<?php

	if (isset($_POST['result']))
	{
		extract($_POST);

    $a = $db->prepare("SELECT equipe_une,equipe_deux FROM result WHERE equipe_une = :equipe_une AND equipe_deux = :equipe_deux");
    $a->execute([
      'equipe_une' => $_POST['home_team'],
      'equipe_deux' => $_POST['visit_team']
    ]);

    $result = $a->rowCount();

    if ($result == 0) {
    	$q = $db->prepare("INSERT INTO result(sport,ligue,equipe_une,equipe_deux,score_equipe_une,score_equipe_deux) VALUES(:sport,:ligue,:equipe_une,:equipe_deux,:score_equipe_une,:score_equipe_deux)");
		$q->execute
		([
			'sport' => $_POST['sport'],
			'ligue' => $_POST['league'],
		  'equipe_une' => $_POST['home_team'],
		  'equipe_deux' => $_POST['visit_team'],
      'score_equipe_une' => $_POST['home_team_result'],
			'score_equipe_deux' => $_POST['visit_team_result']
		]);
  }

		$_SESSION['valeur_result_six_nations'] = $_SESSION['valeur_result_six_nations'] + 1 ;
		?><meta http-equiv="refresh" content="0.0001;URL=/freebet/index.php"><?php
		?><meta http-equiv="refresh" content="0.0001;URL=/freebet/includes/insert_result/api/api_result_six_nations.php"><?php

		if ($_SESSION['valeur_result_six_nations'] == 150) {
			?><meta http-equiv="refresh" content="0.0001;URL=/freebet/index.php"><?php
		}

	}

?>
