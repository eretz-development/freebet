<?php session_start();?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

<body>

<header>
  <?php require_once 'en_tete.php'; ?>
</header>
<br>
<br>
<br>
<br>
<br>
<br>

		<?php
      $q = $db->prepare("DELETE FROM result ");
      $q->execute();
    ?>
</body>

</html>
