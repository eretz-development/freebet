<?php session_start();?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<script data-ad-client="ca-pub-5520140392346899" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	</head>

	<body>

	<header>
	<?php require_once 'en_tete.php'; ?><!--ethan-->
	</header>

	<p class="mise_error" id="mise_error"></p>

	<main>

	<content>

			<div id='plus_de_point'>
					<input type="submit" name='plus_pts' id="plus_pts" class='btn-ok' value='Plus de points' onclick="plus_pts()">
          <form method="post" class="update">
            <input type="submit" name="formsend_plus_pts" id="formsend_plus_pts" class="button" style="display:none"><br>
          </form>
			</div>

      <?php include 'plus_de_point.php'; ?>
	</content>

	<div class='pub'>
	<!-- click in text -->
	<!-- <script type="text/javascript" src="//tags.clickintext.net/UojxcRIQE75zD" title="Interstitiel"></script> -->
	</div>

	</main>

	<footer>
		<?php require_once 'footer.php'; ?><!--ethan-->
	</footer>

  <script type="text/javascript">
    function plus_pts(){
      document.getElementById('formsend_plus_pts').click();
    }
  </script>

</body>
</html>

<style media="screen">
body{
	margin:0px;
	background-image: url("../img/rosie-yang-Zq4XzAkLjOE-unsplash.jpg");
	background-color: #ffff; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
}

main{
	margin-bottom: 60px;
	margin-top:100px;
	display:block;
	}

#plus_de_point{
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
	width: 130px;
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
/*-----nombre de plus_de_points-------*/
.nb-plus_de_points{
	font-family:'font2';
	color: #557de9;
	font-size:12px;
    display: block;
	margin-bottom:10px;
}
/*-----pub-----*/
.pub{
	margin-top:30px;
	margin-right:auto;
	margin-left:auto;
	font-family:'sporo';
	font-size:40px;
	width: fit-content;
	overflow: auto;
	height: fit-content;
	background-color:white;
	padding:30px;
	text-align:center;
	border:5px solid #557de9;
	border-radius:4px;
	z-index: 1; /* Le contenu doit s'afficher en arrière plan. */
	}
  </style>
