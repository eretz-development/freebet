<?php

	if (isset($_POST['parier']))
	{
		extract($_POST);

		$reqstack = $db->prepare("SELECT stack FROM user_stack WHERE pseudo = ? ");
		$reqstack->execute(array($_SESSION['pseudo']));
		$stackuser = $reqstack->fetch();

		if($_POST['resultat'] != "null"){
			if($_POST['mise'] >= '100'){
				if(($stackuser['stack']-$_POST['mise']) >= 0){
					$a = $db->prepare("SELECT equipe_une,equipe_deux,cote_equipe_une,cote_equipe_deux FROM game WHERE Id = :Id");
					$a->execute(['Id' => $_POST['id']]);
					$answer=$a->fetchall();

					$cote_mise;
					$perdant;
					foreach($answer as $ans){
						if ($_POST['resultat'] == $ans['equipe_une']){
							$cote_mise = $ans['cote_equipe_une'];
							$perdant = $ans['equipe_deux'];
						}else {
							$cote_mise = $ans['cote_equipe_deux'];
							$perdant = $ans['equipe_une'];
						}
					}

			    	$q = $db->prepare("INSERT INTO bet(pseudo,game_id,resultat,perdant,domicile,mise,cote) VALUES(:pseudo,:game_id,:resultat,:perdant,:domicile,:mise,:cote)");
					$q->execute
					([
						'pseudo' => $_SESSION['pseudo'],
						'game_id' => $_POST['id'],
					  'resultat' => $_POST['resultat'],
						'perdant' => $perdant,
						'domicile' => $ans['equipe_une'],
					  'mise' => $_POST['mise'],
						'cote' => $cote_mise
					]);

					$q = $db->prepare("INSERT INTO history_bet(pseudo,game_id,resultat,perdant,domicile,mise,cote) VALUES(:pseudo,:game_id,:resultat,:perdant,:domicile,:mise,:cote)");
				$q->execute
				([
					'pseudo' => $_SESSION['pseudo'],
					'game_id' => $_POST['id'],
					'resultat' => $_POST['resultat'],
					'perdant' => $perdant,
					'domicile' => $ans['equipe_une'],
					'mise' => $_POST['mise'],
					'cote' => $cote_mise
				]);

					$requser = $db->prepare("SELECT * FROM user_stack WHERE pseudo = ? ");
					$requser->execute(array($_SESSION['pseudo']));
					$user_stack = $requser->fetch();

					$new_stack = $user_stack['stack'] - $_POST['mise'];

					$ns = htmlspecialchars($new_stack);
					$insertstack = $db->prepare("UPDATE user_stack SET stack = ? WHERE pseudo = ?");
					$insertstack->execute(array($ns, $_SESSION['pseudo']));
					?>	<META HTTP-EQUIV="Refresh" CONTENT="0.000001">	<?php
				} else {
					echo '<script type=\'text/javascript\'>alert("Vous ne possédez pas suffisement de point pour effectuer cette opération");</script>';
				}
			} else {
				echo '<script type=\'text/javascript\'>alert("Vous devez indiquez le nombre de points que vous souhaitez miser");</script>';
			}
	  } else {
			echo '<script type=\'text/javascript\'>alert("Vous devez choisir une equipe");</script>';
	  }
	}

?>
