
<!-- update verification -->

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

						if (($result == 1 && $email == $_SESSION['email']) || ($result == 0)) {

							if($result == 1 && $email == $_SESSION['email']){

								$pseudo_ver = $db->prepare("SELECT pseudo FROM user WHERE pseudo = :pseudo");
								$pseudo_ver->execute(['pseudo' => $pseudo]);

								$pseudo_verif = $pseudo_ver->rowCount();

								if(($pseudo_verif == 1 && $pseudo == $_SESSION['pseudo']) || ($pseudo_verif == 0)) {
									$q = $db->prepare("UPDATE user SET email='".$email."',pseudo='".$pseudo."',password='".$hashpass."' WHERE email = :email AND pseudo = :pseudo");
									$q->execute([
										'email' => $_SESSION['email'],
										'pseudo' => $_SESSION['pseudo']
									]);

									$q = $db->prepare("UPDATE user_stack SET pseudo='".$pseudo."' WHERE pseudo = :pseudo");
									$q->execute([
										'pseudo' => $_SESSION['pseudo']
									]);

									$q = $db->prepare("UPDATE bet SET pseudo='".$pseudo."' WHERE pseudo = :pseudo");
									$q->execute([
										'pseudo' => $_SESSION['pseudo']
									]);

									$q = $db->prepare("UPDATE win_bet SET pseudo='".$pseudo."' WHERE pseudo = :pseudo");
									$q->execute([
										'pseudo' => $_SESSION['pseudo']
									]);

									$q = $db->prepare("UPDATE history_bet SET pseudo='".$pseudo."' WHERE pseudo = :pseudo");
									$q->execute([
										'pseudo' => $_SESSION['pseudo']
									]);

									$_SESSION['email']= $email;
									$_SESSION['pseudo'] = $pseudo;
									?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
									exit();

								} else {
									echo "Ce pseudo est deja utilisée";
								}
							} elseif ($result == 0) {
								$pseudo_ver = $db->prepare("SELECT pseudo FROM user WHERE pseudo = :pseudo");
								$pseudo_ver->execute(['pseudo' => $pseudo]);

								$pseudo_verif = $pseudo_ver->rowCount();

								if(($pseudo_verif == 1 && $pseudo == $_SESSION['pseudo']) || ($pseudo_verif == 0)) {
									$q = $db->prepare("UPDATE user SET email='".$email."',pseudo='".$pseudo."',password='".$hashpass."' WHERE email = :email AND pseudo = :pseudo");
									$q->execute([
										'email' => $_SESSION['email'],
										'pseudo' => $_SESSION['pseudo']
									]);
									$stmt = $db->prepare("UPDATE user SET actif = 0 WHERE pseudo = :pseudo");
									$stmt->bindParam('pseudo', $pseudo);
									$stmt->execute();
															// Génération aléatoire d'une clé
											// Préparation du mail contenant le lien d'activation
											$destinataire = $email;
											$sujet = "Activer votre adresse E-mail" ;
											$entete = "From: inscription@freebet.com" ;

											// Le lien d'activation est composé du pseudo(log) et de la clé(cle)
											$message = 'Vous avez changer votre E-mail
											Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
											ou copier/coller dans votre navigateur Internet.

											http://eretz-development.com/freebet/includes/validation.php?log='.urlencode($pseudo).'


											---------------
											Ceci est un mail automatique, Merci de ne pas y répondre.';

											//...
											// Fermeture de la connexion
											//...
											mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
											session_unset();
											session_destroy();
										?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php

											?>
											<script type="text/javascript">
												alert("Un mail vous a ete envoye, verifiez votre boite de reception pour confirmer le changement d'adresse mail");
											</script>

											<?php
									exit();

								} else {
									echo "Ce pseudo est deja utilisée";
								}
							}
						}

						else{
							echo "Cet e-mail est deja utilisée";
						}

					}

					else{
						echo "Les mots de passes ne corespondent pas";
					}

				}
			}

			if (isset($_POST['formsend_delete'])){

				extract($_POST);

				$delete_user = $db->prepare("DELETE FROM user WHERE email = :email");
				$delete_user->execute([
					'email' => $_SESSION['email']
				]);

				$delete_user_user_stack = $db->prepare("DELETE FROM user_stack WHERE pseudo = :pseudo");
				$delete_user_user_stack->execute([
					'pseudo' => $_SESSION['pseudo']
				]);

				$delete_user_bet = $db->prepare("DELETE FROM bet WHERE pseudo = :pseudo");
				$delete_user_bet->execute([
					'pseudo' => $_SESSION['pseudo']
				]);

				$delete_user_win_bet = $db->prepare("DELETE FROM win_bet WHERE pseudo = :pseudo");
				$delete_user_win_bet->execute([
					'pseudo' => $_SESSION['pseudo']
				]);

				$delete_user_history_bet = $db->prepare("DELETE FROM history_bet WHERE pseudo = :pseudo");
				$delete_user_history_bet->execute([
					'pseudo' => $_SESSION['pseudo']
				]);

				session_unset();
				session_destroy();
				?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php

			}

		?>
