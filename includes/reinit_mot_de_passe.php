
<!-- update verification -->
<body>
	<br>
	<div id="alert">
		<?php
		$pseudo = base64_decode($_GET['log']);
		if (isset($_POST['formsend'])){
			extract($_POST);
			if (!empty($password) && !empty($cpassword)){
				if ($password == $cpassword) {
					$options = [
						'cost' => 12,
					];

					$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

					$q = $db->prepare("UPDATE user SET password='".$hashpass."' WHERE pseudo = :pseudo");
					$q->execute([
						'pseudo' => $pseudo
					]);
					echo 'Votre mot de passe a bien été modifié, vous pouvez desormais vous connecter';
					?>
					<meta http-equiv="refresh" content="4;URL=/freebet/includes/login_page.php">
					<?php
				}
				else{
					echo "Les mots de passe ne corespondent pas";
				}
			}
		}
		?>
	</div>
</body>
<style media="screen">
@font-face{
  font-family:'sporo';
  src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}
#alert{
	font-size:15px;
	color:white;
	font-family:'sporo';
}
</style>
