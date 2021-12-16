<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>Freebet</title>
	<meta charset="utf-8">
</head>
<body>
	<body>

	<!-- haut de page -->
	<header id="header"><?php require_once 'en_tete.php'; ?></header>
	<main>
	<p>Informations de votre compte</p>
	<!-- update -->
	<div id="profile_block">
	<p >E-mail: <?php echo $_SESSION['email'];?></p>
	<p >Pseudo: <?php echo $_SESSION['pseudo'];?></p>
	<p>Historique des recompenses :</p>

	<table>
		<th>Nom de la recompense</th>
		<th>Cout de la recompense</th>

	<?php

	$q = $db->prepare("SELECT * FROM reward_history WHERE pseudo=:pseudo ORDER BY Id DESC LIMIT 50");
	$q->execute([
		 'pseudo' => $_SESSION['pseudo']
	]);
	$result = $q->fetchall();
	$answer = $q->rowCount();

	if($answer != 0){

		foreach ($result as $res)
		{
				?><tr><td>
				<?php
				if ($res['reward_name'] == "amazon_25") {
					echo "Carte Amazon 25€";
				} elseif ($res['reward_name'] == "amazon_50") {
					echo "Carte Amazon 50€";
				} elseif ($res['reward_name'] == "amazon_150") {
					echo "Carte Amazon 150€";
				} elseif ($res['reward_name'] == "amazon_200") {
					echo "Carte Amazon 200€";
				} elseif ($res['reward_name'] == "airpods") {
					echo "Apple Airpods";
				} elseif ($res['reward_name'] == "ps5") {
					echo "Sony playstation 5";
				} elseif ($res['reward_name'] == "iphone11") {
					echo "Apple Iphone 11";
				} elseif ($res['reward_name'] == "macbook") {
					echo "Apple MacBook";
				}
				?>	</td>
				<td><?php echo $res['reward_cost'];	?>	</td>
				</tr><?php
		}
	} else {
		echo "Vous n'avez pas encore remporté de récompense";
	}

	?>

</table>

	</div>

	<p>Modifier les informations de votre compte</p>
	<!-- update -->
	<div id="update_profile_block">

		<?php	global $db; ?>

		<form method="post" class="update">
		<p style="width:800px;">Attention!<br>Vous devez remplir tous les champs avec des informations correctes en changeant seulement celle(s) que vous souhaitez modifier</p>
		<div id="email_block">
			<label for="Email">Changer votre E-mail</label>
			<input type="email" name="email" id="email" class="textfield" required><br><br>
		</div>
		<div id="pseudo_block">
			<label for="Pseudo">Changer votre Pseudo</label>
			<input type="pseudo" name="pseudo" id="pseudo" class="textfield" required><br><br>
		</div>
		<div id="password_block">
			<label for="MotDePasse">Changer votre Mot De Passe</label>
			<input type="password" name="password" id="password" class="textfield" required><br><br>
		</div>
		<div id="cpassword_block">
			<label for="ConfirmerMotDePasse">Confirmer le Mot de Passe</label>
			<input type="password" name="cpassword" id="cpassword" class="textfield" required><br><br>
		</div>
			<input type="submit" name="formsend" id="formsend" class="button" value="Enregistrer"><br>
		</form>
		<form method="post" class="delete">
		</div>

			<div id="delete_account_block">
				<button type="button" name="delete_account" id="delete_account" class="button" onclick="confirm_delete_account()" style="visibility: visible">Supprimer votre compte</button> <br><br>
				<label for="ConfirmDelete" id="confirm_delete_question" style="visibility: hidden">Etes-vous sur de vouloir supprimer votre compte ?</label>
				<button type="button" name="confirm_del_account" id="confirm_del_account" class="button" onclick="del_account()" style="visibility: hidden">Confirmer</button>
			<a href="/freebet"><button type="button" name="unfirm_del_account" id="unfirm_del_account" class="button" style="visibility: hidden">Annuler</button></a> <br><br>
			</div>

			<input type="submit" name="formsend_delete" id="formsend_delete" class="button" style="display:none"><br>
	    </form>
		<?php include 'profile_parameter.php'; ?>
	</main>

	<?php require_once 'footer.php'; ?>
	<script type="text/javascript">
		function confirm_delete_account(){
			document.getElementById('delete_account').style.visibility = "hidden";
			document.getElementById('confirm_delete_question').style.visibility = "visible";
			document.getElementById('confirm_del_account').style.visibility = "visible";
			document.getElementById('unfirm_del_account').style.visibility = "visible";
		}

		function del_account(){
			document.getElementById('formsend_delete').click();
		}
	</script>

	<style media="screen">

	@font-face{
		font-family:'sporo';
		src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
		}
		body{
			margin:0px;
			background-color: black; /* Used if the image is unavailable */
			background-position: center; /* Center the image */
			background-repeat: no-repeat; /* Do not repeat the image */
			background-size: cover; /* Resize the background image to cover the entire container */
			background-attachment: fixed;
		}
		/* ---------------- */
		main{
			margin-left:30px;
			font-size: 25px;
			font-family:'sporo';
			color:#fff;

		}
		#profile_block{
			font-size: 15px;
			font-family:'sporo';
			color:#fff;
		}
		#update_profile_block{
			font-size: 15px;
			font-family:'sporo';
			color:#fff;
		}
		#update_profile_block .button{
			color: white;
			text-align: center;
			padding:5px;
			margin:5px;
			background-color:#557de9;
			display:inline-block;
			cursor:pointer;
			border-radius:5px;
			font-size: 15px;
		}

		#update_profile_block .button:hover{
			background-color:#719CE1;
			transition: 0.2s all;
		}
		#delete_account_block .button{
			color: white;
			text-align: center;
			padding:5px;
			margin:5px;
			background-color:rgb(255, 51, 51);
			display:inline-block;
			cursor:pointer;
			border-radius:5px;
			font-size: 15px;
			border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}
		#delete_account_block .button:hover{
			background-color:#ff5b5b;
			transition: 0.2s all;
		}
		.textfield{
			outline: none;
		}
		div #email_block{
			width:200px;
		}
		div #password_block{
			width:200px;
		}
		div #pseudo_block{
			width:200px;
		}
		div #cpassword_block{
			width:200px;
		}
		input[type=email],input[type=password],input[type=pseudo] {
			border: none;
			margin-top: 6px;
		    padding: 4px;
		    border-radius: 4px;
		    resize: vertical;
		}
		input[type=submit] {
		    border: none;
		    border-radius: 4px;
			cursor: pointer;
			font-size:15px;
		}
	</style>

</body>
</html>
