<body>
	<br>
	<div id="alert">
		<?php
		if (isset($_POST['formsend'])){

			extract($_POST);

			if (!empty($email) && !empty($password) && !empty($cpassword)){

				if ($password == $cpassword) {

					$options = [
						'cost' => 12,
					];

					$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);


					$c = $db->prepare("SELECT email FROM user WHERE email = :email");
					$c->execute(['email' => $email]);

					$result = $c->rowCount();

					if ($result == 0) {

						$mdp_ver = $db->prepare("SELECT pseudo FROM user WHERE pseudo = :pseudo");
						$mdp_ver->execute(['pseudo' => $pseudo]);

						$mdp_verif = $mdp_ver->rowCount();

						if($mdp_verif == 0) {

							// Génération aléatoire d'une clé
							$q = $db->prepare("INSERT INTO user(email,pseudo,password) VALUES(:email,:pseudo,:password)");
							$q->execute([
								'email' => $email,
								'pseudo' => $pseudo,
								'password' => $hashpass,
							]);
							echo "Le compte a été crée";

							$base_stack = '1000';

							$a = $db->prepare("INSERT INTO user_stack(pseudo,stack) VALUES(:pseudo,:stack)");
							$a->execute([
								'pseudo' => $pseudo,
								'stack' => $base_stack
							]);

							?>
							<meta http-equiv="refresh" content="5;URL=/freebet/">
							<main>
							<?php

						// Préparation du mail contenant le lien d'activation
						$destinataire = $email;
						$sujet = "Activer votre compte" ;
						$mail = "inscription@freebet.com" ;
						$entete = 'From: '.$mail."\nContent-Type: text/html; charset=iso-8859-1";

						// Le lien d'activation est composé du pseudo(log) et de la clé(cle)
						$message = '
						<h1>Bienvenue sur Freebet,</h1>

						Pour activer votre compte, veuillez cliquer ci-dessous.<br><a href="http://eretz-development.com/freebet/includes/validation.php?log='.urlencode($pseudo).'">Cliquez ici</a><br>
						---------------
						<br>Ceci est un mail automatique, Merci de ne pas y répondre.';
						?></main><?php
						//...
						// Fermeture de la connexion
						//...
						mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
						echo 'Un mail vous a été envoyé, vérifiez votre boite de réception pour confirmer votre inscription';
						} else {
							echo 'Ce nom est dejà utilisé';
						}
					}

					else{
						echo 'Cet E-mail est dejà utilisé';
					}
				}

				else{
					echo 'Les mots de passe sont différents';
				}

			}

			}
				//...
		?>
	</div>
</body>

<style media="screen">
@font-face{
  font-family:'sporo';
  src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}
#alert{
	font-size:20px;
	color:white;
	font-family:'sporo';
}
</style>
