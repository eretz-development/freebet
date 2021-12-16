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
            <h1>Contactez nous</h1>
            <p>Pour toutes questions, problemes ou recommendations,<br>vous pouvez nous contacter via le formulaire ci dessous !</p>
				<!-- Main -->
					<div id="main">
						<!-- Content -->
								<form method="post" id="form" action="cible_form.php">
									<fieldset>
										<p><label for="nom">Nom</label></p>
										<input type="text" id="nom" name="nom" />
										<p><label for="email">Email</label></p>
										<input type="text" id="email" name="email" />
										<p><label for="objet">Objet</label></p>
										<input type="text" id="objet" name="objet" />
										<p><label for="message">Message</label></p>
										<textarea id="message" name="message" cols="30" rows="5"></textarea>
									<!--
									<input type="checkbox" name="confirmation" id="confirmation">
									<label for="confirmation">M'envoyer un courriel de confirmation</label>
									<br><br>

									<input type="radio" name="abonnement" id="abonewspromo" value="abonewspromo" checked>
									<label for="abonewspromo">M'abonner à la newsletter et aux promotions</label>
									<br>
									<input type="radio" name="abonnement" id="abonews" value="abonews">
									<label for="abonews">M'abonner uniquement à la newsletter</label>
									<br>
									<input type="radio" name="abonnement" id="aborien" value="aborien">
									<label for="aborien">Ne pas m'abonner</label>
									<br><br>
									-->
									<input type="submit" name="envoi" value="Send" />
									</fieldset>

									<br>
								</form>
						    </div>
                    	</main>
	<footer>
		<?php require_once 'footer.php'; ?><!--ethan-->
	</footer>

</body>
</html>

<style media="screen">
body{
	text-align:center;
	margin:0px;
	background-color:#7EA5FF;
}

main{
	height:min-content;
	margin-right:auto;
	margin-left:auto;
	display:block;

	}
main h1{
	font-family: Exo2-Regular;
	color: white;
	font-size:30px;
}
main p{
	font-family: Exo2-Regular;
	color: white;
	font-size:20px;
}
main label{
	font-family: Exo2-Regular;
	color: white;
	font-size:17px;
}

fieldset{
	line-height:0%;
	display:block;
	border:none;
}
input{
	border-style: solid;
	outline: none;
	padding: 4px;
	border-radius: 4px;
	resize: vertical;
	width:300px;
	border: none;
}
textarea{
	border:2px solid;
	outline: none;
	padding: 4px;
	border-radius: 4px;
	resize: vertical;
	width:400px;
	border: none;
}

input[type='submit']{
	margin-right:auto;
	margin-left:auto;
	font-family: Exo2-Regular;
	color: white;
	font-size:20px;
    display: block;
    padding: 10px 10px;
	border: none;
    cursor: pointer;
    margin-top:25px;
    background: #557de9;
}

input[type='submit']:hover{
        background-color:#7EA5FF;
		transition: 0.4s all;
	}
  </style>
