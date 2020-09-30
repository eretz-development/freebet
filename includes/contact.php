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
            <p>Pour toutes questions, problemes ou recommendations,<br>vous pouvez nous contactez via le formulaire ci dessous<br>et nous vous repondrons avec plaisir dans les plus bref delais</p>
				<!-- Main -->
					<div id="main">
						<!-- Content -->
								<form method="post" id="form" action="cible_form.php">
									<fieldset>
										<p><label for="nom">Name</label></p>
										<input type="text" id="nom" name="nom" />
										<p><label for="email">Email</label></p>
										<input type="text" id="email" name="email" />
										<p><label for="objet">Object</label></p>
										<input type="text" id="objet" name="objet" />
										<p><label for="message">Message</label></p>
										<textarea id="message" name="message" cols="30" rows="8"></textarea>
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
	background-color:black;
}

main{
	height:min-content;
	margin-right:auto;
	margin-left:auto;
	margin-bottom:100px;
	display:block;
	
	}
main h1{
	font-family: Exo2-Regular;
	color: white;
	font-size:40px;
}
main p{
	font-family: Exo2-Regular;
	color: white;
	font-size:25px;
}

fieldset{
	line-height:0%;
	display:block;
	border:none;
}
input{
	border-style: solid;
	color: white;
	outline: none;
	padding: 4px;
	border-radius: 4px;
	resize: vertical;
	width:400px;

}
textarea{
	border:2px solid;
	outline: none;
	padding: 4px;
	border-radius: 4px;
	resize: vertical;
	width:400px;

}

input[type='submit']{
	margin-right:auto;
	margin-left:auto;
	font-family: Exo2-Regular;
	color: black;
	font-size:20px;
    display: block;
    padding: 10px 20px;
	border: none;
    cursor: pointer;
    margin-top:25px;
    background: #557de9;
}

input[type='submit']:hover{
        background-color:#719CE1;
		transition: 0.2s all;
	}
  </style>
