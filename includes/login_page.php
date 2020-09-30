<?php session_start();?>

<!DOCTYPE html>
<html>
	<head>
		<title>Freebet</title>
		<meta charset="utf-8">
	</head>
	<body>
	<?php require_once 'en_tete.php'; ?>
		<!-- register -->
		<main>
			<div id="login_block">
				<div id="connexion" >Connexion</div>
				<span style="color:white">Vous n'avez pas de compte? <a href="/freebet/includes/registration_page.php">Inscrivez-vous</span></a>
				<?php	global $db; ?>
				<form method="post" class="login">
				<div id="email_block">
					<div id="svg">
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M28.66667,28.66667c-4.773,0 -8.98151,2.34406 -11.57585,5.94889c-1.74867,2.42233 -0.97612,5.85595 1.55371,7.43262l62.93229,39.2207c2.709,1.69133 6.13735,1.69133 8.84636,0l62.66634,-39.55664c2.63017,-1.66267 3.28592,-5.27623 1.34375,-7.69857c-2.61583,-3.25367 -6.60643,-5.34701 -11.09993,-5.34701zM154.19531,57.94922c-0.59931,0.00661 -1.20792,0.17178 -1.77767,0.5319l-61.99446,39.09472c-2.70901,1.68417 -6.13736,1.67734 -8.84636,-0.014l-62.00846,-38.63281c-2.279,-1.419 -5.23503,0.22396 -5.23503,2.91146v67.15951c0,7.91917 6.41417,14.33333 14.33333,14.33333h114.66667c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-67.62142c0,-2.021 -1.67342,-3.44918 -3.47135,-3.42936z"></path></g></g></svg>
					</div>
					<div>
						<input type="email" name="lemail"  class="textfield" id="lemail" placeholder='Adresse E-mail' required><br><br>
					</div>
				</div>
				<div id="password_block">
					<div id="svg">
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,7.16667c-23.82063,0 -43,19.17937 -43,43v19.49837c-8.89713,10.10147 -14.33333,23.31709 -14.33333,37.83496c0,31.66233 25.671,57.33333 57.33333,57.33333c31.66233,0 57.33333,-25.671 57.33333,-57.33333c0,-14.51788 -5.4362,-27.73349 -14.33333,-37.83496v-19.49837c0,-23.82063 -19.17936,-43 -43,-43zM86,21.5c16.3127,0 28.66667,12.35397 28.66667,28.66667v7.74056c-8.44148,-4.89193 -18.20886,-7.74056 -28.66667,-7.74056c-10.45781,0 -20.22518,2.84863 -28.66667,7.74056v-7.74056c0,-16.3127 12.35397,-28.66667 28.66667,-28.66667zM86,64.5c23.75033,0 43,19.24967 43,43c0,23.75033 -19.24967,43 -43,43c-23.75033,0 -43,-19.24967 -43,-43c0,-23.75033 19.24967,-43 43,-43zM86,86c-7.88333,0 -14.33333,6.45 -14.33333,14.33333c0,5.2675 2.90967,9.8377 7.16667,12.3317v23.50163h14.33333v-23.50163c4.257,-2.494 7.16667,-7.0642 7.16667,-12.3317c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333z"></path></g></g></svg>
					</div>
					<div>
						<input type="password" name="lpassword" class="textfield" id="lpassword" placeholder='Mot de passe' required><br><br>
					</div>
				</div>
				<a href="/freebet/includes/password_forgot_page.php"><span>Mots de passe oublie?</span></a><br>
				<br>
				<br>
				<br>
					<input type="submit" name="formlogin" class="button" id="formlogin" value="Se connecter">
				</form>
				<?php require_once 'login.php'; ?>
			</div>
			<script>function show(elem) {elem.classList.toggle('wide');}</script>
			<script>var specialChars = document.querySelectorAll("span.char"); for(var c=0; c<specialChars.length; c++){ specialChars[c].innerHTML = decodeURIComponent(specialChars[c].innerHTML);}</script>
		</main>
	</body>
</html>

<style media="screen">

body{
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-size: cover;
 background-position: top;
 background-image:url("/freebet/skins/markus-spiske-BfphcCvhl6E-unsplash.jpg");
 width: 100%;
 height: 100%;
 letter-spacing: 0.02em;
  font-weight: 400;
 -webkit-font-smoothing: antialiased; 
margin:0px;
padding:0px;
overflow: hidden;

}
main{
	display:flex;
	margin-left:60%;
	margin-top:5%;
}
div#login_block{
	font-family: Exo2-Regular;
	margin-right:auto;
	margin-left:auto;
	width:100%;
	height:max-content;
}

#connexion {
	font-family: Exo2-Regular;
	font-size: 45px;
	color:white;
}
.textfield{
	border-top: hidden;
	border-left: hidden;
	border-right: hidden; 
	outline:none;
	font-family: Exo2-Regular;
	font-size: 15px;
	color:white;
	width:400px;
}
a{
	color: white;
}
#svg{
	margin-top:10px;
	position: absolute;}

div #email_block, #password_block{
	margin-top: 25px;
	width:fit-content;
	display:flex;
}
input[type=email],input[type=password] {
	resize: vertical;
	background-color:transparent;
	padding:12px;
	padding-left:40px;
	border-color:#a6a6a6;
	transition: all 0.1s linear;
}
input:hover{
	border-color:white;
}

input[type=submit] {
	outline:none;
	border: none;
	cursor: pointer;
	font-family: Exo2-Regular;
	font-size:20px;
	background-color:transparent;
	color:white;
	border-bottom: solid 2px;
	border-color:#a6a6a6;
	transition: all 0.1s linear;
}
input[type=submit]:hover {
	border-color:white;

}
::placeholder {
	color: #a6a6a6;;
	opacity: 1; /* Firefox */
}
</style>
