<?php session_start();?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<script data-ad-client="ca-pub-5520140392346899" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

		<script type="text/javascript">
        document.oncontextmenu = new Function("return false");
				document.onselectstart=new Function ("return false");
    </script>
	</head>

	<body>

	<header>
	<?php require_once 'en_tete.php'; ?><!--ethan-->
	</header>

	<p class="mise_error" id="mise_error"></p>

	<main>
		<content>
			<div id='plus_de_point'>
				<?php include 'plus_de_point.php'; ?>
			</div>

			<div id="video">
				<p id="leaveButton" onclick="stop()" style="display:none; "><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ababab"><path d="M44.03365,26.46154c-1.91226,0 -3.64363,0.7494 -4.96154,2.06731l-10.54327,10.54327c-2.63581,2.63582 -2.63581,7.23558 0,10.54327l36.38462,36.38462l-36.38462,36.38462c-2.63581,3.30769 -2.63581,7.90746 0,10.54327l10.54327,10.54327c3.30769,2.63582 7.90746,2.63582 10.54327,0l36.38462,-36.38462l36.38462,36.38462c3.30769,2.63582 7.90746,2.63582 10.54327,0l10.54327,-10.54327c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-36.38462,-36.38462l36.38462,-36.38462c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-10.54327,-10.54327c-3.30769,-2.63581 -7.90745,-2.63581 -10.54327,0l-36.38462,36.38462l-36.38462,-36.38462c-1.65385,-1.31791 -3.66947,-2.06731 -5.58173,-2.06731z"></path></g></g></svg></p>
				<video width="320" height="240" id="mavideo" controls>
					<source src="video.mp4" type="video/mp4">
					Your browser does not support the video.
				</video>
				<div class="controles" id="controles">
				</div>
				<div id="confirm_cancel_quit_video">
					<span class="popuptext" id="myPopup">
						<p>Etes-vous sur de vouloir quitter?<br />
						Si vous quittez la video maintenant vous ne recevrez pas de points supplementaires.</p>
						<button type="button" id="quit_video"><a id="quit" href="/freebet/includes/plus_de_point_page.php">Quitter</a></button>
						<button type="button" id="quit_video" onclick="reprendre_video()">Continuer</button>
					</span>
				</div>
			</div>
		</content>
	</main>

	<footer>
		<?php require_once 'footer.php'; ?><!--ethan-->
	</footer>

	<script type="text/javascript">
		function launch() {
			document.getElementById('video').style.display = "block";
			lecteur.play();
			document.getElementById('leaveButton').style.display = "block";
		}
		document.getElementById("mavideo").addEventListener("ended",function() {
			document.getElementById('formsend_plus_pts').click();
			document.getElementById('video').style.display = "block";
		});
		function lecture() {
    		// Lit la vidéo
    		lecteur.play();
		}

		function pause() {
		    // Met la vidéo en pause
		    lecteur.pause();
		}

		function stop() {
			lecteur.pause();
			document.getElementById("myPopup").style.display = "block";
		}

		var lecteur;

		function creerBoutons() {
		    // Crée les boutons de gestion du lecteur
		    var btnLecture = document.createElement("button");
		    var btnPause = document.createElement("button");
		    var btnStop = document.createElement("button");
			btnLecture.style.display = "none";
			btnPause.style.display = "none";
			btnStop.style.display = "none";

		    var controlesBox = document.getElementById("controles");
		    lecteur = document.getElementById("mavideo");

		    // Ajoute un peu de texte
		    btnLecture.textContent = "Lecture";
		    btnPause.textContent = "Pause";
		    btnStop.textContent = "Stop";

		    // Ajoute les boutons à l'interface
		    controlesBox.appendChild(btnLecture);
		    controlesBox.appendChild(btnPause);
		    controlesBox.appendChild(btnStop);

		    // Lie les fonctions aux boutons
		    btnLecture.addEventListener("click", lecture, false);
		    btnPause.addEventListener("click", pause, false);
		    btnStop.addEventListener("click", stop, false);

		    // Affiche les nouveaux boutons et supprime l'interface originale
		    controlesBox.removeAttribute("hidden");
		    lecteur.removeAttribute("controls");
			}

			// Crée les boutons lorsque le DOM est chargé
			document.addEventListener('DOMContentLoaded', creerBoutons, false);

	    function plus_pts(){
	      document.getElementById('formsend_plus_pts').click();
	    }
		function reprendre_video(){
			lecteur.play();
			document.getElementById('controles').style.display = "inline";
			document.getElementById("myPopup").style.display = "none";
		}
  </script>

</body>
</html>

<style media="screen">
@font-face{
  font-family:'sporo';
  src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}
body{
	margin:0px;
	background-color: #214932; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
}
#quit{
	text-decoration:none;
	color:black;
}
main{
	margin-bottom: 60px;
	margin-top:100px;
	display:block;
	font-family:'sporo';
	color:white;
	}

#plus_de_point{
	margin-top:30px;
	margin-left:auto;
	margin-right:auto;
	padding:10px;
	text-align:center;
	width:700px;
	height: fit-content;
	overflow:hidden;
	border-radius: 4px;
	line-height: 130%;
}
#play{
	transition: transform 0.4s ease-in;
	outline:none;
}
#play:hover{
	cursor:pointer;
	transform: rotate(120deg);
}
form{
	display:inline-block;
}

/*-----pub-----*/
#video{
	display:none;
	background-color: rgba(85,85,85,0.9);
	text-align: center;
	border-radius: 6px;
	position: absolute;
	top:0;
	width:100vw;
	height:100vh;
	margin:0;
	padding: 0;
	z-index:2;
}
#video video{
	width:50%;
	height:auto;
	margin-top:110px;
}
#leaveButton{
	position:absolute;
	right:0;
	margin:50px;
}
#leaveButton:hover{
	cursor:pointer;
}
/* Popup container - can be anything you want */
#confirm_cancel_quit_video{
	position: absolute;
	display: inline-block;
	cursor: pointer;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	top:0;
	left:0;
	margin:0;
	padding: 0;
	margin-top:19%;
  	margin-left:31%;
}
/* The actual popup */
#confirm_cancel_quit_video .popuptext {
  display: none;
  width: 500px;
  background-color: rgba(0,0,0,0.9);
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px;
  position: absolute;
}

/* Popup arrow */
#confirm_cancel_quit_video .popuptext::after {
  content: "";
  position: absolute;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
#confirm_cancel_quit_video .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
#quit_video{
	outline:none;
	border: 1px solid white;
	border-radius:4px;
	color:black;
	font-size: 14px;
	background-color:white;
	padding:2px;
	margin:2px;
	font-family:'sporo';
}
  </style>
