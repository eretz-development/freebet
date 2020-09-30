<?php session_start();?>
<?php require_once 'en_tete.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

<body>

  <?php

    $win_value;

    $q = $db->prepare("SELECT * FROM game");
    $q->execute();
    $result=$q->fetchall();

    $a = $db->prepare("SELECT * FROM result");
    $a->execute();
    $answer=$a->fetchall();

    foreach ($result as $res) {
      foreach ($answer as $ans) {

          if (($res['equipe_une'] == $ans['equipe_une'] && $res['equipe_deux'] == $ans['equipe_deux'] && $res['sport'] == $ans['sport'] && $res['ligue'] == $ans['ligue']) || ($res['equipe_une'] == $ans['equipe_deux'] && $res['equipe_deux'] == $ans['equipe_une'] && $res['sport'] == $ans['sport'] && $res['ligue'] == $ans['ligue'])) {
						$query = $db->prepare("SELECT * FROM bet WHERE game_id = :game_id");
            $query->execute([
              'game_id' => $res['Id']
            ]);
            $resque=$query->fetchall();

            $equipe_gagnante;
            if($ans['score_equipe_une'] > $ans['score_equipe_deux']){
              $equipe_gagnante = $ans['equipe_une'];
            }else {
              $equipe_gagnante = $ans['equipe_deux'];
            }

            foreach ($resque as $rq) {

              if($rq['resultat'] == $equipe_gagnante){
								$win_bet = $db->prepare("INSERT INTO win_bet(pseudo,game_id,resultat,perdant,domicile,mise,cote) VALUES(:pseudo,:game_id,:resultat,:perdant,:domicile,:mise,:cote)");
								$win_bet->execute([
									'pseudo' => $rq['pseudo'],
									'game_id' => $rq['game_id'],
								  'resultat' => $rq['resultat'],
									'perdant' => $rq['perdant'],
									'domicile' => $rq['domicile'],
								  'mise' => $rq['mise'],
									'cote' => $rq['cote']
								]);

                $requser = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo ");
            		$requser->execute([
                  'pseudo' => $rq['pseudo']
                ]);
            		$user_stack = $requser->fetch();

                $win_value = $rq['mise'] * $rq['cote'];
            		$new_stack = $user_stack['stack'] + $win_value;

            		$ns = htmlspecialchars($new_stack);
            		$insertstack = $db->prepare("UPDATE user_stack SET stack = ? WHERE pseudo = ?");
            		$insertstack->execute(array($ns, $rq['pseudo']));
              }

							$delete_game = $db->prepare("DELETE FROM game WHERE Id = :Id ");
							$delete_game->execute([
								'Id' => $rq['game_id']
							]);

							$delete_bet = $db->prepare("DELETE FROM bet WHERE Id = :Id ");
					    $delete_bet->execute([
								'Id' => $rq['Id']
							]);

							$delete_result = $db->prepare("DELETE FROM result WHERE sport = :sport AND ligue = :ligue AND equipe_une = :equipe_une AND equipe_deux = :equipe_deux ");
					    $delete_result->execute([
								'sport' => $res['sport'],
								'ligue' => $res['ligue'],
								'equipe_une' => $res['equipe_une'],
								'equipe_deux' => $res['equipe_deux']
							]);

            }
          }

      }
    }

  ?>

	<meta http-equiv="refresh" content="0.0001;URL=/freebet/index.php">

</body>

</html>
