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

  <div id="password_forgot_block">

	<!-- password_forgot -->

	<br><br>

		<form method="post">
		<div id="email">
			<label for="Email">E-mail</label>
			<input type="email" name="lemail"  class="textfield" id="lemail" required><br><br>
		</div>
			<input type="submit" name="form_password_forgot" class="button" id="form_password_forgot">
		</form>

		<?php require_once 'password_forgot.php'; ?>
  </div>

	<?php require_once 'footer.php'; ?>

	<style media="screen">
	@font-face{
    font-family:'sporo';
    src: url(/freebet/font/Sporter.ttf);
    }

		/* ---------------- */
		.textfield{
			outline: none;
		}
		#lemail{
			border-style: solid;
			border-color:#557de9;
		}
		#lpassword{
			border-style: solid;
			border-color:#557de9;
		}
		div #email{
			width:200px;
		}
		div #password{
			width:200px;
		}
		#password_forgot_block{
			margin-top:100px;
			margin-right:auto;
			margin-left:auto;
			text-align:center;
			width:fit-content;
			font-size: 25px;
			font-family:'sporo';
			color:#557de9;
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

		input[type=email],input[type=password] {
		    padding: 4px;
		    border-radius: 4px;
		    resize: vertical;
		}

		input[type=submit] {
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}


		body{
	margin:0px;
}
    #password_forgot_block {
		margin-bottom: 250px;

    }
	</style>


</body>
</html>

