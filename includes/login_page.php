<?php session_start();?>

<!DOCTYPE html>
<html>
	<head>
		<title>Freebet</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div class="blurred-box">
			<div class="login_block">
				<form method="post">
					<div id="email">
						<div class="user-name">
							<label for="Email">E-mail</label>
						</div>
						<input type="email" name="lemail"  class="textfield" id="lemail" required><br><br>
					</div>
					<div id="password">
						<div class="user-name">
							<label for="MotDePasse">Mot De Passe</label>
						</div>
					<input type="password" name="lpassword" class="textfield" id="lpassword" required><br><br>
					</div>
					<input type="submit" name="formlogin" class="button" id="formlogin">
				</form>
			<?php require_once 'login.php'; ?>
			</div>
			<div class="forgot">
				<a href="/freebet/includes/password_forgot_page.php"><span>Mots de passe oublie?</span></a><br>
				<a href="/freebet/includes/registration_page.php"><span>Vous n'avez pas de compte? Inscrivez-vous</span></a>
			</div>
		</div>
	</body>
</html>

<style media="screen">
.forgot{
	margin-right:auto;
	margin-left:auto;
}
.forgot a{
	text-decoration:none;
	font-size:20px;
	color: white;
	font-family:Exo2-Regular;

}
	@font-face{
  font-family:'Exo2-Regular';
  src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}
	/* @font-face{
    font-family:'sporo';
    src: url(/freebet/font/Sporter.ttf);
    }

		/* ---------------- */
		/* .textfield{
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
		#login_block{
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

*/
input[type=submit] {
	background-color:transparent;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	color: white;
	font-size:20px;
	font-family:Exo2-Regular;
	} 
html{
    width: 100vw;
    height: 100vh;
}

/* CSS which you need for blurred box */
body{
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-size: cover;
 background-position: top;
 background-image:url("../skins/markus-spiske-BfphcCvhl6E-unsplash.jpg");
 width: 100%;
 height: 100%;
 letter-spacing: 0.02em;
  font-weight: 400;
 -webkit-font-smoothing: antialiased; 
 display:flex;

}

.blurred-box{
  position: relative;
  width: 300px;
  height: 300px;
  top: calc(50% - 175px);
  left: calc(50% - 125px);
  background: inherit;
  border-radius: 2px;
  overflow: hidden;
}

.blurred-box:after{
 content: '';
 width: 300px;
 height: 300px;
 background: inherit; 
 position: absolute;
 left: 0;
 left position
 right: 0;
 top: 0;  
 top position 
 bottom: 0;
 box-shadow: inset 0 0 0 200px rgba(255,255,255,0.05);
 filter: blur(10px);
}


/* Form which you dont need */
.login_block{
  position: relative;
  margin-top: 20px;
  text-align: center;
  z-index: 1;
}
.user-login-box > *{
  display: inline-block;
  width: 200px;
}


.user-name{
font-size:20px;
  margin-top: 15px;
  margin-bottom: 15px;
  color: white;
  font-family:Exo2-Regular;
  margin-right:auto;
  margin-left:auto;

}

input.textfield{
  width:180px;
  height: 27px;
  opacity: 0.4;
  border-radius: 2px;
  padding: 6px 10px;
  border: 0;
  font-family:Exo2-Regular;
  font-size:18px;
  margin-left:auto;
  margin-right:auto;
}

body{
	margin:0px;
}
    #login_block {
		margin-bottom: 250px;

    }
  </style>
