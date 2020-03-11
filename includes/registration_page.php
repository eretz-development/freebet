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

	<!-- register -->
	<div id="register_block">

		<br><br>

		<?php	global $db; ?>

		<form method="post" class="register">

		<div id="email_block">
			<label for="Email">E-mail</label>
			<input type="email" name="email" id="email" class="textfield" required><br><br>
		</div>
		<div id="pseudo_block">
			<label for="Pseudo">Pseudo</label>
			<input type="pseudo" name="pseudo" id="pseudo" class="textfield" required><br><br>
		</div>
		<div id="password_block">
			<label for="MotDePasse">Mot De Passe</label>
			<input type="password" name="password" id="password" class="textfield" pattern=".{8,16}" required title="8 a 16 characters" required><br><br>
		</div>
		<div id="cpassword_block">
			<label for="ConfirmerMotDePasse">Confirmer le Mot de Passe</label>
			<input type="password" name="cpassword" id="cpassword" class="textfield" required><br><br>
		</div>
			<input type="submit" name="formsend" id="formsend" class="button"><br>
		</form>

		<a href="/freebet/includes/login_page.php"><span>Vous etes deja inscrits? Connectez-vous</span></a>

		<?php include 'register.php'; ?>
	</div>

	<?php require_once 'footer.php'; ?>

	<style media="screen">

		/* ---------------- */
		#register_block{
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
    #register_block {
		margin-bottom: 80px;

    }
  </style>
