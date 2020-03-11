<?php session_start();?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Freebet</title>
	<script data-ad-client="ca-pub-5520140392346899" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	</head>

	<body>

	<header>
	    <?php require_once 'includes/en_tete.php'; ?>
	</header>
	<?php
    global $db;
      if (isset($_SESSION['email'])) {?>
	  	<div id='table'>
	<h2 style="text-align: center">LES <span class='number'>10</span> PARIS LES PLUS JOUES</h2>
	<table>
		<th> Ligue </th>
		<th> Equipe à Domicile </th>
		<th> Côte Equipe à Domicile </th>
		<th> VS </th>
		<th> Côte Equipe Visiteur </th>
		<th> Equipe Visiteur</th>

	<?php

		$q = $db->prepare("SELECT * FROM game ORDER BY Id DESC LIMIT 10");
		$q->execute();
		$result = $q->fetchall();

		foreach ($result as $res)
		{
				?><tr>	<td>	<?php echo $res['ligue'];	?>	</td>
						<td>	<?php echo $res['equipe_une'];	?>	</td>
						<td>	<?php echo $res['cote_equipe_une'];	?>	</td>
						<td>	<?php echo "vs";?>	</td>
						<td>	<?php echo $res['cote_equipe_deux'];	?>	</td>
						<td>	<?php echo $res['equipe_deux'];	?>	</td></tr>
		<?php
		}
		?>
	</table>
	</div><?php
      }
      else{
        ?>
	<main>
	<div id="text1">
		<h1>Bienvenue sur le premier site de paris en ligne vraiment gratuit</h1>
	</div>
	<a href='#content2'><img id='arrow1' src="img/icons8-expand-arrow-64.png" alt='down'></a>
	</main>

	<div id='content2'>
	<div id="text2">
		<h1>Tentez de gagner des lots parmis des centaines</h1>
	</div>
	<a href='#content3'><img id='arrow2' src="img/icons8-expand-arrow-64.png" alt='down'></a>
	</div>

	<div id='content3'>
	<div id="text3">
		<h1>Regardez des pubs pour obtenir plus de points et pariez les sur votre equipe prefere</h1>
		<a href='#content4'><img id='arrow1' src="img/icons8-expand-arrow-64.png" alt='down'></a>
	</div>
	</div>

	<div id='content4'>
	<div id="text4">
		<h1>ou sur les milliers d'autres matchs disponibles chaque semaines</h1>
		<h1>N'attendez plus et tentez votre chance</h1>
	</div>
		<div id="btn">
        <button type="button" name="register" class="btn"><a href="includes/registration_page.php">S'inscrire</a></button>
		</div>
		<?php
	  }?>
	</div>

	<footer>
	    <?php require_once 'includes/footer.php'; ?>
	</footer>
	</body>
</html>

<style type="text/css">

@font-face{
  font-family:'sporo';
  src: url(/freebet/font/Sporter.ttf);
}
@font-face{
  font-family:'font2';
  src: url(/freebet/font/MADE-TOMMY-Bold_PERSONAL-USE.ttf);
}

/*-------main-------*/
html{
scroll-behavior: smooth;}

main{
	margin-top:70px;
	padding-top:50px;
	width: 100%;
	background-image: url("img/sandro-schuh-HgwY_YQ1m0w-unsplash.jpg");
	background-color: #ffff; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
	text-align:center;
	height: 100vh;
	}
#content2{
	padding-top:50px;
	width: 100%;
	background-image: url("img/content@.png");
	background-color: #0b0b0b; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
	text-align:center;
	height: 100vh;
}
#content3{
	padding-top:50px;
	width: 100%;
	background-image: url("img/1463.jpg");
	background-color: #ffff; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
	text-align:center;
	height: 100vh;
}

#content4{
	padding-top:50px;
	width: 100%;
	background-image: url("img/chuttersnap-u5XMXzdcErI-unsplash.blur.jpg");
	background-color: #ffff; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
	text-align:center;
	height: 100vh;
}
#table{
	padding-top:100px;
	padding-bottom:100px;
	width: 100%;
	background-image: url("img/markus-spiske-BfphcCvhl6E-unsplash.jpg");
	background-color: #ffff; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
	text-align:center;
	height: 100vh;
}
#text1{
	margin-right:auto;
	margin-left:auto;
	width:500px;
	}
#text2{
	margin-right:auto;
	margin-left:auto;
	width:700px;
}
#text3{
	margin-top:100px;
	margin-left:800px;
	width:500px;
}
#text4{
	margin-right:auto;
	margin-left:auto;
	width:700px;
	margin-top:100px;
}
#arrow1{
	margin-top:50px;
}
#arrow2{
	margin-top:280px;
}

.number{
	font-family:'font2';
	font-size: 40px;
}
body{
	margin-right:0;
	margin-left:0;
	margin-bottom:0;
	background-color:white;
}
h1{
	font-family:'sporo';
	font-size:4em;
	vertical-align:middle;
	color:#557de9;
	text-shadow: #fff 1px 1px, #fff -1px 1px, #fff -1px -1px, #fff 1px -1px;
	
}
h2{
	font-family:'sporo';
	font-size:3em;
	vertical-align:middle;
	color:white;
	border:5px dashed white;
	background-color: #557de9;
	margin-right:auto;
	margin-left:auto;
	width: fit-content;
	padding: 10px;
}

#btn button.btn{
    padding:5px;
    margin:5px;
    background-color:#557de9;
    width:200px ;
	display:inline-block;
    cursor:pointer;
    border-radius:5px;
    border: 2px solid white;
    }
    #btn button.btn a{
    color:white;
    text-decoration: none;
    font-family:'sporo';
    font-size:30px;
    }
    #btn button.btn:hover{
    background-color:#719CE1;
    transition: 0.2s all;
    }
#arrow1:hover,#arrow2:hover{
	width:70px;
	height:70px;	
	}

table{
	font-family:'font2';
	font-size: 20px;
	color:white;
	border:5px dashed white;
	background-color: #557de9;
	width:90%;

}

</style>
