<body>
	<br>
	<br>
	<div id="alert">
		<?php
			if (isset($_POST['formlogin']))
			{
				extract($_POST);

				if (!empty($lemail) && !empty($lpassword))
				{
					$q = $db->prepare("SELECT * FROM user WHERE email = :email");
					$q->execute(['email' => $lemail]);
					$result = $q->fetch();

					if ($result == true)
					{
						// le compte existe
						if (password_verify($lpassword, $result['password']))
						{
							if ($result['actif'] == '1')
							{

							echo "Connecté !";


							$_SESSION['email'] = $result['email'];

							$_SESSION['id'] = $result['Id'];

							$_SESSION['pseudo'] = $result['pseudo'];

							$_SESSION['valeur_match_euroleague'] = 0;

							$_SESSION['valeur_match_nba'] = 0;

							$_SESSION['valeur_match_ncaab'] = 0;

							$_SESSION['valeur_match_nhl'] = 0;

							$_SESSION['valeur_match_six_nations'] = 0;

							$_SESSION['valeur_match_premier_league'] = 0;

							$_SESSION['valeur_match_ligue_un'] = 0;

							$_SESSION['valeur_match_bundesliga'] = 0;

							$_SESSION['valeur_match_serie_a'] = 0;

							$_SESSION['valeur_match_la_liga'] = 0;

							$_SESSION['valeur_match_uefa_champions_league'] = 0;

							$_SESSION['valeur_match_uefa_europa_league'] = 0;

							$_SESSION['valeur_match_nfl'] = 0;



							$_SESSION['valeur_result_euroleague'] = 0;

							$_SESSION['valeur_result_nba'] = 0;

							$_SESSION['valeur_result_ncaab'] = 0;

							$_SESSION['valeur_result_nhl'] = 0;

							$_SESSION['valeur_result_six_nations'] = 0;

							$_SESSION['valeur_result_premier_league'] = 0;

							$_SESSION['valeur_result_ligue_un'] = 0;

							$_SESSION['valeur_result_bundesliga'] = 0;

							$_SESSION['valeur_result_serie_a'] = 0;

							$_SESSION['valeur_result_la_liga'] = 0;

							$_SESSION['valeur_result_uefa_champions_league'] = 0;

							$_SESSION['valeur_result_uefa_europa_league'] = 0;

							$_SESSION['valeur_result_nfl'] = 0;

							?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
							}
							else
							{
								echo 'Vous devez activer votre compte, verifiez vos spams!';
							}
						}
						else
						{
							echo 'Mot de passe incorecte';
						}
					}
					else
					{
						echo 'Cet E-mail n\'existe pas';
					}
				}

				else{
					echo 'Certains champs sont incomplets';
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
	font-size:25px;
	color:white;
	font-family:'sporo';
}
</style>
