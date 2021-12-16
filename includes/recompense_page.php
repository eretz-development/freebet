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

	<?php include 'recompense.php'; ?>
        <div id='recompense'>
			<br>
			<label for="Amazon_25">25€ sur Amazon</label>
			<br>
			<img src="https://img.icons8.com/fluent/48/000000/gift-card.png"/>
			<br>
			<label for="Amazon_25">-62 500 points</label>
			<br>
			<?php
				if (isset($_SESSION['email'])) {
			?>
				<input type="submit" name='acheter_am_25' class='btn-ok' value='Obtenir' onclick="acheter_am_25()">
			<?php
				}
			?>
		</div>
		<div class="popup">
			<span class="popuptext" id="myPopup1">
				<p id="leaveButton" onclick="acheter_am_25()"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ababab"><path d="M44.03365,26.46154c-1.91226,0 -3.64363,0.7494 -4.96154,2.06731l-10.54327,10.54327c-2.63581,2.63582 -2.63581,7.23558 0,10.54327l36.38462,36.38462l-36.38462,36.38462c-2.63581,3.30769 -2.63581,7.90746 0,10.54327l10.54327,10.54327c3.30769,2.63582 7.90746,2.63582 10.54327,0l36.38462,-36.38462l36.38462,36.38462c3.30769,2.63582 7.90746,2.63582 10.54327,0l10.54327,-10.54327c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-36.38462,-36.38462l36.38462,-36.38462c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-10.54327,-10.54327c-3.30769,-2.63581 -7.90745,-2.63581 -10.54327,0l-36.38462,36.38462l-36.38462,-36.38462c-1.65385,-1.31791 -3.66947,-2.06731 -5.58173,-2.06731z"></path></g></g></svg></p>
				<h2>Chèques-cadeaux Amazon.fr<br/>25€</h2>
				<p>Obtennez un Chèque-cadeau Amazon.fr d'un montant de 25 euros.</p>
				<img _ngcontent-c0="" class="gcs-giftcard__overview_image" id="gcs-giftcard_amazon" src="/freebet/img/amazon_dkblue_noto_email_v2016_us-main._CB468775337_.png" alt="Boutique Chèques-cadeaux Amazon.fr" title="Boutique Chèques-cadeaux Amazon.fr">
				<p style="text-align:left;width:fit-content;margin-right:auto;margin-left:auto">Voici comment échanger des points contre un chèque-cadeau :<br>
				1. Cliquez sur « Valider ».<br>
				2. Puis confirmez votre choix par « Oui ».<br>
				3. Le montant de points ci-dessus sera preleve de votre compte freebet.<br>
				4. Vous revevrez un mail avec votre cheque cadeau et les instructions pour l'utiliser.<br>
				(Si au bout de 5 minutes vous n'avez recu aucun mail, verifiez vos spams)</p>
				<p style="font-size:12px;">Vous trouverez de plus amples informations sur les conditions générales de vente et le droit de rétractation.<p>
				<input type="submit" name='acheter_am_25' id="acheter_am_25" class='btn-ok' value='Valider' onclick="confirm_acheter_am_25()">
				<label for="ConfirmBuy" id="confirm_buy_question_am_25" style="display: none">Etes-vous sur ?</label>
				<button type="button" name="confirm_buy_am_25" id="confirm_buy_am_25" class="button_o" onclick="confirm_buy_am_25()" style="display: none">Oui</button>
				<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_am_25" id="unfirm_buy_am_25" class="button_n" style="display: none">Non</button></a>
				<form method="get" class="update">
					<input type="submit" name="formsend_confirm_buy_am_25" id="formsend_confirm_buy_am_25" class="button" style="display:none">
				</form>
			</span>
		</div>

        <div id='recompense'>
			<br>
			<label for="Amazon_50">50€ sur Amazon</label>
			<br>
			<img src="https://img.icons8.com/fluent/48/000000/gift-card.png"/>
			<br>
			<label for="Amazon_50">-125 000 points</label>
			<br>
			<?php
				if (isset($_SESSION['email'])) {
			?>
				<input type="submit" name='acheter_am_50' class='btn-ok' value='Obtenir' onclick="acheter_am_50()">
			<?php
				}
			?>
		</div>
		<div class="popup">
			<span class="popuptext" id="myPopup2">
				<p id="leaveButton" onclick="acheter_am_50()"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ababab"><path d="M44.03365,26.46154c-1.91226,0 -3.64363,0.7494 -4.96154,2.06731l-10.54327,10.54327c-2.63581,2.63582 -2.63581,7.23558 0,10.54327l36.38462,36.38462l-36.38462,36.38462c-2.63581,3.30769 -2.63581,7.90746 0,10.54327l10.54327,10.54327c3.30769,2.63582 7.90746,2.63582 10.54327,0l36.38462,-36.38462l36.38462,36.38462c3.30769,2.63582 7.90746,2.63582 10.54327,0l10.54327,-10.54327c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-36.38462,-36.38462l36.38462,-36.38462c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-10.54327,-10.54327c-3.30769,-2.63581 -7.90745,-2.63581 -10.54327,0l-36.38462,36.38462l-36.38462,-36.38462c-1.65385,-1.31791 -3.66947,-2.06731 -5.58173,-2.06731z"></path></g></g></svg></p>
				<h2>Chèques-cadeaux Amazon.fr<br/>50€</h2>
				<p>Obtennez un Chèque-cadeau Amazon.fr d'un montant de 50 euros.</p>
				<img _ngcontent-c0="" class="gcs-giftcard__overview_image" id="gcs-giftcard_amazon" src="/freebet/img/amazon_dkblue_noto_email_v2016_us-main._CB468775337_.png" alt="Boutique Chèques-cadeaux Amazon.fr" title="Boutique Chèques-cadeaux Amazon.fr">
				<p style="text-align:left;width:fit-content;margin-right:auto;margin-left:auto">Voici comment échanger des points contre un chèque-cadeau :<br>
				1. Cliquez sur « Valider ».<br>
				2. Puis confirmez votre choix par « Oui ».<br>
				3. Le montant de points ci-dessus sera preleve de votre compte freebet.<br>
				4. Vous revevrez un mail avec votre cheque cadeau et les instructions pour l'utiliser.<br>
				(Si au bout de 5 minutes vous n'avez recu aucun mail, verifiez vos spams)</p>
				<p style="font-size:12px;">Vous trouverez de plus amples informations sur les conditions générales de vente et le droit de rétractation.<p>
				<input type="submit" name='acheter_am_50' id="acheter_am_50" class='btn-ok' value='Valider' onclick="confirm_acheter_am_50()">
				<label for="ConfirmBuy" id="confirm_buy_question_am_50" style="display: none">Etes-vous sur ?</label>
				<button type="button" name="confirm_buy_am_50" id="confirm_buy_am_50" class="button_o" onclick="confirm_buy_am_50()" style="display: none">Oui</button>
				<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_am_50" id="unfirm_buy_am_50" class="button_n" style="display: none">Non</button></a>
				<form method="get" class="update">
					<input type="submit" name="formsend_confirm_buy_am_50" id="formsend_confirm_buy_am_50" class="button" style="display:none">
				</form>
			</span>
		</div>

        <div id='recompense'>
			<br>
			<label for="Amazon_150">150€ sur Amazon</label>
			<br>
			<img src="https://img.icons8.com/fluent/48/000000/gift-card.png"/>
			<br>
			<label for="Amazon_150">-375 000 points</label>
			<br>
			<?php
				if (isset($_SESSION['email'])) {
			?>
				<input type="submit" name='acheter_am_150' class='btn-ok' value='Obtenir' onclick="acheter_am_150()">
			<?php
				}
			?>
		</div>
		<div class="popup">
			<span class="popuptext" id="myPopup3">
				<p id="leaveButton" onclick="acheter_am_150()"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ababab"><path d="M44.03365,26.46154c-1.91226,0 -3.64363,0.7494 -4.96154,2.06731l-10.54327,10.54327c-2.63581,2.63582 -2.63581,7.23558 0,10.54327l36.38462,36.38462l-36.38462,36.38462c-2.63581,3.30769 -2.63581,7.90746 0,10.54327l10.54327,10.54327c3.30769,2.63582 7.90746,2.63582 10.54327,0l36.38462,-36.38462l36.38462,36.38462c3.30769,2.63582 7.90746,2.63582 10.54327,0l10.54327,-10.54327c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-36.38462,-36.38462l36.38462,-36.38462c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-10.54327,-10.54327c-3.30769,-2.63581 -7.90745,-2.63581 -10.54327,0l-36.38462,36.38462l-36.38462,-36.38462c-1.65385,-1.31791 -3.66947,-2.06731 -5.58173,-2.06731z"></path></g></g></svg></p>
				<h2>Chèques-cadeaux Amazon.fr<br/>150€</h2>
				<p>Obtennez un Chèque-cadeau Amazon.fr d'un montant de 150 euros.</p>
				<img _ngcontent-c0="" class="gcs-giftcard__overview_image" id="gcs-giftcard_amazon" src="/freebet/img/amazon_dkblue_noto_email_v2016_us-main._CB468775337_.png" alt="Boutique Chèques-cadeaux Amazon.fr" title="Boutique Chèques-cadeaux Amazon.fr">
				<p style="text-align:left;width:fit-content;margin-right:auto;margin-left:auto">Voici comment échanger des points contre un chèque-cadeau :<br>
				1. Cliquez sur « Valider ».<br>
				2. Puis confirmez votre choix par « Oui ».<br>
				3. Le montant de points ci-dessus sera preleve de votre compte freebet.<br>
				4. Vous revevrez un mail avec votre cheque cadeau et les instructions pour l'utiliser.<br>
				(Si au bout de 5 minutes vous n'avez recu aucun mail, verifiez vos spams)</p>
				<p style="font-size:12px;">Vous trouverez de plus amples informations sur les conditions générales de vente et le droit de rétractation.<p>
				<input type="submit" name='acheter_am_150' id="acheter_am_150" class='btn-ok' value='Valider' onclick="confirm_acheter_am_150()">
				<label for="ConfirmBuy" id="confirm_buy_question_am_150" style="display: none">Etes-vous sur ?</label>
				<button type="button" name="confirm_buy_am_150" id="confirm_buy_am_150" class="button_o" onclick="confirm_buy_am_150()" style="display: none">Oui</button>
				<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_am_150" id="unfirm_buy_am_150" class="button_n" style="display: none">Non</button></a>
				<form method="get" class="update">
					<input type="submit" name="formsend_confirm_buy_am_150" id="formsend_confirm_buy_am_150" class="button" style="display:none"><br>
				</form>
			</span>
		</div>

        <div id='recompense'>
			<br>
			<label for="Amazon_200">200€ sur Amazon</label>
			<br>
			<img src="https://img.icons8.com/fluent/48/000000/gift-card.png"/>
			<br>
			<label for="Amazon_200">-500 000 points</label>
			<br>
			<?php
				if (isset($_SESSION['email'])) {
			?>
				<input type="submit" name='acheter_am_200' class='btn-ok' value='Obtenir' onclick="acheter_am_200()">
			<?php
				}
			?>
		</div>
		<div class="popup">
			<span class="popuptext" id="myPopup4">
				<p id="leaveButton" onclick="acheter_am_200()"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ababab"><path d="M44.03365,26.46154c-1.91226,0 -3.64363,0.7494 -4.96154,2.06731l-10.54327,10.54327c-2.63581,2.63582 -2.63581,7.23558 0,10.54327l36.38462,36.38462l-36.38462,36.38462c-2.63581,3.30769 -2.63581,7.90746 0,10.54327l10.54327,10.54327c3.30769,2.63582 7.90746,2.63582 10.54327,0l36.38462,-36.38462l36.38462,36.38462c3.30769,2.63582 7.90746,2.63582 10.54327,0l10.54327,-10.54327c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-36.38462,-36.38462l36.38462,-36.38462c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-10.54327,-10.54327c-3.30769,-2.63581 -7.90745,-2.63581 -10.54327,0l-36.38462,36.38462l-36.38462,-36.38462c-1.65385,-1.31791 -3.66947,-2.06731 -5.58173,-2.06731z"></path></g></g></svg></p>
				<h2>Chèques-cadeaux Amazon.fr<br/>200€</h2>
				<p>Obtennez un Chèque-cadeau Amazon.fr d'un montant de 200 euros.</p>
				<img _ngcontent-c0="" class="gcs-giftcard__overview_image" id="gcs-giftcard_amazon" src="/freebet/img/amazon_dkblue_noto_email_v2016_us-main._CB468775337_.png" alt="Boutique Chèques-cadeaux Amazon.fr" title="Boutique Chèques-cadeaux Amazon.fr">
				<p style="text-align:left;width:fit-content;margin-right:auto;margin-left:auto">Voici comment échanger des points contre un chèque-cadeau :<br>
				1. Cliquez sur « Valider ».<br>
				2. Puis confirmez votre choix par « Oui ».<br>
				3. Le montant de points ci-dessus sera preleve de votre compte freebet.<br>
				4. Vous revevrez un mail avec votre cheque cadeau et les instructions pour l'utiliser.<br>
				(Si au bout de 5 minutes vous n'avez recu aucun mail, verifiez vos spams)</p>
				<p style="font-size:12px;">Vous trouverez de plus amples informations sur les conditions générales de vente et le droit de rétractation.<p>
				<input type="submit" name='acheter_am_200' id="acheter_am_200" class='btn-ok' value='Valider' onclick="confirm_acheter_am_200()">
				<label for="ConfirmBuy" id="confirm_buy_question_am_200" style="display: none">Etes-vous sur ?</label>
				<button type="button" name="confirm_buy_am_200" id="confirm_buy_am_200" class="button_o" onclick="confirm_buy_am_200()" style="display: none">Oui</button>
				<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_am_200" id="unfirm_buy_am_200" class="button_n" style="display: none">Non</button></a>
				<form method="get" class="update">
					<input type="submit" name="formsend_confirm_buy_am_200" id="formsend_confirm_buy_am_200" class="button" style="display:none"><br>
				</form>
			</span>
		</div>

        <div id='recompense'>
			<br>
			<label for="Airpods">AirPods Pro</label>
			<br>
			<img src="https://img.icons8.com/ios-filled/70/000000/earbud-headphones-airpods-pro.png"/>
   			<br>
			<label for="Airpods">-700 000 points</label>
			<br>
			<?php
				if (isset($_SESSION['email'])) {
			?>
				<input type="submit" name='acheter_airpods' class='btn-ok' value='Obtenir' onclick="acheter_airpods()">
			<?php
				}
			?>
		</div>
		<div class="popup">
			<span class="popuptext" id="myPopup5">
				<p id="leaveButton" onclick="acheter_airpods()"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ababab"><path d="M44.03365,26.46154c-1.91226,0 -3.64363,0.7494 -4.96154,2.06731l-10.54327,10.54327c-2.63581,2.63582 -2.63581,7.23558 0,10.54327l36.38462,36.38462l-36.38462,36.38462c-2.63581,3.30769 -2.63581,7.90746 0,10.54327l10.54327,10.54327c3.30769,2.63582 7.90746,2.63582 10.54327,0l36.38462,-36.38462l36.38462,36.38462c3.30769,2.63582 7.90746,2.63582 10.54327,0l10.54327,-10.54327c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-36.38462,-36.38462l36.38462,-36.38462c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-10.54327,-10.54327c-3.30769,-2.63581 -7.90745,-2.63581 -10.54327,0l-36.38462,36.38462l-36.38462,-36.38462c-1.65385,-1.31791 -3.66947,-2.06731 -5.58173,-2.06731z"></path></g></g></svg></p>
				<h2>AirPods Pro</h2>
				<p>Gagnez des écouteurs sans fils Apple AirPods Pro.</p>
				<h2>A venir</h2>
				<!-- <img _ngcontent-c0="" class="gcs-giftcard__overview_image" id="gcs-giftcard_amazon" src="/freebet/img/amazon_dkblue_noto_email_v2016_us-main._CB468775337_.png" alt="Boutique Chèques-cadeaux Amazon.fr" title="Boutique Chèques-cadeaux Amazon.fr">
				<p style="text-align:left;width:fit-content;margin-right:auto;margin-left:auto">Voici comment échanger des points contre 1 paire de AirPods Pro :<br>
				1. Cliquez sur « Valider ».<br>
				2. Puis confirmez votre choix par « Oui ».<br>
				3. Le montant de points ci-dessus sera preleve de votre compte freebet.<br>
				4. Vous revevrez un mail avec un formulaire de coordonees a remplir.<br>
				(Si au bout de 5 minutes vous n'avez recu aucun mail, verifiez vos spams)</p>
				<p style="font-size:12px;">Vous trouverez de plus amples informations sur les conditions générales de vente et le droit de rétractation.<p>
				<input type="submit" name='acheter_airpods' id="acheter_airpods" class='btn-ok' value='Valider' onclick="confirm_acheter_airpods()">
				<label for="ConfirmBuy" id="confirm_buy_question_airpods" style="display: none">Etes-vous sur ?</label>
				<button type="button" name="confirm_buy_airpods" id="confirm_buy_airpods" class="button_o" onclick="confirm_buy_airpods()" style="display: none">oui</button>
				<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_airpods" id="unfirm_buy_airpods" class="button_n" style="display: none">non</button></a>
				<form method="get" class="update">
					<input type="submit" name="formsend_confirm_buy_airpods" id="formsend_confirm_buy_airpods" class="button" style="display:none">
				</form> -->
			</span>
		</div>

		<div id='recompense'>
			<br>
			<label for="Ps5">PlayStation 5</label>
			<br>
			<img src="https://img.icons8.com/metro/70/000000/play-station.png"/>
			<br>
			<label for="Ps5">-1 000 000 points</label>
			<br>
			<?php
				if (isset($_SESSION['email'])) {
			?>
				<input type="submit" name='acheter_ps5' class='btn-ok' value='Obtenir' onclick="acheter_ps5()">
			<?php
				}
			?>
		</div>
		<div class="popup">
			<span class="popuptext" id="myPopup6">
				<p id="leaveButton" onclick="acheter_ps5()"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ababab"><path d="M44.03365,26.46154c-1.91226,0 -3.64363,0.7494 -4.96154,2.06731l-10.54327,10.54327c-2.63581,2.63582 -2.63581,7.23558 0,10.54327l36.38462,36.38462l-36.38462,36.38462c-2.63581,3.30769 -2.63581,7.90746 0,10.54327l10.54327,10.54327c3.30769,2.63582 7.90746,2.63582 10.54327,0l36.38462,-36.38462l36.38462,36.38462c3.30769,2.63582 7.90746,2.63582 10.54327,0l10.54327,-10.54327c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-36.38462,-36.38462l36.38462,-36.38462c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-10.54327,-10.54327c-3.30769,-2.63581 -7.90745,-2.63581 -10.54327,0l-36.38462,36.38462l-36.38462,-36.38462c-1.65385,-1.31791 -3.66947,-2.06731 -5.58173,-2.06731z"></path></g></g></svg></p>
				<h2>PlaySation 5</h2>
				<p>Gagnez une console PlaySation 5.</p>
				<h2>A venir</h2>
				<!-- <img _ngcontent-c0="" class="gcs-giftcard__overview_image" id="gcs-giftcard_amazon" src="/freebet/img/amazon_dkblue_noto_email_v2016_us-main._CB468775337_.png" alt="Boutique Chèques-cadeaux Amazon.fr" title="Boutique Chèques-cadeaux Amazon.fr">
				<p style="text-align:left;width:fit-content;margin-right:auto;margin-left:auto">Voici comment échanger des points contre 1 paire de AirPods Pro :<br>
				1. Cliquez sur « Valider ».<br>
				2. Puis confirmez votre choix par « Oui ».<br>
				3. Le montant de points ci-dessus sera preleve de votre compte freebet.<br>
				4. Vous revevrez un mail avec un formulaire de coordonees a remplir.<br>
				(Si au bout de 5 minutes vous n'avez recu aucun mail, verifiez vos spams)</p>
				<p style="font-size:12px;">Vous trouverez de plus amples informations sur les conditions générales de vente et le droit de rétractation.<p>
				<input type="submit" name='acheter_airpods' id="acheter_airpods" class='btn-ok' value='Valider' onclick="confirm_acheter_airpods()">
				<label for="ConfirmBuy" id="confirm_buy_question_airpods" style="display: none">Etes-vous sur ?</label>
				<button type="button" name="confirm_buy_airpods" id="confirm_buy_airpods" class="button_o" onclick="confirm_buy_airpods()" style="display: none">oui</button>
				<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_airpods" id="unfirm_buy_airpods" class="button_n" style="display: none">non</button></a>
				<form method="get" class="update">
					<input type="submit" name="formsend_confirm_buy_airpods" id="formsend_confirm_buy_airpods" class="button" style="display:none">
				</form> -->
			</span>
		</div>

		<div id='recompense'>
			<br>
			<label for="Iphone11">Iphone 11</label>
			<br>
			<img src="https://img.icons8.com/carbon-copy/70/000000/iphone-x.png"/>
			<br>
			<label for="Iphone11">-2 000 000 points</label>
			<br>
			<?php
				if (isset($_SESSION['email'])) {
			?>
				<input type="submit" name='acheter_iphone11' class='btn-ok' value='Obtenir' onclick="acheter_iphone11()">
			<?php
				}
			?>
		</div>
		<div class="popup">
			<span class="popuptext" id="myPopup7">
				<p id="leaveButton" onclick="acheter_iphone11()"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ababab"><path d="M44.03365,26.46154c-1.91226,0 -3.64363,0.7494 -4.96154,2.06731l-10.54327,10.54327c-2.63581,2.63582 -2.63581,7.23558 0,10.54327l36.38462,36.38462l-36.38462,36.38462c-2.63581,3.30769 -2.63581,7.90746 0,10.54327l10.54327,10.54327c3.30769,2.63582 7.90746,2.63582 10.54327,0l36.38462,-36.38462l36.38462,36.38462c3.30769,2.63582 7.90746,2.63582 10.54327,0l10.54327,-10.54327c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-36.38462,-36.38462l36.38462,-36.38462c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-10.54327,-10.54327c-3.30769,-2.63581 -7.90745,-2.63581 -10.54327,0l-36.38462,36.38462l-36.38462,-36.38462c-1.65385,-1.31791 -3.66947,-2.06731 -5.58173,-2.06731z"></path></g></g></svg></p>
				<h2>Iphone 11</h2>
				<p>Gagnez un smartphone Apple Iphone 11.</p>
				<h2>A venir</h2>
				<!-- <img _ngcontent-c0="" class="gcs-giftcard__overview_image" id="gcs-giftcard_amazon" src="/freebet/img/amazon_dkblue_noto_email_v2016_us-main._CB468775337_.png" alt="Boutique Chèques-cadeaux Amazon.fr" title="Boutique Chèques-cadeaux Amazon.fr">
				<p style="text-align:left;width:fit-content;margin-right:auto;margin-left:auto">Voici comment échanger des points contre 1 paire de AirPods Pro :<br>
				1. Cliquez sur « Valider ».<br>
				2. Puis confirmez votre choix par « Oui ».<br>
				3. Le montant de points ci-dessus sera preleve de votre compte freebet.<br>
				4. Vous revevrez un mail avec un formulaire de coordonees a remplir.<br>
				(Si au bout de 5 minutes vous n'avez recu aucun mail, verifiez vos spams)</p>
				<p style="font-size:12px;">Vous trouverez de plus amples informations sur les conditions générales de vente et le droit de rétractation.<p>
				<input type="submit" name='acheter_airpods' id="acheter_airpods" class='btn-ok' value='Valider' onclick="confirm_acheter_airpods()">
				<label for="ConfirmBuy" id="confirm_buy_question_airpods" style="display: none">Etes-vous sur ?</label>
				<button type="button" name="confirm_buy_airpods" id="confirm_buy_airpods" class="button_o" onclick="confirm_buy_airpods()" style="display: none">oui</button>
				<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_airpods" id="unfirm_buy_airpods" class="button_n" style="display: none">non</button></a>
				<form method="get" class="update">
					<input type="submit" name="formsend_confirm_buy_airpods" id="formsend_confirm_buy_airpods" class="button" style="display:none">
				</form> -->
			</span>
		</div>

		<div id='recompense'>
			<br>
			<label for="Macbook">Macbook</label>
			<br>
			<img src="https://img.icons8.com/ios/70/000000/macbook.png"/>
			<br>
			<label for="Macbook">-3 000 000 points</label>
			<br>
			<?php
				if (isset($_SESSION['email'])) {
			?>
				<input type="submit" name='acheter_macbook' class='btn-ok' value='Obtenir' onclick="acheter_macbook()">
			<?php
				}
			?>
		</div>
		<div class="popup">
			<span class="popuptext" id="myPopup8">
				<p id="leaveButton" onclick="acheter_macbook()"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ababab"><path d="M44.03365,26.46154c-1.91226,0 -3.64363,0.7494 -4.96154,2.06731l-10.54327,10.54327c-2.63581,2.63582 -2.63581,7.23558 0,10.54327l36.38462,36.38462l-36.38462,36.38462c-2.63581,3.30769 -2.63581,7.90746 0,10.54327l10.54327,10.54327c3.30769,2.63582 7.90746,2.63582 10.54327,0l36.38462,-36.38462l36.38462,36.38462c3.30769,2.63582 7.90746,2.63582 10.54327,0l10.54327,-10.54327c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-36.38462,-36.38462l36.38462,-36.38462c2.63582,-3.30769 2.63582,-7.90745 0,-10.54327l-10.54327,-10.54327c-3.30769,-2.63581 -7.90745,-2.63581 -10.54327,0l-36.38462,36.38462l-36.38462,-36.38462c-1.65385,-1.31791 -3.66947,-2.06731 -5.58173,-2.06731z"></path></g></g></svg></p>
				<h2>Macbook</h2>
				<p>Gagnez un ordinateur portable Apple Macbook.</p>
				<h2>A venir</h2>
				<!-- <img _ngcontent-c0="" class="gcs-giftcard__overview_image" id="gcs-giftcard_amazon" src="/freebet/img/amazon_dkblue_noto_email_v2016_us-main._CB468775337_.png" alt="Boutique Chèques-cadeaux Amazon.fr" title="Boutique Chèques-cadeaux Amazon.fr">
				<p style="text-align:left;width:fit-content;margin-right:auto;margin-left:auto">Voici comment échanger des points contre 1 paire de AirPods Pro :<br>
				1. Cliquez sur « Valider ».<br>
				2. Puis confirmez votre choix par « Oui ».<br>
				3. Le montant de points ci-dessus sera preleve de votre compte freebet.<br>
				4. Vous revevrez un mail avec un formulaire de coordonees a remplir.<br>
				(Si au bout de 5 minutes vous n'avez recu aucun mail, verifiez vos spams)</p>
				<p style="font-size:12px;">Vous trouverez de plus amples informations sur les conditions générales de vente et le droit de rétractation.<p>
				<input type="submit" name='acheter_airpods' id="acheter_airpods" class='btn-ok' value='Valider' onclick="confirm_acheter_airpods()">
				<label for="ConfirmBuy" id="confirm_buy_question_airpods" style="display: none">Etes-vous sur ?</label>
				<button type="button" name="confirm_buy_airpods" id="confirm_buy_airpods" class="button_o" onclick="confirm_buy_airpods()" style="display: none">oui</button>
				<a href="/freebet/includes/recompense_page.php"><button type="button" name="unfirm_buy_airpods" id="unfirm_buy_airpods" class="button_n" style="display: none">non</button></a>
				<form method="get" class="update">
					<input type="submit" name="formsend_confirm_buy_airpods" id="formsend_confirm_buy_airpods" class="button" style="display:none">
				</form> -->
			</span>
		</div>
	</div>

	<footer>
		<?php require_once 'footer.php'; ?><!--ethan-->
	</footer>

  <script type="text/javascript">
	function acheter_am_25(){
		var popup = document.getElementById("myPopup1");
		popup.classList.toggle("show");
	}
    function confirm_acheter_am_25(){
		document.getElementById('acheter_am_25').style.display = "none";
		document.getElementById('confirm_buy_question_am_25').style.display = "block";
		document.getElementById('confirm_buy_am_25').style.display = "inline-block";
		document.getElementById('unfirm_buy_am_25').style.display = "inline-block";
    }
    function confirm_buy_am_25(){
      document.getElementById('formsend_confirm_buy_am_25').click();
    }

	function acheter_am_50(){
		var popup = document.getElementById("myPopup2");
		popup.classList.toggle("show");
	}
    function confirm_acheter_am_50(){
      document.getElementById('acheter_am_50').style.display = "none";
			document.getElementById('confirm_buy_question_am_50').style.display = "block";
			document.getElementById('confirm_buy_am_50').style.display = "inline-block";
			document.getElementById('unfirm_buy_am_50').style.display = "inline-block";
    }
    function confirm_buy_am_50(){
      document.getElementById('formsend_confirm_buy_am_50').click();
    }

	function acheter_am_150(){
		var popup = document.getElementById("myPopup3");
		popup.classList.toggle("show");
	}
    function confirm_acheter_am_150(){
      document.getElementById('acheter_am_150').style.display = "none";
			document.getElementById('confirm_buy_question_am_150').style.display = "block";
			document.getElementById('confirm_buy_am_150').style.display = "inline-block";
			document.getElementById('unfirm_buy_am_150').style.display = "inline-block";
    }
    function confirm_buy_am_150(){
      document.getElementById('formsend_confirm_buy_am_150').click();
    }

	function acheter_am_200(){
		var popup = document.getElementById("myPopup4");
		popup.classList.toggle("show");
	}
    function confirm_acheter_am_200(){
      document.getElementById('acheter_am_200').style.display = "none";
			document.getElementById('confirm_buy_question_am_200').style.display = "block";
			document.getElementById('confirm_buy_am_200').style.display = "inline-block";
			document.getElementById('unfirm_buy_am_200').style.display = "inline-block";
    }
    function confirm_buy_am_200(){
      document.getElementById('formsend_confirm_buy_am_200').click();
    }

	function acheter_airpods(){
		var popup = document.getElementById("myPopup5");
		popup.classList.toggle("show");
	}
    function confirm_acheter_airpods(){
      document.getElementById('acheter_airpods').style.display = "none";
			document.getElementById('confirm_buy_question_airpods').style.display = "block";
			document.getElementById('confirm_buy_airpods').style.display = "inline-block";
			document.getElementById('unfirm_buy_airpods').style.display = "inline-block";
    }
    function confirm_buy_airpods(){
      document.getElementById('formsend_confirm_buy_airpods').click();
    }

	function acheter_ps5(){
		var popup = document.getElementById("myPopup6");
		popup.classList.toggle("show");
	}
    function confirm_acheter_ps5(){
      document.getElementById('acheter_ps5').style.display = "none";
			document.getElementById('confirm_buy_question_ps5').style.display = "block";
			document.getElementById('confirm_buy_ps5').style.display = "inline-block";
			document.getElementById('unfirm_buy_ps5').style.display = "inline-block";
    }
    function confirm_buy_ps5(){
      document.getElementById('formsend_confirm_buy_ps5').click();
    }

	function acheter_iphone11(){
		var popup = document.getElementById("myPopup7");
		popup.classList.toggle("show");
	}
    function confirm_acheter_iphone11(){
      document.getElementById('acheter_iphone11').style.display = "none";
			document.getElementById('confirm_buy_question_iphone11').style.display = "block";
			document.getElementById('confirm_buy_iphone11').style.display = "inline-block";
			document.getElementById('unfirm_buy_iphone11').style.display = "inline-block";
    }
    function confirm_buy_iphone11(){
      document.getElementById('formsend_confirm_buy_iphone11').click();
    }

	function acheter_macbook(){
		var popup = document.getElementById("myPopup8");
		popup.classList.toggle("show");
	}
    function confirm_acheter_macbook(){
      document.getElementById('acheter_macbook').style.display = "none";
			document.getElementById('confirm_buy_question_macbook').style.display = "block";
			document.getElementById('confirm_buy_macbook').style.display = "inline-block";
			document.getElementById('unfirm_buy_macbook').style.display = "inline-block";
    }
    function confirm_buy_macbook(){
      document.getElementById('formsend_confirm_buy_macbook').click();
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
	background-image: url("../img/fauzan-saari-AmhdN68wjPc-unsplash.jpg"); /* The image used */
	background-color: black; /* Used if the image is unavailable */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
	background-attachment: fixed;
	text-align:center;
}
.mise_error{
	font-family:'sporo';
	font-size: 25px;
	color:white;
	margin-top:150px;
	background-color:black;
	padding:30px;
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
	background-color:white;
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

/* Popup container - can be anything you want */
.popup {
  position: absolute;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  width:fit-content;
  margin-left:22%;
  margin-right:auto;
  }

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 50vw;
  height: 80vh;
  background-color: rgba(85,85,85,0.9);
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 0px;
  position: absolute;
  z-index: 1;
  margin:0;
  font-family:'sporo';
  /* overflow-y:scroll; */
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
.gcs-giftcard__overview_image{
	width:190px;
	height:120px;
}
/* Toggle this class - hide and show the popup */
.popup .show {
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
#leaveButton{
	position:absolute;
	right:0;
	top:0;
	margin:10px;
}
#leaveButton:hover{
	cursor:pointer;
}
</style>
