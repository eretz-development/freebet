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
		    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#557de9"><path d="M86,6.88c-43.69832,0 -79.12,35.42168 -79.12,79.12c0,43.69832 35.42168,79.12 79.12,79.12c43.69832,0 79.12,-35.42168 79.12,-79.12c0,-43.69832 -35.42168,-79.12 -79.12,-79.12zM111.4904,116.96h-9.26736l-16.22304,-24.41712h-0.688l-16.51888,24.41712h-8.7548l21.19728,-31.15264l-20.93928,-30.76736h9.31208l16.3056,24.6304h0.688l16.5636,-24.6304h8.79608l-21.45528,31.11136z"></path></g></g></svg>
			<br>
			<label for="Amazon_10">Test</label>
			<br>
			<input type="submit" name='acheter_am_10' id="acheter_am_10" class='btn-ok' value='Obtenir' onclick="confirm_acheter_am_10()">
			<br>
            <label for="ConfirmBuy" id="confirm_buy_question_am_10" style="display: none">Etes-vous sur ?</label>
			<br>
			<button type="button" name="confirm_buy_am_10" id="confirm_buy_am_10" class="button_o" onclick="confirm_buy_am_10()" style="display: none">oui</button>
            <a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_am_10" id="unfirm_buy_am_10" class="button_n" style="display: none">non</button></a>
            <form method="post" class="update">
                <input type="submit" name="formsend_confirm_buy_am_10" id="formsend_confirm_buy_am_10" class="button" style="display:none">
            </form>
		</div>

        <div id='recompense'>
		    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#557de9"><path d="M86,6.88c-43.69832,0 -79.12,35.42168 -79.12,79.12c0,43.69832 35.42168,79.12 79.12,79.12c43.69832,0 79.12,-35.42168 79.12,-79.12c0,-43.69832 -35.42168,-79.12 -79.12,-79.12zM111.4904,116.96h-9.26736l-16.22304,-24.41712h-0.688l-16.51888,24.41712h-8.7548l21.19728,-31.15264l-20.93928,-30.76736h9.31208l16.3056,24.6304h0.688l16.5636,-24.6304h8.79608l-21.45528,31.11136z"></path></g></g></svg>
			<br>
			<label for="Amazon_25">25€ de carte Amazon</label>
			<br>
			<input type="submit" name='acheter_am_25' id="acheter_am_25" class='btn-ok' value='Obtenir' onclick="confirm_acheter_am_25()">
			<br>
            <label for="ConfirmBuy" id="confirm_buy_question_am_25" style="display: none">Etes-vous sur ?</label>
			<br>
			<button type="button" name="confirm_buy_am_25" id="confirm_buy_am_25" class="button_o" onclick="confirm_buy_am_25()" style="display: none">oui</button>
            <a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_am_25" id="unfirm_buy_am_25" class="button_n" style="display: none">non</button></a>
            <form method="post" class="update">
                <input type="submit" name="formsend_confirm_buy_am_25" id="formsend_confirm_buy_am_25" class="button" style="display:none">
            </form>
		</div>

        <div id='recompense'>
		    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#557de9"><path d="M86,6.88c-43.69832,0 -79.12,35.42168 -79.12,79.12c0,43.69832 35.42168,79.12 79.12,79.12c43.69832,0 79.12,-35.42168 79.12,-79.12c0,-43.69832 -35.42168,-79.12 -79.12,-79.12zM111.4904,116.96h-9.26736l-16.22304,-24.41712h-0.688l-16.51888,24.41712h-8.7548l21.19728,-31.15264l-20.93928,-30.76736h9.31208l16.3056,24.6304h0.688l16.5636,-24.6304h8.79608l-21.45528,31.11136z"></path></g></g></svg>
			<br>
			<label for="Amazon_50">50€ de carte Amazon</label>
			<br>
			<input type="submit" name='acheter_am_50' id="acheter_am_50" class='btn-ok' value='Obtenir' onclick="confirm_acheter_am_50()">
			<br>
			<label for="ConfirmBuy" id="confirm_buy_question_am_50" style="display: none">Etes-vous sur ?</label>
			<br>
			<button type="button" name="confirm_buy_am_50" id="confirm_buy_am_50" class="button_o" onclick="confirm_buy_am_50()" style="display: none">oui</button>
            <a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_am_50" id="unfirm_buy_am_50" class="button_n" style="display: none">non</button></a>
            <form method="post" class="update">
                <input type="submit" name="formsend_confirm_buy_am_50" id="formsend_confirm_buy_am_50" class="button" style="display: none">
            </form>
		</div>

        <div id='recompense'>
		    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#557de9"><path d="M86,6.88c-43.69832,0 -79.12,35.42168 -79.12,79.12c0,43.69832 35.42168,79.12 79.12,79.12c43.69832,0 79.12,-35.42168 79.12,-79.12c0,-43.69832 -35.42168,-79.12 -79.12,-79.12zM111.4904,116.96h-9.26736l-16.22304,-24.41712h-0.688l-16.51888,24.41712h-8.7548l21.19728,-31.15264l-20.93928,-30.76736h9.31208l16.3056,24.6304h0.688l16.5636,-24.6304h8.79608l-21.45528,31.11136z"></path></g></g></svg>
			<br>
			<label for="Steam_10">10€ de carte Steam</label>
			<br>
			<input type="submit" name='acheter_st_10' id="acheter_st_10" class='btn-ok' value='Obtenir' onclick="confirm_acheter_st_10()">
			<br>
			<label for="ConfirmBuy" id="confirm_buy_question_st_10" style="display: none">Etes-vous sur ?</label>
			<br>
			<button type="button" name="confirm_buy_st_10" id="confirm_buy_st_10" class="button_o" onclick="confirm_buy_st_10()" style="display: none">oui</button>
            <a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_st_10" id="unfirm_buy_st_10" class="button_n" style="display: none">non</button></a>
            <form method="post" class="update">
                <input type="submit" name="formsend_confirm_buy_st_10" id="formsend_confirm_buy_st_10" class="button" style="display: none">
            </form>
		</div>

        <div id='recompense'>
		    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#557de9"><path d="M86,6.88c-43.69832,0 -79.12,35.42168 -79.12,79.12c0,43.69832 35.42168,79.12 79.12,79.12c43.69832,0 79.12,-35.42168 79.12,-79.12c0,-43.69832 -35.42168,-79.12 -79.12,-79.12zM111.4904,116.96h-9.26736l-16.22304,-24.41712h-0.688l-16.51888,24.41712h-8.7548l21.19728,-31.15264l-20.93928,-30.76736h9.31208l16.3056,24.6304h0.688l16.5636,-24.6304h8.79608l-21.45528,31.11136z"></path></g></g></svg>
			<br>
			<label for="Steam_25">25€ de carte Steam</label>
			<br>
			<input type="submit" name='acheter_st_25' id="acheter_st_25" class='btn-ok' value='Obtenir' onclick="confirm_acheter_st_25()">
			<br>
			<label for="ConfirmBuy" id="confirm_buy_question_st_25" style="display: none">Etes-vous sur ?</label>
			<br>
			<button type="button" name="confirm_buy_st_25" id="confirm_buy_st_25" class="button_o" onclick="confirm_buy_st_25()" style="display: none">oui</button>
			<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_st_25" id="unfirm_buy_st_25" class="button_n" style="display: none">non</button></a>
			<form method="post" class="update">
				<input type="submit" name="formsend_confirm_buy_st_25" id="formsend_confirm_buy_st_25" class="button" style="display:none"><br>
			</form>
	    </div>

        <div id='recompense'>
		    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#557de9"><path d="M86,6.88c-43.69832,0 -79.12,35.42168 -79.12,79.12c0,43.69832 35.42168,79.12 79.12,79.12c43.69832,0 79.12,-35.42168 79.12,-79.12c0,-43.69832 -35.42168,-79.12 -79.12,-79.12zM111.4904,116.96h-9.26736l-16.22304,-24.41712h-0.688l-16.51888,24.41712h-8.7548l21.19728,-31.15264l-20.93928,-30.76736h9.31208l16.3056,24.6304h0.688l16.5636,-24.6304h8.79608l-21.45528,31.11136z"></path></g></g></svg>
   			<br>
			<label for="Steam_50">50€ de carte Steam</label>
			<br>
			<input type="submit" name='acheter_st_50' id="acheter_st_50" class='btn-ok' value='Obtenir' onclick="confirm_acheter_st_50()">
			<br>
			<label for="ConfirmBuy" id="confirm_buy_question_st_50" style="display: none">Etes-vous sur ?</label>
			<br>
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
body{
	margin:0px;
	background-image: url("../img/rosie-yang-Zq4XzAkLjOE-unsplash.jpg");
	background-color: #ffff; /* Used if the image is unavailable */
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
	border:5px solid #557de9;
	width:255px;
	height: 255px;
	overflow:hidden;
	border-radius: 4px;
	text-align:center;
	font-family:'sporo';
	font-size: 30px;

}
svg{
	margin-bottom:10px;
}
form{
	display:inline-block;
}
.btn-ok{
	width: 100px;
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
	margin-left:auto;
	margin-right:auto;
	margin-top:20px;
}
.btn-ok:hover{
    background-color:#719CE1;
}
.button_n{
	color: white;
	text-align: center;
	width:70px;
	padding:10px;
	margin:5px;
	font-family:'sporo';
	background-color:rgb(255, 51, 51);
	display:inline-block;
	cursor:pointer;
	border-radius:5px;
	font-size: 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
.button_o{
	color: white;
	text-align: center;
	width:70px;
	padding:10px;
	margin:5px;
	font-family:'sporo';
	background-color:rgb(51, 255, 95);
	display:inline-block;
	cursor:pointer;
	border-radius:5px;
	font-size: 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
</style>
