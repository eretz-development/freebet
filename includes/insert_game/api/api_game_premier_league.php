<?php session_start();?>
<?php require_once '../../en_tete.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

		<input type="text" name="valeur_match_premier_league" id="valeur_match_premier_league" value="<?php echo $_SESSION["valeur_match_premier_league"]; ?>">

    <form action="api_game_premier_league.php" method="post">
      <input type="text" name="sport" id="sport">
      <input type="text" name="league" id="league">
      <input type="text" name="home_team" id="home_team">
      <input type="text" name="home_team_odd" id="home_team_odd">
			<input type="text" name="tie_game_odd" id="tie_game_odd">
      <input type="text" name="visit_team_odd" id="visit_team_odd">
      <input type="text" name="visit_team" id="visit_team">
			<input type="text" name="date_game" id="date_game">
      <input type="submit" name="game" id="game">
    </form>

    <?php require_once '../new/new_game_premier_league.php' ?>

    <script src="../../jquery-3.4.1.js"></script>
    <script src="../../ajax.js"></script>
		<script src="../modify_name_game.js"></script>
    <script src="../insert/insert_game_premier_league.js"></script>
</body>

</html>
