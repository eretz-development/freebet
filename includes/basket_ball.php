<?php session_start();?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Basketball</title>
		<link rel="icon" type="image/ico" href="/freebet/img/favicon.ICO" />	</head>
	<body>

	<header>
	<?php require_once 'en_tete.php'; ?><!--ethan-->
	</header>

	<main>
		<?php
			$nba = $db->prepare("SELECT * FROM game WHERE sport = :sport AND ligue = :ligue LIMIT 20");
			$nba->execute([
				'sport' => 'basket',
				'ligue' => 'NBA'
			]);
			$nba_match = $nba->rowCount();

			$euroleague = $db->prepare("SELECT * FROM game WHERE sport = :sport AND ligue = :ligue LIMIT 20");
			$euroleague->execute([
				'sport' => 'basket',
				'ligue' => 'Basketball Euroleague'
			]);
			$euroleague_match = $euroleague->rowCount();

			$ncaa = $db->prepare("SELECT * FROM game WHERE sport = :sport AND ligue = :ligue LIMIT 20");
			$ncaa->execute([
				'sport' => 'basket',
				'ligue' => 'NCAAB'
			]);
			$ncaa_match = $ncaa->rowCount();

			if(isset($_POST['filter_submit'])){

				extract($_POST);

				if($_POST['filter_select'] == 'NBA'){
					$q = $db->prepare("SELECT * FROM game WHERE sport = :sport AND ligue = :ligue LIMIT 20");
					$q->execute([
						'sport' => 'basket',
						'ligue' => 'NBA'
					]);
					$result = $q->fetchall();
					$row_count = $q->rowCount();
				} elseif ($_POST['filter_select'] == 'EuroLeague') {
					$q = $db->prepare("SELECT * FROM game WHERE sport = :sport AND ligue = :ligue LIMIT 20");
					$q->execute([
						'sport' => 'basket',
						'ligue' => 'Basketball Euroleague'
					]);
					$result = $q->fetchall();
					$row_count = $q->rowCount();
				} elseif ($_POST['filter_select'] == 'NCAA') {
					$q = $db->prepare("SELECT * FROM game WHERE sport = :sport AND ligue = :ligue LIMIT 20");
					$q->execute([
						'sport' => 'basket',
						'ligue' => 'NCAAB'
					]);
					$result = $q->fetchall();
					$row_count = $q->rowCount();
				} elseif ($_POST['filter_select'] == 'Tous les matchs') {
					$q = $db->prepare("SELECT * FROM game WHERE sport = :sport");
					$q->execute([
					'sport' => 'basket'
					]);
					$result = $q->fetchall();
					$row_count = $q->rowCount();
				}
			} else {
				$q = $db->prepare("SELECT * FROM game WHERE sport = :sport LIMIT 10");
				$q->execute([
				'sport' => 'basket'
				]);
				$result = $q->fetchall();
				$row_count = $q->rowCount();
			}

		?>

		<div class='side_nav'>
			<a href="#">Les Ligues</a><br>

			<div class="container">
				<button class="btn-5" onclick="filter_select_1()"><span class="btn-filtre" id="btn_filtre_1">Tous les matchs</span> </button>
				<button class="btn-5" onclick="filter_select_2()"><span class="btn-filtre" id="btn_filtre_2">NBA</span> <span class="nb-matchs"><?php echo $nba_match." matchs"; ?></span> </button>
				<button class="btn-5" onclick="filter_select_3()"><span class="btn-filtre" id="btn_filtre_3">EuroLeague</span> <span class="nb-matchs"  ><?php echo $euroleague_match." matchs"; ?></span> </button>
				<button class="btn-5" onclick="filter_select_4()"><span class="btn-filtre" id="btn_filtre_4">NCAA</span> <span class="nb-matchs"><?php echo $ncaa_match." matchs"; ?></span> </button>
			</div>

			<form action="basket_ball.php" method="post">
				<input type="text" name="filter_select" id="filter_select" value="" style="display:none">
				<input class="btn-valider" type="submit" name="filter_submit" id="filter_submit" value="Valider">
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
		<content>
			<?php
				if ($row_count == 0) {
					?>
					<div id='match'>
						Désole il n'y a pas de match actuellement
					</div>
					<?php
				} else {

					foreach ($result as $res) { ?>

					<div id='match'>
						<p>
							<span class='equipe1' id="equipe1"><?php echo $res['equipe_une'];?></span>
							<span class='vs'><?php echo "vs";?> </span>
							<span class='equipe2' id="equipe2"><?php echo $res['equipe_deux'];	?></span>
						</p>
						<p><span class='ligue'><?php echo $res['ligue'];?></span><span class='date' id='date'><?php echo $res['date_game']; ?></span></p>

						<?php if (isset($_SESSION['email'])){ ?>
							<p><span class='select_result'>Selectionnez un resultat :</span></p>
							<p>
								<button class="btn-6" id="btn-mise-1"><span class='cote1' id="equipe-mise-1"><span id='equipe1'><?php echo $res['equipe_une'];?> x</span><?php echo $res['cote_equipe_une'];?></span></button>
								<span class='vs'>     </span>
								<button class="btn-6" id="btn-mise-2"><span class='cote2' id="equipe-mise-2"><span id='equipe2'><?php echo $res['equipe_deux'];?>  x</span><?php echo $res['cote_equipe_deux'];?></span></button>
							</p>
						<?php } else { ?>
							<p><span class='cote' ><span id='equipe1'><?php echo $res['equipe_une'];?> x</span><?php echo $res['cote_equipe_une'];?></span><span class='cote' ><span id='equipe2'><?php echo $res['equipe_deux'];?>  x</span><?php echo $res['cote_equipe_deux'];?></span></p>
						<?php } ?>

				<?php if (isset($_SESSION['email'])){ ?>
						<form name="miser" method="POST">
							<select name="resultat" id="resultat">
								<option value="null"></option>
								<option value="<?php echo $res['equipe_une']; ?>"><?php echo $res['equipe_une'];	?></option>
								<option value="<?php echo $res['equipe_deux']; ?>"><?php echo $res['equipe_deux'];	?></option>
							</select>

							<input type="text" name='mise' class='mise' placeholder='Mise' autocomplete="off" >
							<input type="text" name="id" id="id" value="<?php echo $res['Id']; ?>" style="display:none">
							<input type="submit" name='parier' id="parier" class='btn-ok' value='Miser'>
						</form>
					</div>
				<?php require_once 'miser.php' ?>
				<?php }else{ ?>  </div>
					<?php

				}}}
			?>
		</content>
		<?php if (isset($_SESSION['email'])){ ?>
			<div id="side_board">
				<h3>Mes derniers paris</h3>
				<?php
					$q = $db->prepare("SELECT * FROM bet WHERE pseudo=:pseudo ORDER BY Id DESC LIMIT 5");
					$q->execute([
						'pseudo' => $_SESSION['pseudo']
					]);
					$result = $q->fetchall();
					$answer = $q->rowCount();

					if($answer != 0){
						foreach ($result as $res)
						{
							?>
							<tr class="pari_perdu" id="pari_perdu" style="background-color:rgb(187, 187, 187)">
								<p id="bet_match">
									<?php
									$match;
									if ($res['resultat'] == $res['domicile']) {
										$match = $res['resultat']." vs ".$res['perdant'];
									} elseif ($res['resultat'] == "Nul") {
										$match = $res['domicile']." vs ".$res['perdant'];
									} else {
										$match = $res['perdant']." vs ".$res['resultat'];
									}
										echo $match;
									?>
								</p>
								<p id="bet"><?php echo $res['resultat'];?></p>
							</tr>
							<?php
						}
					} else {
						?><h5>Vous n'avez pas encore effectuer de pari</h5><?php
					}
				?>
			</div>
		<?php } ?>

		<script src="jquery-3.4.1.js"></script>
		<script src="../includes/moment.js"></script>
		<script src="hours.js"></script>
		<script src="select_mise.js"></script>

	</main>

	<footer>
		<?php require_once 'footer.php'; ?><!--ethan-->
	</footer>

</body>
</html>

<style media="screen">

@font-face{
font-family:'sporo';
src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}
@font-face{
font-family:'font2';
src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}
body{
margin:0px;
padding:0px;
background-image: url("../img/rosie-yang-Zq4XzAkLjOE-unsplash.jpg");
background-color: #ffff; /* Used if the image is unavailable */
background-position: center; /* Center the image */
background-repeat: no-repeat; /* Do not repeat the image */
background-size: cover; /* Resize the background image to cover the entire container */
background-attachment: fixed;
font-family:'font2';
}

main{
margin-bottom: 60px;
display:flex;
}

#match{
margin-top:30px;
margin-left:360px;
margin-right:30px;
padding:10px;
text-align:center;
background-color: white;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
width:700px;
height: fit-content;
overflow:hidden;
border-radius: 4px;
line-height: 130%;
font-family:'sporo';
}
.equipe1, .equipe2{
	font-family:'sporo';
	font-size:30px;
	margin: 12px;
}
.vs, .date, .ligue, .select_result{
font-family:'font2';
font-size:15px;
}
.date{
margin-left:20px;
}

.cote1,.cotex,.cote2{
font-family:'font2';
font-size:20px;
width: 50px;
height: 20px;
border-radius: 4px;
padding:5px;
text-align:center;
transition:all 0.2s;
}
#equipe1,#equipex,#equipe2{
font-size:17px;
width: 50px;
height: 20px;
text-align:center;
}
.cote{
	font-family:'font2';
	font-size:20px;
	width: 50px;
	height: 20px;
	border-radius: 4px;
	padding:5px;
	text-align:center;
}
form{
display:inline-block;
}
#resultat{
width: fit-content;
height: 38px;
border:2px solid black;
border-top: hidden;
border-left: hidden;
border-right: hidden;
font-family:'sporo';
outline:none;
cursor:pointer;
font-size: 20px;
display: none;
}
.mise{
border-weight:2px solid;
border-top: hidden;
border-left: hidden;
border-right: hidden;
width: 80px;
height: 38px;
padding: 10px;
display: inline-block;
box-sizing: border-box;
font-family:'font2';
outline:none;
font-size: 20px;
margin-right:1em;
margin-left:1em;
}
.btn-ok{
width: 80px;
height: 38px;
border-radius:4px;
color: black;
text-align:center;
cursor:pointer;
font-family:'sporo';
font-size: 20px;
outline:none;
border:none;
background-color:transparent;
transition: all 0.1s linear;
}
.btn-ok:hover{
box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);

}

table {
font-family:'font2';
font-size: 20px;
color:white;
border:5px dashed white;
background-color: #557de9;
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
}
.btn-filtre{
font-family:'sporo';
color: black;
font-size:20px;
	display: block;
	padding: 15px 15px;
width:200px;
}
.btn-5{
background: white;
margin-top:20px;
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
font-family:'sporo';
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
/*-----nombre de matchs-------*/
.nb-matchs{
font-family:'font2';
color: black;
font-size:12px;
	display: block;
margin-bottom:10px;
}
/*----side-board-----*/
#side_board{
right:0;
margin:30px;
font-size:14px;
position:fixed;
width: 200px;
overflow: auto;
height:fit-content;
background-color:white;
padding:10px;
text-align:center;
border-radius:4px;
z-index: 1; /* Le contenu doit s'afficher en arrière plan. */
}
#side_board #bet_match{
	color:#828282;
	margin-bottom:-15px;
}

/*------btn-mise------*/

.cote1, .cotex, .cote2{
font-family:'sporo';
font-size:30px;
width:200px;
}
.btn-6{
padding: 8px 8px;
margin-right: 12px;
background: white;
box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
}
button::before, button::after{
content:"";
width: 0;
height: 2px;
position: absolute;
transition: all 0.2s linear;
background: black;
}
.cote1::before, .cotex::before, .cote2::before, span::after{
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
.btn-6::after{
left:0;
bottom: 0;
transition-duration: 0.4s;
}
.btn-6 span::after{
right:0;
top: 0;
transition-duration: 0.4s;
}
.btn-6::before{
right: 0;
top: 0;
transition-duration: 0.4s;
}
.btn-6 span::before{
left: 0;
bottom: 0;
transition-duration: 0.4s;
}
</style>
</html>
