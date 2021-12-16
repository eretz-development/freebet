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

	<p class="mise_error" id="mise_error"></p>

	<div class="grid-container">
		<div id='recompense'>
		    <img src="https://img.icons8.com/ios/50/000000/gift.png"/>
			<br>
			<label for="Amazon_10">Test</label>
			<br>
			<label for="Amazon_10">-100 points</label>
			<br>
			<input type="submit" name='acheter_am_10' id="acheter_am_10" class='btn-ok' value='Obtenir' onclick="confirm_acheter_am_10()">
			<br>
            <label for="ConfirmBuy" id="confirm_buy_question_am_10" style="display: none">Etes-vous sur ?</label>
			<button type="button" name="confirm_buy_am_10" id="confirm_buy_am_10" class="button_o" onclick="confirm_buy_am_10()" style="display: none">oui</button>
            <a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_am_10" id="unfirm_buy_am_10" class="button_n" style="display: none">non</button></a>
            <form method="post" class="update">
                <input type="submit" name="formsend_confirm_buy_am_10" id="formsend_confirm_buy_am_10" class="button" style="display:none">
            </form>
		</div>

        <div id='recompense'>
		    <img src="https://img.icons8.com/ios/50/000000/gift.png"/>
			<br>
			<label for="Amazon_25">25€ de carte Amazon</label>
			<br>
			<label for="Amazon_25">-50 000 points</label>
			<br>
			<input type="submit" name='acheter_am_25' id="acheter_am_25" class='btn-ok' value='Obtenir' onclick="confirm_acheter_am_25()">
			<br>
            <label for="ConfirmBuy" id="confirm_buy_question_am_25" style="display: none">Etes-vous sur ?</label>
			<button type="button" name="confirm_buy_am_25" id="confirm_buy_am_25" class="button_o" onclick="confirm_buy_am_25()" style="display: none">oui</button>
            <a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_am_25" id="unfirm_buy_am_25" class="button_n" style="display: none">non</button></a>
            <form method="post" class="update">
                <input type="submit" name="formsend_confirm_buy_am_25" id="formsend_confirm_buy_am_25" class="button" style="display:none">
            </form>
		</div>

        <div id='recompense'>
		    <img src="https://img.icons8.com/ios/50/000000/gift.png"/>
			<br>
			<label for="Amazon_50">50€ de carte Amazon</label>
			<br>
			<label for="Amazon_50">-75 000 points</label>
			<br>
			<input type="submit" name='acheter_am_50' id="acheter_am_50" class='btn-ok' value='Obtenir' onclick="confirm_acheter_am_50()">
			<br>
			<label for="ConfirmBuy" id="confirm_buy_question_am_50" style="display: none">Etes-vous sur ?</label>
			<button type="button" name="confirm_buy_am_50" id="confirm_buy_am_50" class="button_o" onclick="confirm_buy_am_50()" style="display: none">oui</button>
            <a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_am_50" id="unfirm_buy_am_50" class="button_n" style="display: none">non</button></a>
            <form method="post" class="update">
                <input type="submit" name="formsend_confirm_buy_am_50" id="formsend_confirm_buy_am_50" class="button" style="display: none">
            </form>
		</div>

        <div id='recompense'>
		    <img src="https://img.icons8.com/ios/50/000000/gift.png"/>
			<br>
			<label for="Steam_10">10€ de carte Steam</label>
			<br>
			<label for="Steam_10">-25 000 points</label>
			<br>
			<input type="submit" name='acheter_st_10' id="acheter_st_10" class='btn-ok' value='Obtenir' onclick="confirm_acheter_st_10()">
			<br>
			<label for="ConfirmBuy" id="confirm_buy_question_st_10" style="display: none">Etes-vous sur ?</label>
			<button type="button" name="confirm_buy_st_10" id="confirm_buy_st_10" class="button_o" onclick="confirm_buy_st_10()" style="display: none">oui</button>
            <a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_st_10" id="unfirm_buy_st_10" class="button_n" style="display: none">non</button></a>
            <form method="post" class="update">
                <input type="submit" name="formsend_confirm_buy_st_10" id="formsend_confirm_buy_st_10" class="button" style="display: none">
            </form>
		</div>

        <div id='recompense'>
		    <img src="https://img.icons8.com/ios/50/000000/gift.png"/>
			<br>
			<label for="Steam_25">25€ de carte Steam</label>
			<br>
			<label for="Steam_25">-50 000 points</label>
			<br>
			<input type="submit" name='acheter_st_25' id="acheter_st_25" class='btn-ok' value='Obtenir' onclick="confirm_acheter_st_25()">
			<br>
			<label for="ConfirmBuy" id="confirm_buy_question_st_25" style="display: none">Etes-vous sur ?</label>
			<button type="button" name="confirm_buy_st_25" id="confirm_buy_st_25" class="button_o" onclick="confirm_buy_st_25()" style="display: none">oui</button>
			<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_st_25" id="unfirm_buy_st_25" class="button_n" style="display: none">non</button></a>
			<form method="post" class="update">
				<input type="submit" name="formsend_confirm_buy_st_25" id="formsend_confirm_buy_st_25" class="button" style="display:none"><br>
			</form>
	    </div>

        <div id='recompense'>
		    <img src="https://img.icons8.com/ios/50/000000/gift.png"/>
   			<br>
			<label for="Steam_50">50€ de carte Steam</label>
			<br>
			<label for="Steam_50">-75 000 points</label>
			<br>
			<input type="submit" name='acheter_st_50' id="acheter_st_50" class='btn-ok' value='Obtenir' onclick="confirm_acheter_st_50()">
			<br>
			<label for="ConfirmBuy" id="confirm_buy_question_st_50" style="display: none">Etes-vous sur ?</label>
			<button type="button" name="confirm_buy_st_50" id="confirm_buy_st_50" class="button_o" onclick="confirm_buy_st_50()" style="display: none">oui</button> 
			<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_st_50" id="unfirm_buy_st_50" class="button_n" style="display: none">non</button></a> 
			<form method="post" class="update">
				<input type="submit" name="formsend_confirm_buy_st_50" id="formsend_confirm_buy_st_50" class="button" style="display:none">
			</form>
		</div>
        <?php include 'recompense.php'; ?>
	</div>

	<footer>
		<?php require_once 'footer.php'; ?><!--ethan-->
	</footer>

  <script type="text/javascript">
    function confirm_acheter_am_10(){
      document.getElementById('acheter_am_10').style.display = "none";
			document.getElementById('confirm_buy_question_am_10').style.display = "block";
			document.getElementById('confirm_buy_am_10').style.display = "inline-block";
			document.getElementById('unfirm_buy_am_10').style.display = "inline-block";
    }

    function confirm_acheter_am_25(){
      document.getElementById('acheter_am_25').style.display = "none";
			document.getElementById('confirm_buy_question_am_25').style.display = "block";
			document.getElementById('confirm_buy_am_25').style.display = "inline-block";
			document.getElementById('unfirm_buy_am_25').style.display = "inline-block";
    }

    function confirm_acheter_am_50(){
      document.getElementById('acheter_am_50').style.display = "none";
			document.getElementById('confirm_buy_question_am_50').style.display = "block";
			document.getElementById('confirm_buy_am_50').style.display = "inline-block";
			document.getElementById('unfirm_buy_am_50').style.display = "inline-block";
    }

    function confirm_acheter_st_10(){
      document.getElementById('acheter_st_10').style.display = "none";
			document.getElementById('confirm_buy_question_st_10').style.display = "block";
			document.getElementById('confirm_buy_st_10').style.display = "inline-block";
			document.getElementById('unfirm_buy_st_10').style.display = "inline-block";
    }

    function confirm_acheter_st_25(){
      document.getElementById('acheter_st_25').style.display = "none";
			document.getElementById('confirm_buy_question_st_25').style.display = "block";
			document.getElementById('confirm_buy_st_25').style.display = "inline-block";
			document.getElementById('unfirm_buy_st_25').style.display = "inline-block";
    }

    function confirm_acheter_st_50(){
      document.getElementById('acheter_st_50').style.display = "none";
			document.getElementById('confirm_buy_question_st_50').style.display = "block";
			document.getElementById('confirm_buy_st_50').style.display = "inline-block";
			document.getElementById('unfirm_buy_st_50').style.display = "inline-block";
    }

    function confirm_buy_am_10(){
      document.getElementById('formsend_confirm_buy_am_10').click();
    }

    function confirm_buy_am_25(){
      document.getElementById('formsend_confirm_buy_am_25').click();
    }

    function confirm_buy_am_50(){
      document.getElementById('formsend_confirm_buy_am_50').click();
    }

    function confirm_buy_st_10(){
      document.getElementById('formsend_confirm_buy_st_10').click();
    }

    function confirm_buy_st_25(){
      document.getElementById('formsend_confirm_buy_st_25').click();
    }

    function confirm_buy_st_50(){
      document.getElementById('formsend_confirm_buy_st_50').click();
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
	background-color: grey; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
}

.grid-container{
	margin-bottom: 60px;
	display: grid;
	grid-template-columns:auto auto auto auto;
	grid-gap: 30px 30px;
	margin-left:30px;
	margin-right:30px;
	}

#recompense{
	padding:10px;
	background-color: white;
	width:255px;
	height: 255px;
	overflow:hidden;
	border-radius: 4px;
	text-align:center;
	font-family:'sporo';
	font-size: 25px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#recompense img{
	margin-top:20px;
	margin-bottom:10px;
}
form{
	display:inline-block;
}
.btn-ok{
	margin-top:10px;
	width: 80px;
	height: 38px;
	border-radius:4px;
    color: black;
	text-align:center;
	cursor:pointer;
	font-family:'sporo';
	font-size: 20px;
	outline:none;
	border:none;
	background-color:transparent;
	transition: all 0.1s linear;
}
.btn-ok:hover{
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
}
.button_n{
	color: white;
	text-align: center;
	width:50px;
	height: fit-content;
	padding:5px;
	margin:5px;
	background-color:rgb(255, 51, 51);
	display:inline-block;
	border-radius:4px;
	cursor:pointer;
	font-family:'sporo';
	font-size: 20px;
	outline:none;
	border:none;
	transition: all 0.1s linear;
}
.button_o{
	background-color:rgb(51, 255, 95);
	color: white;
	text-align: center;
	width:50px;
	height: fit-content;
	padding:5px;
	margin:5px;
	display:inline-block;
	border-radius:4px;
	cursor:pointer;
	font-family:'sporo';
	font-size: 20px;
	outline:none;
	border:none;
	transition: all 0.1s linear;
}
.button_o:hover,.button_n:hover{
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
}
</style>
