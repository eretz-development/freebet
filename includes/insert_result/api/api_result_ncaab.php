<?php session_start();?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

<body>

<header>
  <?php require_once '../../en_tete.php'; ?>
</header>
<br>
<br>
<br>
<br>
<br>
<br>

		<input type="text" name="valeur_result_ncaab" id="valeur_result_ncaab" value="<?php echo $_SESSION["valeur_result_ncaab"]; ?>">

    <form action="api_result_ncaab.php" method="post">
      <input type="text" name="sport" id="sport">
      <input type="text" name="league" id="league">
      <input type="text" name="home_team" id="home_team">
      <input type="text" name="home_team_result" id="home_team_result">
      <input type="text" name="visit_team_result" id="visit_team_result">
      <input type="text" name="visit_team" id="visit_team">
      <input type="submit" name="result" id="resultat">
    </form>

    <?php require_once '../new/new_result_ncaab.php' ?>

    <script src="../../jquery-3.4.1.js"></script>
    <script src="../../ajax.js"></script>
    <script src="../insert/insert_result_ncaab.js"></script>
</body>

</html>
