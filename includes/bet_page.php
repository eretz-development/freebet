<?php session_start();?>
<!DOCTYPE html>

<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

	<body>
		<header>
			<?php require_once 'en_tete.php'; ?><!--ethan-->
		</header>
		<main>
			<content>
				<div class='side_nav'>
					<a href="#">Vos paris</a><br>
					<div class="container">
						<button class="btn-5"><span class="btn-filtre" id="btn_filtre_1" onclick="filter_select_1()">Tous mes paris</span> <span class="nb-matchs"><?php //echo $nba_match." matchs"; ?></span> </button>
						<button class="btn-5"><span class="btn-filtre" id="btn_filtre_2" onclick="filter_select_2()">En cours</span> <span class="nb-matchs"><?php //echo $nba_match." matchs"; ?></span> </button>
						<button class="btn-5"><span class="btn-filtre" id="btn_filtre_3" onclick="filter_select_3()">Termines</span> <span class="nb-matchs"  ><?php //echo $euroleague_match." matchs"; ?></span> </button>
						<button class="btn-5"><span class="btn-filtre" id="btn_filtre_4" onclick="filter_select_4()">Gagnes</span> <span class="nb-matchs"><?php //echo $ncaa_match." matchs"; ?></span> </button>
						<button class="btn-5"><span class="btn-filtre" id="btn_filtre_5" onclick="filter_select_5()">Perdus</span> <span class="nb-matchs"><?php //echo $ncaa_match." matchs"; ?></span> </button>
					</div>
					<form action="bet_page.php" method="post">
						<input type="text" name="filter_select" id="filter_select" value="" style="display:none">
						<input class="btn-valider" type="submit" name="filter_submit" id="filter_submit" value="Valider" style="display:none">
					</form>
					<!-- <a href="#">About</a><br>
					<a href="#">Services</a><br>
					<a href="#">Clients</a><br>
					<a href="#">Contact</a> -->
				</div>

							<script type="text/javascript">
								function filter_select_1(){
									document.getElementById('filter_select').value = document.getElementById('btn_filtre_1').innerText;
									document.getElementById('filter_submit').click();
								}

								function filter_select_2(){
									document.getElementById('filter_select').value = document.getElementById('btn_filtre_2').innerText;
									document.getElementById('filter_submit').click();
								}

								function filter_select_3(){
									document.getElementById('filter_select').value = document.getElementById('btn_filtre_3').innerText;
									document.getElementById('filter_submit').click();
								}

								function filter_select_4(){
									document.getElementById('filter_select').value = document.getElementById('btn_filtre_4').innerText;
									document.getElementById('filter_submit').click();
								}

								function filter_select_5(){
									document.getElementById('filter_select').value = document.getElementById('btn_filtre_5').innerText;
									document.getElementById('filter_submit').click();
								}
							</script>

					<table>
						<th>Le match</th>
						<th>Votre Pari</th>
						<th>Votre mise</th>
						<th>Votre cote</th>
						<th>Votre gain</th>
					<?php

					if(isset($_POST['filter_submit'])){

						extract($_POST);

						if($_POST['filter_select'] == 'En cours'){
							$q = $db->prepare("SELECT * FROM bet WHERE pseudo=:pseudo ORDER BY Id DESC LIMIT 100");
							$q->execute([
							   'pseudo' => $_SESSION['pseudo']
							]);
							$result = $q->fetchall();
              $answer = $q->rowCount();

              if($answer != 0){

                foreach ($result as $res)
  							{
										?><tr class="pari_perdu" id="pari_perdu" style="background-color:rgb(187, 187, 187)">	<td>	<?php
										$match;
										if ($res['resultat'] == $res['domicile']) {
											$match = $res['resultat']." vs ".$res['perdant'];
										} elseif ($res['resultat'] == "Nul") {
											$match = $res['domicile']." vs ".$res['perdant'];
										} else {
											$match = $res['perdant']." vs ".$res['resultat'];
										}
											echo $match;
										?>	</td>
										<td><?php echo $res['resultat'];	?>	</td>
										<td><?php echo $res['mise'];	?>	</td>
										<td><?php echo $res['cote'];	?>	</td>
										<td>	<?php echo '0';	?>	</td>
									  </tr><?php
								}
							}
						} elseif ($_POST['filter_select'] == 'Termines') {

              $q = $db->prepare("SELECT * FROM history_bet WHERE pseudo=:pseudo ORDER BY Id DESC LIMIT 100");
							$q->execute([
							'pseudo' => $_SESSION['pseudo']
							]);
							$result = $q->fetchall();

							foreach ($result as $res)
							{
								$a = $db->prepare("SELECT * FROM win_bet WHERE pseudo=:pseudo AND game_id=:game_id");
								$a->execute([
								'pseudo' => $res['pseudo'],
								'game_id' => $res['game_id']
								]);
								$answer = $a->rowCount();

								$req = $db->prepare("SELECT * FROM loose_bet WHERE pseudo=:pseudo AND game_id=:game_id");
								$req->execute([
									'pseudo' => $res['pseudo'],
									'game_id' => $res['game_id']
								]);
								$query = $req->rowCount();

									if($answer != 0 && $query == 0){

										?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(51, 255, 95)">	<td>	<?php
										$match;
										if ($res['resultat'] == $res['domicile']) {
											$match = $res['resultat']." vs ".$res['perdant'];
										} elseif ($res['resultat'] == "Nul") {
											$match = $res['domicile']." vs ".$res['perdant'];
										} else {
											$match = $res['perdant']." vs ".$res['resultat'];
										}
											echo $match;
										?>	</td>
									<td>	<?php echo $res['resultat'];	?>	</td>
									<td>	<?php echo $res['mise'];	?>	</td>
									<td>	<?php echo $res['cote'];	?>	</td>
									<td>	<?php
  										$gain = $res['mise'] * $res['cote'];
  										echo $gain;
  									?>	</td>
									  </tr><?php
								} elseif ($answer == 0 && $query != 0) {
                  ?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(255, 51, 51)">	<td>	<?php
                  $match;
                  if ($res['resultat'] == $res['domicile']) {
                    $match = $res['resultat']." vs ".$res['perdant'];
                  } elseif ($res['resultat'] == "Nul") {
                    $match = $res['domicile']." vs ".$res['perdant'];
                  } else {
                    $match = $res['perdant']." vs ".$res['resultat'];
                  }
                    echo $match;
                  ?>	</td>
                <td>	<?php echo $res['resultat'];	?>	</td>
                <td>	<?php echo $res['mise'];	?>	</td>
                <td>	<?php echo $res['cote'];	?>	</td>
                <td>	<?php echo '0';	?>	</td>
                  </tr><?php
                }
							}
						} elseif ($_POST['filter_select'] == 'Gagnes') {
							$a = $db->prepare("SELECT * FROM win_bet WHERE pseudo=:pseudo ORDER BY Id DESC LIMIT 100");
							$a->execute([
							  'pseudo' => $_SESSION['pseudo']
							]);
							$answer = $a->rowCount();
              $result = $a->fetchall();


							if($answer != 0){
                foreach ($result as $res)
  							{
  								?><tr class="pari_perdu" id="pari_perdu" style="background-color:rgb(51, 255, 95)">	<td>	<?php
  								$match;
  								if ($res['resultat'] == $res['domicile']) {
  									$match = $res['resultat']." vs ".$res['perdant'];
  								} elseif ($res['resultat'] == "Nul") {
  									$match = $res['domicile']." vs ".$res['perdant'];
  								} else {
  									$match = $res['perdant']." vs ".$res['resultat'];
  								}
  									echo $match;
  								?>	</td>
  							  <td>	<?php echo $res['resultat'];	?>	</td>
  							  <td>	<?php echo $res['mise'];	?>	</td>
  							  <td>	<?php echo $res['cote'];	?>	</td>
  							  <td>	<?php
  										$gain = $res['mise'] * $res['cote'];
  										echo $gain;
  									?>	</td>
  							  </tr><?php
                }
							}
						} elseif ($_POST['filter_select'] == 'Perdus') {
              $a = $db->prepare("SELECT * FROM loose_bet WHERE pseudo=:pseudo ORDER BY Id DESC LIMIT 100");
							$a->execute([
							  'pseudo' => $_SESSION['pseudo']
							]);
							$answer = $a->rowCount();
              $result = $a->fetchall();


							if($answer != 0){
                foreach ($result as $res)
  							{
  								?><tr class="pari_perdu" id="pari_perdu" style="background-color:rgb(255, 51, 51)">	<td>	<?php
  								$match;
  								if ($res['resultat'] == $res['domicile']) {
  									$match = $res['resultat']." vs ".$res['perdant'];
  								} elseif ($res['resultat'] == "Nul") {
  									$match = $res['domicile']." vs ".$res['perdant'];
  								} else {
  									$match = $res['perdant']." vs ".$res['resultat'];
  								}
  									echo $match;
  								?>	</td>
  							  <td>	<?php echo $res['resultat'];	?>	</td>
  							  <td>	<?php echo $res['mise'];	?>	</td>
  							  <td>	<?php echo $res['cote'];	?>	</td>
  							  <td>	<?php echo '0';	?>	</td>
  							  </tr><?php
                }
							}
						} elseif ($_POST['filter_select'] == 'Tous mes paris') {
	              $q = $db->prepare("SELECT * FROM history_bet WHERE pseudo=:pseudo ORDER BY Id DESC LIMIT 100");
	              $q->execute([
	              'pseudo' => $_SESSION['pseudo']
	              ]);
	              $result = $q->fetchall();

	              foreach ($result as $res)
	              {
	                $a = $db->prepare("SELECT * FROM win_bet WHERE pseudo=:pseudo AND game_id=:game_id");
	                $a->execute([
	                'pseudo' => $res['pseudo'],
	                'game_id' => $res['game_id']
	                ]);
	                $answer = $a->rowCount();

	                $req = $db->prepare("SELECT * FROM loose_bet WHERE pseudo=:pseudo AND game_id=:game_id");
	                $req->execute([
	                  'pseudo' => $res['pseudo'],
	                  'game_id' => $res['game_id']
	                ]);
	                $query = $req->rowCount();

	                $anq = $db->prepare("SELECT * FROM bet WHERE pseudo=:pseudo AND game_id=:game_id");
	                $anq->execute([
	                  'pseudo' => $res['pseudo'],
	                  'game_id' => $res['game_id']
	                ]);
	                $anquery = $anq->rowCount();

	                  if($answer != 0 && $query == 0 && $anquery == 0){

	                    ?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(51, 255, 95)">	<td>	<?php
	                    $match;
	                    if ($res['resultat'] == $res['domicile']) {
	                      $match = $res['resultat']." vs ".$res['perdant'];
	                    } elseif ($res['resultat'] == "Nul") {
	                      $match = $res['domicile']." vs ".$res['perdant'];
	                    } else {
	                      $match = $res['perdant']." vs ".$res['resultat'];
	                    }
	                      echo $match;
	                    ?>	</td>
	                  <td>	<?php echo $res['resultat'];	?>	</td>
	                  <td>	<?php echo $res['mise'];	?>	</td>
	                  <td>	<?php echo $res['cote'];	?>	</td>
										<td>	<?php
	  										$gain = $res['mise'] * $res['cote'];
	  										echo $gain;
	  									?>	</td>
	                    </tr><?php
	                } elseif ($answer == 0 && $query != 0 && $anquery == 0) {
	                  ?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(255, 51, 51)">	<td>	<?php
	                  $match;
	                  if ($res['resultat'] == $res['domicile']) {
	                    $match = $res['resultat']." vs ".$res['perdant'];
	                  } elseif ($res['resultat'] == "Nul") {
	                    $match = $res['domicile']." vs ".$res['perdant'];
	                  } else {
	                    $match = $res['perdant']." vs ".$res['resultat'];
	                  }
	                    echo $match;
	                  ?>	</td>
	                <td>	<?php echo $res['resultat'];	?>	</td>
	                <td>	<?php echo $res['mise'];	?>	</td>
	                <td>	<?php echo $res['cote'];	?>	</td>
	                <td>	<?php echo '0';	?>	</td>
	                  </tr><?php
	                } elseif ($answer == 0 && $query == 0 && $anquery != 0) {
	                  ?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(187, 187, 187)">	<td>	<?php
	                  $match;
	                  if ($res['resultat'] == $res['domicile']) {
	                    $match = $res['resultat']." vs ".$res['perdant'];
	                  } elseif ($res['resultat'] == "Nul") {
	                    $match = $res['domicile']." vs ".$res['perdant'];
	                  } else {
	                    $match = $res['perdant']." vs ".$res['resultat'];
	                  }
	                    echo $match;
	                  ?>	</td>
	                <td>	<?php echo $res['resultat'];	?>	</td>
	                <td>	<?php echo $res['mise'];	?>	</td>
	                <td>	<?php echo $res['cote'];	?>	</td>
	                <td>	<?php echo '0';	?>	</td>
	                  </tr><?php
	              }
							}
	          }
					} else {
              $q = $db->prepare("SELECT * FROM history_bet WHERE pseudo=:pseudo ORDER BY Id DESC LIMIT 100");
              $q->execute([
              'pseudo' => $_SESSION['pseudo']
              ]);
              $result = $q->fetchall();

              foreach ($result as $res)
              {
                $a = $db->prepare("SELECT * FROM win_bet WHERE pseudo=:pseudo AND game_id=:game_id");
                $a->execute([
                'pseudo' => $res['pseudo'],
                'game_id' => $res['game_id']
                ]);
                $answer = $a->rowCount();

                $req = $db->prepare("SELECT * FROM loose_bet WHERE pseudo=:pseudo AND game_id=:game_id");
                $req->execute([
                  'pseudo' => $res['pseudo'],
                  'game_id' => $res['game_id']
                ]);
                $query = $req->rowCount();

                $anq = $db->prepare("SELECT * FROM bet WHERE pseudo=:pseudo AND game_id=:game_id");
                $anq->execute([
                  'pseudo' => $res['pseudo'],
                  'game_id' => $res['game_id']
                ]);
                $anquery = $anq->rowCount();

                  if($answer != 0 && $query == 0 && $anquery == 0){

                    ?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(51, 255, 95)">	<td>	<?php
                    $match;
                    if ($res['resultat'] == $res['domicile']) {
                      $match = $res['resultat']." vs ".$res['perdant'];
                    } elseif ($res['resultat'] == "Nul") {
                      $match = $res['domicile']." vs ".$res['perdant'];
                    } else {
                      $match = $res['perdant']." vs ".$res['resultat'];
                    }
                      echo $match;
                    ?>	</td>
                  <td>	<?php echo $res['resultat'];	?>	</td>
                  <td>	<?php echo $res['mise'];	?>	</td>
                  <td>	<?php echo $res['cote'];	?>	</td>
									<td>	<?php
  										$gain = $res['mise'] * $res['cote'];
  										echo $gain;
  									?>	</td>
                    </tr><?php
                } elseif ($answer == 0 && $query != 0 && $anquery == 0) {
                  ?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(255, 51, 51)">	<td>	<?php
                  $match;
                  if ($res['resultat'] == $res['domicile']) {
                    $match = $res['resultat']." vs ".$res['perdant'];
                  } elseif ($res['resultat'] == "Nul") {
                    $match = $res['domicile']." vs ".$res['perdant'];
                  } else {
                    $match = $res['perdant']." vs ".$res['resultat'];
                  }
                    echo $match;
                  ?>	</td>
                <td>	<?php echo $res['resultat'];	?>	</td>
                <td>	<?php echo $res['mise'];	?>	</td>
                <td>	<?php echo $res['cote'];	?>	</td>
                <td>	<?php echo '0';	?>	</td>
                  </tr><?php
                } elseif ($answer == 0 && $query == 0 && $anquery != 0) {
                  ?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(187, 187, 187)">	<td>	<?php
                  $match;
                  if ($res['resultat'] == $res['domicile']) {
                    $match = $res['resultat']." vs ".$res['perdant'];
                  } elseif ($res['resultat'] == "Nul") {
                    $match = $res['domicile']." vs ".$res['perdant'];
                  } else {
                    $match = $res['perdant']." vs ".$res['resultat'];
                  }
                    echo $match;
                  ?>	</td>
                <td>	<?php echo $res['resultat'];	?>	</td>
                <td>	<?php echo $res['mise'];	?>	</td>
                <td>	<?php echo $res['cote'];	?>	</td>
                <td>	<?php echo '0';	?>	</td>
                  </tr><?php
              }
						}
          }
					?>
				</table>
			</content>
		</main>
		<footer>
			<?php require_once 'footer.php'; ?>
		</footer>
	</body>
</html>

<style media="screen">

@font-face{
  font-family:'sporo';
  src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}

body{
	margin:0px;
	background-image: url("../img/nasif-tazwar-oW8ph9u07uo-unsplash.jpg");
	background-color: #ffff; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
}

main{
	margin-bottom: 60px;
	display:flex;
	font-family:'sporo';
	}
table{
	margin-top:30px;
	margin-left:360px;
	margin-right:30px;
	padding:10px;
	text-align:center;
	background-color: white;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	width:900px;
	height: fit-content;
	overflow:hidden;
	border-radius: 4px;
	line-height: 130%;
}
th{
	font-family:'sporo';
	font-size :20px;
	margin:15px;
}
td{
	color:white;
	font-size :15px;
}
/*----nav-filtre-----*/
.side_nav{
	margin:30px;
	font-size:40px;
	position:fixed;
	width: 250px;
	overflow: auto;
	height:400px;
	background-color:white;
	padding:30px;
	text-align:center;
	z-index: 1; /* Le contenu doit s'afficher en arrière plan. */
}
.side_nav a{
	text-decoration:none;
	color:black;
}
/*------btn-filtre------*/

button{
  display: inline-block;
  position: relative;
  border: none;
  cursor: pointer;
  background: white;
  margin-top:20px;
}
.btn-filtre{
	font-family:'sporo';
	color: black;
	font-size:20px;
    display: block;
    padding: 15px 15px;
	width:200px;
}
button::before, button::after{
  content:"";
  width: 0;
  height: 2px;
  position: absolute;
  transition: all 0.2s linear;
  background: black;
}
.btn-filtre::before, span::after{
  content:"";
  width:2px;
  height:0;
  position: absolute;
  transition: all 0.2s linear;
  background: black;
}
button:hover::before, button:hover::after{
  width: 100%;
}
button:hover span::before, button:hover span::after{
  height: 100%;
}
.btn-5::after{
  left:0;
  bottom: 0;
  transition-duration: 0.4s;
}
.btn-5 span::after{
  right:0;
  top: 0;
  transition-duration: 0.4s;
}
.btn-5::before{
  right: 0;
  top: 0;
  transition-duration: 0.4s;
}
.btn-5 span::before{
  left: 0;
  bottom: 0;
  transition-duration: 0.4s;
}
.btn-valider{
	color: white;
	font-size:20px;
    display: block;
    padding: 10px 20px;
	border: none;
    cursor: pointer;
    margin-top:30px;
    background: #557de9;
	display:none;
}
/* ----- button 5 -----
.btn-5::after{
  left:0;
  bottom: 0;
  transition-duration: 0.4s;
}
.btn-5 span::after{
  right:0;
  top: 0;
  transition-duration: 0.4s;
}
.btn-5::before{
  right: 0;
  top: 0;
  transition-duration: 0.4s;
}
.btn-5 span::before{
  left: 0;
  bottom: 0;
  transition-duration: 0.4s;
} */

</style>
