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
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<!-- reinit_mdp -->
	<div id="reinit_mdp_block">

		<br><br>

		<?php	global $db; ?>

		<form method="post" class="reinit_mdp">
		</div>
		<div id="password_block">
			<label for="MotDePasse">Nouveau Mot De Passe</label>
			<input type="password" name="password" id="password" class="textfield" pattern=".{8,16}" required title="8 a 16 characters" required><br><br>
		</div>
		<div id="cpassword_block">
			<label for="ConfirmerMotDePasse">Confirmer le Nouveau Mot de Passe</label>
			<input type="password" name="cpassword" id="cpassword" class="textfield" required><br><br>
		</div>
			<input type="submit" name="formsend" id="formsend" class="button"><br>
		</form>

		<?php include 'reinit_mot_de_passe.php'; ?>
	</div>

	<?php require_once 'footer.php'; ?>

	<style media="screen">

		/* ---------------- */
		#reinit_mdp_block{
			margin-right:auto;
			margin-left:auto;
			text-align:center;
			width:fit-content;
			font-size: 25px;
			font-family:'sporo';
			color:#557de9;
		}
		.textfield{
			outline: none;
		}
		#email{
			border-style: solid;
			border-color:#557de9;
		}

		#password{
			border-style: solid;
			border-color:#557de9;
		}

		#cpassword{
			border-style: solid;
			border-color:#557de9;
		}

		#pseudo{
			border-style: solid;
			border-color:#557de9;
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
		.button {
			color: white;
			text-align: center;
			padding:5px;
			margin:5px;
			font-family:'sporo';
			background-color:#557de9;
			width:130px ;
			display:inline-block;
			cursor:pointer;
			border-radius:5px;
			font-size: 25px;
		}

		.button:hover{
			background-color:#719CE1;
			transition: 0.2s all;
		}

		input[type=email],input[type=password],input[type=pseudo] {
		    padding: 4px;
		    border-radius: 4px;
		    resize: vertical;
		}

		input[type=submit] {
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}


	</style>

</body>
</html>
<style media="screen">
body{
	margin:0px;
}
    #reinit_mdp_block {
		margin-bottom: 80px;

    }
  </style>
