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

							?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php						
						
						// Préparation du mail contenant le lien d'activation
						$destinataire = $email;
						$sujet = "Activer votre compte" ;
						$entete = "From: inscription@freebet.com" ;
						
						// Le lien d'activation est composé du pseudo(log) et de la clé(cle)
						$message = 'Bienvenue sur freebet,
						
						Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
						ou copier/coller dans votre navigateur Internet.
						
						http://eretz-development.com/freebet/includes/validation.php?log='.urlencode($pseudo).'
						
						
						---------------
						Ceci est un mail automatique, Merci de ne pas y répondre.';
												
						//...    
						// Fermeture de la connexion    
						//...
						mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
						echo '<script type="text/javascript">alert("Un mail vous a ete envoye, verifiez votre boite de reception pour confirmer votre inscription");</script>';
							exit();

						} else {
							echo '<script type="text/javascript">alert("Ce nom est deja utilisé");</script>';
						}
					
			
					}

					else{
						echo '<script type="text/javascript">alert("Cet email existe deja");</script>';
					}
				}

				else{
					echo '<script type="text/javascript">alert("Les deux mots de passe ne sont pas indentiques");</script>';
				}

			}

			}
				//...
		?>	