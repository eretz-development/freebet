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
			<div class="img">
				<img src="skins/football_01.png" alt="Football">
			</div>
			<div id="register_block">
				<div id="inscription" >Inscription</div>
				<span style="color:white">Deja membre? <a href="/freebet/includes/login_page.php">Se connecter</span></a>
				<?php	global $db; ?>
				<form method="post" class="register">
				<div id="pseudo_block">
					<div id="svg">
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M39.69231,6.61538c-18.16647,0 -33.07692,14.91046 -33.07692,33.07692v92.61538c0,18.16647 14.91046,33.07692 33.07692,33.07692h92.61538c18.16647,0 33.07692,-14.91046 33.07692,-33.07692v-92.61538c0,-18.16647 -14.91046,-33.07692 -33.07692,-33.07692zM39.69231,19.84615h92.61538c10.95673,0 19.84615,8.88942 19.84615,19.84615v92.61538c0,6.74459 -3.33353,12.73978 -8.47596,16.33173c-4.36719,-10.25901 -20.36298,-18.94171 -37.83173,-22.32692c0,0 -7.90745,-1.36959 -3.92788,-9.30288c3.97957,-5.94351 7.23558,-13.10156 7.23558,-15.09135c0,0 6.56371,-5.24579 7.23558,-13.85096c0.67188,-7.93329 -1.24038,-8.68269 -1.24038,-8.68269c3.30769,-9.2512 3.85036,-43.05168 -17.98558,-39.07212c-3.97956,-7.28726 -26.40985,-13.17908 -37.00481,5.99519c-5.29747,9.25121 -7.3131,21.83594 -2.6875,33.07692c0,0.67188 -1.1887,-0.69772 -1.86058,3.92788c-0.67187,4.6256 1.9381,11.37019 3.92788,14.67788c0.67188,1.31791 2.63582,1.86058 3.30769,1.86058c0,0 1.24038,8.60517 7.85577,16.53846c1.31791,5.94351 -4.54808,9.30288 -4.54808,9.30288c-17.46875,3.38522 -33.95553,12.06791 -38.45192,22.32692c-4.75481,-3.61779 -7.85577,-9.27704 -7.85577,-15.71154v-92.61538c0,-10.95673 8.88942,-19.84615 19.84615,-19.84615z"></path></g></g></svg>
					</div>
					<input type="pseudo" name="pseudo" id="pseudo" class="textfield" placeholder='Nom' required>
				</div>
				<div id="email_block">
					<div id="svg">
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M28.66667,28.66667c-4.773,0 -8.98151,2.34406 -11.57585,5.94889c-1.74867,2.42233 -0.97612,5.85595 1.55371,7.43262l62.93229,39.2207c2.709,1.69133 6.13735,1.69133 8.84636,0l62.66634,-39.55664c2.63017,-1.66267 3.28592,-5.27623 1.34375,-7.69857c-2.61583,-3.25367 -6.60643,-5.34701 -11.09993,-5.34701zM154.19531,57.94922c-0.59931,0.00661 -1.20792,0.17178 -1.77767,0.5319l-61.99446,39.09472c-2.70901,1.68417 -6.13736,1.67734 -8.84636,-0.014l-62.00846,-38.63281c-2.279,-1.419 -5.23503,0.22396 -5.23503,2.91146v67.15951c0,7.91917 6.41417,14.33333 14.33333,14.33333h114.66667c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-67.62142c0,-2.021 -1.67342,-3.44918 -3.47135,-3.42936z"></path></g></g></svg>
					</div>
					<div>
						<input type="email" name="email" id="email" class="textfield" placeholder='Adresse e-mail' required>
					</div>
				</div>
				<div id="password_block">
					<div id="svg">
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,7.16667c-23.82063,0 -43,19.17937 -43,43v19.49837c-8.89713,10.10147 -14.33333,23.31709 -14.33333,37.83496c0,31.66233 25.671,57.33333 57.33333,57.33333c31.66233,0 57.33333,-25.671 57.33333,-57.33333c0,-14.51788 -5.4362,-27.73349 -14.33333,-37.83496v-19.49837c0,-23.82063 -19.17936,-43 -43,-43zM86,21.5c16.3127,0 28.66667,12.35397 28.66667,28.66667v7.74056c-8.44148,-4.89193 -18.20886,-7.74056 -28.66667,-7.74056c-10.45781,0 -20.22518,2.84863 -28.66667,7.74056v-7.74056c0,-16.3127 12.35397,-28.66667 28.66667,-28.66667zM86,64.5c23.75033,0 43,19.24967 43,43c0,23.75033 -19.24967,43 -43,43c-23.75033,0 -43,-19.24967 -43,-43c0,-23.75033 19.24967,-43 43,-43zM86,86c-7.88333,0 -14.33333,6.45 -14.33333,14.33333c0,5.2675 2.90967,9.8377 7.16667,12.3317v23.50163h14.33333v-23.50163c4.257,-2.494 7.16667,-7.0642 7.16667,-12.3317c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333z"></path></g></g></svg>
					</div>
					<div>
						<input type="password" name="password" id="password" class="textfield" pattern=".{8,16}" required title="8 a 16 characters" placeholder='Mot de passe' required>
					</div>
				</div>
				<div id="cpassword_block">
					<div id="svg">
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,7.16667c-23.82063,0 -43,19.17937 -43,43v19.49837c-8.89713,10.10147 -14.33333,23.31709 -14.33333,37.83496c0,31.66233 25.671,57.33333 57.33333,57.33333c31.66233,0 57.33333,-25.671 57.33333,-57.33333c0,-14.51788 -5.4362,-27.73349 -14.33333,-37.83496v-19.49837c0,-23.82063 -19.17936,-43 -43,-43zM86,21.5c16.3127,0 28.66667,12.35397 28.66667,28.66667v7.74056c-8.44148,-4.89193 -18.20886,-7.74056 -28.66667,-7.74056c-10.45781,0 -20.22518,2.84863 -28.66667,7.74056v-7.74056c0,-16.3127 12.35397,-28.66667 28.66667,-28.66667zM86.29395,86.014c7.74761,0.15393 14.03939,6.53096 14.03939,14.31934c0,5.2675 -2.90967,9.8377 -7.16667,12.3317v16.33496c0,3.956 -3.21067,7.16667 -7.16667,7.16667c-3.956,0 -7.16667,-3.21067 -7.16667,-7.16667v-16.33496c-5.203,-3.04583 -8.39575,-9.19953 -6.71875,-15.92903c1.28283,-5.1385 5.59649,-9.2964 10.77799,-10.40007c1.15204,-0.24635 2.29457,-0.34393 3.40137,-0.32194z"></path></g></g></svg>
					</div>
					<div>
						<input type="password" name="cpassword" id="cpassword" class="textfield"  placeholder='Repetez mot de passe' required>
					</div>
				</div>
				<div id="j_accepte_toutes_les_conditions_g_n_rales" >
					<label for="checkbox" id="check" onclick="show(this)"></label>
					<input type="checkbox" id="checkbox" name="checkbox" required/>
					<p>J'accepte les <a href="conditions-generales-utilisation-freebet.pdf">Conditions G<span class="char">%C3%A9</span>n<span class="char">%C3%A9</span>rales d'Utilisation</a></p>
				</div>
					<input type="submit" name="formsend" id="formsend" value="S'inscrire">
				</form>
				<?php include 'register.php'; ?>
			</div>
			<script>function show(elem) {elem.classList.toggle('wide');}</script>
			<script>var specialChars = document.querySelectorAll("span.char"); for(var c=0; c<specialChars.length; c++){ specialChars[c].innerHTML = decodeURIComponent(specialChars[c].innerHTML);}</script>
		</main>
	</body>
</html>

<style media="screen">

body{
	margin:0px;
	padding:0px;
	width:100%;
	height:100%;
	background-color:black;
	overflow:hidden;
}

main{
	display:flex;
}
div#register_block{
	font-family: Exo2-Regular;
	margin-right:auto;
	margin-left:auto;
	width:100%;
	height:max-content;
}
div.img{
	margin-right:auto;
	margin-left:auto;
	width:100%;
	height:100%;
	overflow: hidden;
}
.img img{
	background-size: cover;
	width:125%;
	height:125%;
	margin-bottom:-30px;
	margin-left:-100px;
}
#inscription {
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

div #email_block, #password_block, #pseudo_block,  #cpassword_block{
	margin-top: 25px;
	width:fit-content;
	display:flex;
}
input[type=email],input[type=password],input[type=pseudo] {
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
input[type=checkbox]{
	opacity: 0;
	position: absolute;
	z-index: -1;}
#j_accepte_toutes_les_conditions_g_n_rales {
	font-family: Exo2-Regular;
	font-size: 15px;
	color:white;
	margin-top: 25px;
	display:flex;
}
#j_accepte_toutes_les_conditions_g_n_rales label{
	border: 1px solid #a6a6a6;
	border-radius: 50%;
	cursor: pointer;
	height: 13px;
	margin-right:10px;
	position: static;
	margin-top: 16px;
	width: 13px;
	transition: all 0.1s linear;
}
#j_accepte_toutes_les_conditions_g_n_rales label:hover{
	border-color:white;
}
.wide {
	background-color: white;
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
