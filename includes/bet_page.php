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
									<button class="btn-5"><span class="btn-filtre" id="btn_filtre_1" onclick="filter_select_1()">En cours</span> <span class="nb-matchs"><?php //echo $nba_match." matchs"; ?></span> </button>
									<button class="btn-5"><span class="btn-filtre" id="btn_filtre_2" onclick="filter_select_2()">Termines</span> <span class="nb-matchs"  ><?php //echo $euroleague_match." matchs"; ?></span> </button>
									<button class="btn-5"><span class="btn-filtre" id="btn_filtre_3" onclick="filter_select_3()">Gagnes</span> <span class="nb-matchs"><?php //echo $ncaa_match." matchs"; ?></span> </button>
									<button class="btn-5"><span class="btn-filtre" id="btn_filtre_4" onclick="filter_select_4()">Perdus</span> <span class="nb-matchs"><?php //echo $ncaa_match." matchs"; ?></span> </button>
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
							$q = $db->prepare("SELECT * FROM history_bet WHERE pseudo=:pseudo LIMIT 100");
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

								if($answer == 0){

									$req = $db->prepare("SELECT * FROM bet WHERE pseudo=:pseudo AND game_id=:game_id");
									$req->execute([
										'pseudo' => $res['pseudo'],
										'game_id' => $res['game_id']
									]);
									$query = $req->rowCount();

									if($query != 0){
										?><tr class="pari_perdu" id="pari_perdu" style="background-color:rgb(187, 187, 187)">	<td>	<?php
										$match;
										if ($res['resultat'] == $res['domicile']) {
											$match = $res['resultat']." vs ".$res['perdant'];
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
						} elseif ($_POST['filter_select'] == 'Termines') {
							$q = $db->prepare("SELECT * FROM history_bet WHERE pseudo=:pseudo LIMIT 100");
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

								if($answer != 0){
									?><tr class="pari_perdu" id="pari_perdu" style="background-color:rgb(51, 255, 95)">	<td>	<?php
									$match;
									if ($res['resultat'] == $res['domicile']) {
										$match = $res['resultat']." vs ".$res['perdant'];
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
								} else {

									$req = $db->prepare("SELECT * FROM bet WHERE pseudo=:pseudo AND game_id=:game_id");
									$req->execute([
										'pseudo' => $res['pseudo'],
										'game_id' => $res['game_id']
									]);
									$query = $req->rowCount();

										?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(255, 51, 51)">	<td>	<?php
										$match;
										if ($res['resultat'] == $res['domicile']) {
											$match = $res['resultat']." vs ".$res['perdant'];
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
							$q = $db->prepare("SELECT * FROM history_bet WHERE pseudo=:pseudo LIMIT 100");
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

								if($answer != 0){
									?><tr class="pari_perdu" id="pari_perdu" style="background-color:rgb(51, 255, 95)">	<td>	<?php
									$match;
									if ($res['resultat'] == $res['domicile']) {
										$match = $res['resultat']." vs ".$res['perdant'];
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
						} else {
							$q = $db->prepare("SELECT * FROM history_bet WHERE pseudo=:pseudo LIMIT 100");
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

								if($answer == 0){

									$req = $db->prepare("SELECT * FROM bet WHERE pseudo=:pseudo AND game_id=:game_id");
									$req->execute([
										'pseudo' => $res['pseudo'],
										'game_id' => $res['game_id']
									]);
									$query = $req->rowCount();

									if($query == 0){

										?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(255, 51, 51)">	<td>	<?php
										$match;
										if ($res['resultat'] == $res['domicile']) {
											$match = $res['resultat']." vs ".$res['perdant'];
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
						}
					} else {
							$q = $db->prepare("SELECT * FROM history_bet WHERE pseudo=:pseudo LIMIT 100");
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

								if($answer != 0){
									?><tr class="pari_perdu" id="pari_perdu" style="background-color:rgb(51, 255, 95)">	<td>	<?php
									$match;
									if ($res['resultat'] == $res['domicile']) {
										$match = $res['resultat']." vs ".$res['perdant'];
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
								} else {

									$req = $db->prepare("SELECT * FROM bet WHERE pseudo=:pseudo AND game_id=:game_id");
									$req->execute([
										'pseudo' => $res['pseudo'],
										'game_id' => $res['game_id']
									]);
									$query = $req->rowCount();

									if($query != 0){
										?><tr class="pari_perdu" id="pari_perdu" style="background-color:rgb(187, 187, 187)">	<td>	<?php
										$match;
										if ($res['resultat'] == $res['domicile']) {
											$match = $res['resultat']." vs ".$res['perdant'];
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
									} else {

										?><tr class="pari_gagne" id="pari_gagne" style="background-color:rgb(255, 51, 51)">	<td>	<?php
										$match;
										if ($res['resultat'] == $res['domicile']) {
											$match = $res['resultat']." vs ".$res['perdant'];
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

body{
	margin:0px;
	background-image: url("../img/nasif-tazwar-oW8ph9u07uo-unsplash.jpg");
	background-color: #ffff; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
}

main{
	margin-bottom: 500px;
	margin-top:100px;
	display:block;
	text-align:center;
	}
.side_nav{
	width: 250px;
	height:500px;
	background-color:white;
	margin-top:30px;
	margin-left:30px;
	padding-top:30px;
	text-align:center;
	font-family:'font2';
	font-size:30px;
	border:5px solid #557de9;
	border-radius: 4px;

}
.side_nav a{
	text-decoration:none;
	color:#557de9;
}
content{
	display:flex;
}
table{
	background-color:white;
	border:5px solid #557de9;
	margin-top:30px;
	margin-left:auto;
	margin-right:auto;
	border-radius: 4px;
	width:900px;
}
th{
	border:5px solid #557de9;
	font-family:'sporo';
	font-size :30px;
	color:#557de9;

}
td{
	color:white;
	font-size :20px;
}

/*------btn-filtre------*/
@import url(https://fonts.googleapis.com/css?family=PT+Sans);
*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
button{
  display: inline-block;
  position: relative;
  border: none;
  font-size: 18px;
  cursor: pointer;
  margin-top:30px;
  background: white;
}
.btn-filtre{
	font-family:'font2';
	color: #557de9;
	font-size:20px;
  display: block;
  padding: 15px 25px;
}
button::before, button::after{
  content:"";
  width: 0;
  height: 5px;
  position: absolute;
  transition: all 0.2s linear;
  background: #557de9;
}
.btn-filtre::before, span::after{
  content:"";
  width:5px;
  height:0;
  position: absolute;
  transition: all 0.2s linear;
  background: #557de9;
}
button:hover::before, button:hover::after{
  width: 100%;
}
button:hover span::before, button:hover span::after{
  height: 100%;
}
/*----- button 5 -----*/
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

</style>
