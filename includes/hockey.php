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

	<p class="mise_error" id="mise_error"></p>

	<main>

		<?php

		$nhl = $db->prepare("SELECT * FROM game WHERE sport = :sport AND ligue = :ligue LIMIT 20");
		$nhl->execute([
			'sport' => 'hockey',
			'ligue' => 'NHL'
		]);
		$nhl_match = $nhl->rowCount();

		if(isset($_POST['filter_submit'])){

			extract($_POST);

			if($_POST['filter_select'] == 'NHL'){
				$q = $db->prepare("SELECT * FROM game WHERE sport = :sport AND ligue = :ligue LIMIT 20");
				$q->execute([
					'sport' => 'hockey',
					'ligue' => 'NHL'
				]);
				$result = $q->fetchall();
				$row_count = $q->rowCount();
			}
		} else {
			$q = $db->prepare("SELECT * FROM game WHERE sport = :sport LIMIT 10");
			$q->execute([
			'sport' => 'hockey'
			]);
			$result = $q->fetchall();
			$row_count = $q->rowCount();
		}

		?>

	<div class='side_nav'>
					<a href="#">Les Ligues</a><br>

					<div class="container">
						<button class="btn-5"><span class="btn-filtre" id="btn_filtre_1" onclick="filter_select_1()">NHL</span> <span class="nb-matchs"><?php echo $nhl_match." matchs"; ?></span> </button>
					</div>

					<form action="hockey.php" method="post">
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
			<p><span class='equipe1'><?php echo $res['equipe_une'];?></span> <span class='vs'><?php echo "vs";?> </span><span class='equipe2'><?php echo $res['equipe_deux'];	?></span></p>
			<p><span class='ligue'><?php echo $res['ligue'];?></span><span class='date'> 28/02/2020</span></p>
			<p><span id='cote1'><?php echo $res['cote_equipe_une'];	?></span><span id='cotex'>xx.xx</span><span id='cote2'><?php echo $res['cote_equipe_deux'];?></span></P>

	<?php if (isset($_SESSION['email'])){ ?>
			<form name="miser" method="POST">
				<select name="resultat" id="resultat">
					<option value="<?php echo $res['equipe_une']; ?>"><?php echo $res['equipe_une'];	?></option>
					<option value="<?php echo $res['equipe_deux']; ?>"><?php echo $res['equipe_deux'];	?></option>
					<option value="egalite">Egalite</option>
				</select>

				<input type="text" name='mise' class='mise' placeholder='Mise' autocomplete="off" >
				<input type="text" name="id" id="id" value="<?php echo $res['Id']; ?>" style="display:none">
				<input type="submit" name='parier' id="parier" class='btn-ok' value='ok'>
			</form>
		</div>
	<?php require_once 'miser.php' ?>
	<?php }else{ ?>  </div>
		<?php

	}}}?>
	</content>

        <!-- <th> Ligue </th>
		<th> Equipe à Domicile </th>
		<th> Côte Equipe à Domicile </th>
		<th> VS </th>
		<th> Côte Equipe Visiteur </th>
		<th> Equipe Visiteur</th> -->

	</main>

	<footer>
		<?php require_once 'footer.php'; ?><!--ethan-->
	</footer>

</body>
</html>

<style media="screen">
body{
	margin:0px;
	background-image: url("../img/markus-spiske-fWlOGWs_lHc-unsplash.jpg");
	background-color: #ffff; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
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
	border:5px solid #557de9;
	width:700px;
	height: fit-content;
	overflow:hidden;
	border-radius: 4px;
	line-height: 130%;
}
.equipe1, .equipe2{
	font-family:'sporo';
	font-size:35px;
}
.vs, .date, .ligue{
	font-family:'font2';
	font-size:15px;
}
.date, #cotex, #cote2{
	margin-left:20px;
}

#cote1,#cotex,#cote2{
	border:3px dashed #557de9;
	font-family:'font2';
	font-size:20px;
	width: 50px;
	height: 20px;
	border-radius: 4px;
	padding:5px;
	color:  #557de9;
	text-align:center;

}
form{
	display:inline-block;
}
#resultat{
	width: fit-content;
	height: 40px;
	border:3px solid #557de9;
    border-radius: 4px;
	font-family:'sporo';
	outline:none;
	cursor:pointer;
	font-size: 20px;

}
.mise{
	width: 80px;
	height: 20px;
	padding: 17px;
    display: inline-block;
	border:3px solid #557de9;
    border-radius: 4px;
    box-sizing: border-box;
	font-family:'font2';
	outline:none;
}
.btn-ok{
	width: 40px;
	height: 38px;
	border:3px solid #557de9;
    border-radius: 4px;
	background-color: #557de9;
    color: white;
	text-align:center;
	cursor:pointer;
	font-family:'sporo';
	font-size: 20px;
	outline:none;
}
.btn-ok:hover{
    background-color:#719CE1;
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
	font-family:'sporo';
	font-size:40px;
	position:fixed;
	width: 300px;
	overflow: auto;
	height:460px;
	background-color:white;
	padding:30px;
	text-align:center;
	border:5px solid #557de9;
	border-radius:4px;
	z-index: 1; /* Le contenu doit s'afficher en arrière plan. */
}
.side_nav a{
	text-decoration:none;
	color:#557de9;
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
  cursor: pointer;
  background: white;
  margin-top:20px;
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
	color: #557de9;
	font-size:12px;
    display: block;
	margin-bottom:10px;
}
  </style>
