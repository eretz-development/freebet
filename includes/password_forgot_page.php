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
		<div id="email_block">
			<div id="svg">
				<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M28.66667,28.66667c-4.773,0 -8.98151,2.34406 -11.57585,5.94889c-1.74867,2.42233 -0.97612,5.85595 1.55371,7.43262l62.93229,39.2207c2.709,1.69133 6.13735,1.69133 8.84636,0l62.66634,-39.55664c2.63017,-1.66267 3.28592,-5.27623 1.34375,-7.69857c-2.61583,-3.25367 -6.60643,-5.34701 -11.09993,-5.34701zM154.19531,57.94922c-0.59931,0.00661 -1.20792,0.17178 -1.77767,0.5319l-61.99446,39.09472c-2.70901,1.68417 -6.13736,1.67734 -8.84636,-0.014l-62.00846,-38.63281c-2.279,-1.419 -5.23503,0.22396 -5.23503,2.91146v67.15951c0,7.91917 6.41417,14.33333 14.33333,14.33333h114.66667c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-67.62142c0,-2.021 -1.67342,-3.44918 -3.47135,-3.42936z"></path></g></g></svg>
			</div>
			<div>
				<input type="email" name="lemail"  class="textfield" id="lemail" placeholder='Adresse e-mail' required>
			</div>
			<input type="submit" name="form_password_forgot" id="form_password_forgot" value="Valider">
		</div>
		</form>

		<?php require_once 'password_forgot.php'; ?>
  </div>

<?php require_once 'footer.php'; ?>

<style media="screen">
@font-face{
  font-family:'sporo';
  src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}
body{
	margin:0px;
	padding:0px;
	width:100%;
	height:100%;
	background-color:#3B3EFF;
	overflow:hidden;
	text-align:center;
}
	/* ---------------- */
	.textfield{
		outline: none;
	}
	.textfield{
	border-top: hidden;
	border-left: hidden;
	border-right: hidden;
	outline:none;
	font-family: Exo2-Regular;
	font-size: 15px;
	color:white;
	width:200px;
}
a{
	color: white;
}
#svg{
	margin-top:10px;
	position: absolute;}

div #email_block{
	margin-top: 150px;
	width:fit-content;
	display:flex;
	margin-left:auto;
	margin-right:auto;
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


</body>
</html>
