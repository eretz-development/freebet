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

    $q = $db->prepare("SELECT * FROM game");
    $q->execute();
    $result=$q->fetchall();

    foreach ($result as $res) {

      if (time() >= $res['date_game']) {
        $delete_game = $db->prepare("DELETE FROM game WHERE Id = :Id ");
        $delete_game->execute([
          'Id' => $res['Id']
        ]);
      }

    }

    $query = $db->prepare("SELECT * FROM game_with_equality");
    $query->execute();
    $answer=$query->fetchall();

    foreach ($answer as $ans) {

      if (time() >= $ans['date_game']) {
        $delete_game_equality = $db->prepare("DELETE FROM game_with_equality WHERE Id = :Id ");
        $delete_game_equality->execute([
          'Id' => $ans['Id']
        ]);
      }

    }

    ?>

  	<meta http-equiv="refresh" content="0.0001;URL=/freebet/index.php">

  </body>

</html>
