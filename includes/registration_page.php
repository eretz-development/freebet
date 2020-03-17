<?php session_start();?>

<!DOCTYPE html>
<html>
	<head>
		<title>Freebet</title>
		<meta charset="utf-8">
	</head>
	<body>
	<div class="head">
			<div class='titre'>
				<a href="/freebet">FREEBET</a>
			</div>
			<?php if (isset($_SESSION['email'])) {?>
			<div class='nav'>
				<ul>
					<li class="dropdown"><a href="#">Les Sports</a>
						<div class="dropdown-content">
							<a href="/freebet/includes/football.php">Football</a>
							<a href="/freebet/includes/basket_ball.php">Basketball</a>
							<a href="/freebet/includes/rugby.php">Rugby</a>
							<a href="/freebet/includes/american_football.php">Hockey</a>
							<a href="/freebet/includes/hockey.php">Football Americain</a>
						</div>
					</li>
					<li><a href="/freebet/includes/recompense_page.php">R<span class="char">%C3%A9c</span>ompenses</a></li>
					<li><a href="/freebet/includes/contact.php">Contacts</a></li>
				</ul>
			</div>
			<div class="user">
			    <ul>
					<li class="dropdown2"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.90688c-43.65602,0 -79.12,35.46398 -79.12,79.12c0,43.65603 35.46397,79.12 79.12,79.12c43.65603,0 79.12,-35.46397 79.12,-79.12c0,-43.65602 -35.46398,-79.12 -79.12,-79.12zM86,13.78688c39.93779,0 72.24,32.3022 72.24,72.24c0,19.72048 -7.89824,37.55807 -20.68031,50.58547c-6.29445,-4.62102 -13.9672,-6.93955 -20.46531,-9.25172c-3.65971,-1.30221 -6.95021,-2.59266 -9.3525,-4.03125c-2.3007,-1.37776 -3.57837,-2.79361 -4.25297,-4.42094c-0.31596,-3.9452 -0.25197,-7.12133 -0.22844,-10.87094c0.41676,-0.41506 0.95142,-0.70667 1.37735,-1.20937c1.00444,-1.18553 2.02714,-2.62612 3.00328,-4.24625c1.67386,-2.77815 2.89186,-6.17617 3.57437,-9.62125c1.04222,-0.53127 2.15558,-0.64624 3.00328,-1.72672c1.56511,-1.99488 2.62165,-4.80225 3.09062,-8.71422c0.41587,-3.45393 -0.69696,-5.8295 -2.12984,-7.65265c1.54149,-5.03898 3.44997,-13.0525 2.80172,-21.34547c-0.35663,-4.56249 -1.50468,-9.15496 -4.2664,-12.97391c-2.63665,-3.64599 -6.91734,-6.2668 -12.3961,-7.21594c-3.47976,-3.95076 -9.00737,-5.81172 -15.61438,-5.81172h-0.03359h-0.02688c-14.80144,0.27174 -24.35153,6.39785 -28.44047,15.74203c-3.8882,8.88544 -3.05232,19.94718 -0.26203,31.4639c-1.49993,1.82328 -2.6749,4.24418 -2.25078,7.79375c0.47074,3.91065 1.52668,6.71918 3.09062,8.71422c0.84708,1.08057 1.96057,1.19515 3.00328,1.72672c0.68241,3.44239 1.90065,6.8358 3.57437,9.61453c0.97614,1.6206 1.99779,3.05975 3.00328,4.24625c0.42603,0.50272 0.96009,0.80079 1.37735,1.2161c0.02236,3.74764 0.08591,6.92253 -0.22844,10.87094c-0.67328,1.62133 -1.94926,3.03793 -4.24625,4.42094c-2.39848,1.44412 -5.68503,2.74173 -9.33906,4.05141c-6.49125,2.32659 -14.15968,4.66176 -20.47203,9.245c-12.7899,-13.02857 -20.69375,-30.87159 -20.69375,-50.59891c0,-39.93779 32.30221,-72.24 72.24,-72.24zM85.73125,34.40672c6.34379,0.00654 10.33515,1.88481 11.4286,3.80281l0.83984,1.4714l1.67297,0.22844c4.32126,0.60044 6.73568,2.27734 8.46563,4.66953c1.72995,2.39219 2.69004,5.73073 2.98312,9.48016c0.58618,7.49885 -1.5604,16.35397 -2.92265,20.45187l-0.86672,2.60016l2.34484,1.42437c-0.23853,-0.14524 1.10247,0.64855 0.79953,3.16453c-0.36694,3.06091 -1.14913,4.61998 -1.67297,5.28765c-0.52383,0.66768 -0.74808,0.5824 -0.69203,0.57781l-2.83531,0.23516l-0.30235,2.82859c-0.25948,2.43024 -1.62635,5.74511 -3.225,8.39844c-0.79933,1.32666 -1.64976,2.50848 -2.365,3.35266c-0.71524,0.84418 -1.47694,1.36705 -1.18922,1.21609l-1.84094,0.96078v2.08281c0,4.55566 -0.1856,8.28108 0.29562,13.58531l0.04031,0.45687l0.16125,0.43c1.35375,3.6431 4.17952,6.21342 7.35703,8.11625c3.1775,1.90283 6.82296,3.27822 10.58203,4.61578c6.19529,2.20442 12.65343,4.3738 17.57625,7.57875c-12.54323,10.50618 -28.69975,16.8439 -46.3661,16.8439c-17.65951,0 -33.81147,-6.3316 -46.35265,-16.83047c4.95077,-3.18656 11.41854,-5.36207 17.60312,-7.57875c3.75659,-1.34643 7.3925,-2.72767 10.56188,-4.63594c3.16938,-1.90827 5.98504,-4.47816 7.33687,-8.10953l0.16125,-0.43l0.04031,-0.45687c0.47728,-5.30014 0.29562,-9.02625 0.29562,-13.58531v-2.08281l-1.84094,-0.9675c0.2881,0.15071 -0.47374,-0.37181 -1.18922,-1.21609c-0.71548,-0.84428 -1.56567,-2.01889 -2.365,-3.34594c-1.59865,-2.65409 -2.96562,-5.9716 -3.225,-8.39844l-0.30235,-2.82859l-2.83531,-0.23516c0.05315,0.00447 -0.16877,0.08972 -0.69203,-0.57781c-0.52328,-0.66751 -1.30436,-2.22543 -1.67297,-5.28765c-0.30069,-2.5165 1.05536,-3.31997 0.79953,-3.16453l2.18359,-1.3236l-0.63828,-2.47922c-2.95996,-11.39227 -3.40757,-21.75796 -0.36281,-28.71594c3.04175,-6.9511 9.13485,-11.36116 22.22562,-11.61z"></path></g></g></svg></a>
						<div class="dropdown-user">
							<?php $q = $db->query("SELECT * FROM user_stack WHERE pseudo ='".$_SESSION['pseudo']."' ");
							while ($user_stack = $q->fetch()) { ?>
								<a href="#"><?php echo $_SESSION['pseudo'];?></a>
								<a href="#"> <?php echo $user_stack['stack'];?> pts</a>
							<?php } ?>
							<br>
							<a href="/freebet/includes/profile_parameter_page.php">Parametres</a>
							<a href="/freebet/includes/bet_page.php">Mes paris</a>
							<a href="/freebet/includes/plus_de_point_page.php">Plus de points</a>
							<br>
							<?php require_once 'includes/deconnexion.php'; ?>
						</div>
					</li>
				</ul>
            </div>
			<?php } else { ?>
			<div class='nav'>
				<ul>
					<li class="dropdown"><a href="#">Les Sports</a>
						<div class="dropdown-content">
							<a href="/freebet/includes/football.php">Football</a>
							<a href="/freebet/includes/basket_ball.php">Basketball</a>
							<a href="/freebet/includes/rugby.php">Rugby</a>
							<a href="/freebet/includes/american_football.php">Hockey</a>
							<a href="/freebet/includes/hockey.php">Football Americain</a>
						</div>
					</li>
					<li><a href="/freebet/includes/recompense_page.php">R<span class="char">%C3%A9c</span>ompenses</a></li>
					<li><a href="/freebet/includes/contact.php">Contacts</a></li>
				</ul>
			</div>
			<div class="user">
			    <ul>
					<li class="dropdown2"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.90688c-43.65602,0 -79.12,35.46398 -79.12,79.12c0,43.65603 35.46397,79.12 79.12,79.12c43.65603,0 79.12,-35.46397 79.12,-79.12c0,-43.65602 -35.46398,-79.12 -79.12,-79.12zM86,13.78688c39.93779,0 72.24,32.3022 72.24,72.24c0,19.72048 -7.89824,37.55807 -20.68031,50.58547c-6.29445,-4.62102 -13.9672,-6.93955 -20.46531,-9.25172c-3.65971,-1.30221 -6.95021,-2.59266 -9.3525,-4.03125c-2.3007,-1.37776 -3.57837,-2.79361 -4.25297,-4.42094c-0.31596,-3.9452 -0.25197,-7.12133 -0.22844,-10.87094c0.41676,-0.41506 0.95142,-0.70667 1.37735,-1.20937c1.00444,-1.18553 2.02714,-2.62612 3.00328,-4.24625c1.67386,-2.77815 2.89186,-6.17617 3.57437,-9.62125c1.04222,-0.53127 2.15558,-0.64624 3.00328,-1.72672c1.56511,-1.99488 2.62165,-4.80225 3.09062,-8.71422c0.41587,-3.45393 -0.69696,-5.8295 -2.12984,-7.65265c1.54149,-5.03898 3.44997,-13.0525 2.80172,-21.34547c-0.35663,-4.56249 -1.50468,-9.15496 -4.2664,-12.97391c-2.63665,-3.64599 -6.91734,-6.2668 -12.3961,-7.21594c-3.47976,-3.95076 -9.00737,-5.81172 -15.61438,-5.81172h-0.03359h-0.02688c-14.80144,0.27174 -24.35153,6.39785 -28.44047,15.74203c-3.8882,8.88544 -3.05232,19.94718 -0.26203,31.4639c-1.49993,1.82328 -2.6749,4.24418 -2.25078,7.79375c0.47074,3.91065 1.52668,6.71918 3.09062,8.71422c0.84708,1.08057 1.96057,1.19515 3.00328,1.72672c0.68241,3.44239 1.90065,6.8358 3.57437,9.61453c0.97614,1.6206 1.99779,3.05975 3.00328,4.24625c0.42603,0.50272 0.96009,0.80079 1.37735,1.2161c0.02236,3.74764 0.08591,6.92253 -0.22844,10.87094c-0.67328,1.62133 -1.94926,3.03793 -4.24625,4.42094c-2.39848,1.44412 -5.68503,2.74173 -9.33906,4.05141c-6.49125,2.32659 -14.15968,4.66176 -20.47203,9.245c-12.7899,-13.02857 -20.69375,-30.87159 -20.69375,-50.59891c0,-39.93779 32.30221,-72.24 72.24,-72.24zM85.73125,34.40672c6.34379,0.00654 10.33515,1.88481 11.4286,3.80281l0.83984,1.4714l1.67297,0.22844c4.32126,0.60044 6.73568,2.27734 8.46563,4.66953c1.72995,2.39219 2.69004,5.73073 2.98312,9.48016c0.58618,7.49885 -1.5604,16.35397 -2.92265,20.45187l-0.86672,2.60016l2.34484,1.42437c-0.23853,-0.14524 1.10247,0.64855 0.79953,3.16453c-0.36694,3.06091 -1.14913,4.61998 -1.67297,5.28765c-0.52383,0.66768 -0.74808,0.5824 -0.69203,0.57781l-2.83531,0.23516l-0.30235,2.82859c-0.25948,2.43024 -1.62635,5.74511 -3.225,8.39844c-0.79933,1.32666 -1.64976,2.50848 -2.365,3.35266c-0.71524,0.84418 -1.47694,1.36705 -1.18922,1.21609l-1.84094,0.96078v2.08281c0,4.55566 -0.1856,8.28108 0.29562,13.58531l0.04031,0.45687l0.16125,0.43c1.35375,3.6431 4.17952,6.21342 7.35703,8.11625c3.1775,1.90283 6.82296,3.27822 10.58203,4.61578c6.19529,2.20442 12.65343,4.3738 17.57625,7.57875c-12.54323,10.50618 -28.69975,16.8439 -46.3661,16.8439c-17.65951,0 -33.81147,-6.3316 -46.35265,-16.83047c4.95077,-3.18656 11.41854,-5.36207 17.60312,-7.57875c3.75659,-1.34643 7.3925,-2.72767 10.56188,-4.63594c3.16938,-1.90827 5.98504,-4.47816 7.33687,-8.10953l0.16125,-0.43l0.04031,-0.45687c0.47728,-5.30014 0.29562,-9.02625 0.29562,-13.58531v-2.08281l-1.84094,-0.9675c0.2881,0.15071 -0.47374,-0.37181 -1.18922,-1.21609c-0.71548,-0.84428 -1.56567,-2.01889 -2.365,-3.34594c-1.59865,-2.65409 -2.96562,-5.9716 -3.225,-8.39844l-0.30235,-2.82859l-2.83531,-0.23516c0.05315,0.00447 -0.16877,0.08972 -0.69203,-0.57781c-0.52328,-0.66751 -1.30436,-2.22543 -1.67297,-5.28765c-0.30069,-2.5165 1.05536,-3.31997 0.79953,-3.16453l2.18359,-1.3236l-0.63828,-2.47922c-2.95996,-11.39227 -3.40757,-21.75796 -0.36281,-28.71594c3.04175,-6.9511 9.13485,-11.36116 22.22562,-11.61z"></path></g></g></svg></a>
						<div class="dropdown-user">
							<a href="/freebet/includes/login_page.php">Connexion</a>
							<a href="/freebet/includes/registration_page.php">Inscription</a>
						</div>
					</li>
				</ul>
            </div>
			<?php } ?>
		</div>
		<!-- register -->
		<br>
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
					<p>J'accepte toutes les <a href="#">Conditions G<span class="char">%C3%A9n</span>n<span class="char">%C3%A9</span>rales</a></p>
				</div>
				<br>
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

@font-face{
  font-family:'Exo2-Regular';
  src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}
body{
	margin:0px;
	padding:0px;
	width:100%;
	height:100%;
	background-color:black;
}
li{
	list-style-type: none;
}
.head {
	background: transparent;
	display: flex;
	justify-content: space-between;
	width: 100%;
	height:80px;
	position: sticky;
	top: 0;
	padding-top:10px;
	padding-bottom:10px;
	backdrop-filter: blur(10px);
	z-index: 2;
}
.head a{
	text-decoration:none;
}
.titre{
	margin-right:auto;
	margin-left: auto;
	height:fit-content;
	margin-top: auto;
	margin-bottom: auto;
}
.titre a{
	font-family: Exo2-Regular;
	font-size: 50px;
	color:#ffffff;
	transition: all 0.2s;
}
.titre a:hover{
	color: #d6d6d6;
}

.nav{
	margin-right:auto;
	margin-left: auto;
	height:fit-content;
	margin-top: auto;
	margin-bottom: auto;
}
.nav ul a {
	font-family: Exo2-Regular;
	font-size: 33px;
	color:#ffffff;
	cursor: pointer;
	transition: all 0.2s;
	
}
.nav li{
	display: inline-block;
	margin-right:0.5em;
	margin-left:0.5em;
}
.nav ul a:hover{
	color: #d6d6d6;
}

.nav-content{
	width:fit-content;
	height:fit-content;
}
.dropdown-content {
	position: absolute;
	z-index: 1;
	padding: 10px;
	opacity: 0; 
	left: -999999px;
	width: fit-content;
	border-radius: 5px;
	border: 2px solid white;
	background-color:rgba(0, 0, 0, 0.8);
}

.dropdown-content a {
	font-size: 33px;
	color: white;
	text-decoration: none;
	display: block;
	text-align: left;
	margin-right:0.2em;
	margin-left:0.2em;
}
.dropdown-content a:hover {
	color: #d6d6d6;
}

.dropdown:hover .dropdown-content {
	left:420px;
	transition: opacity 0.5s linear;  
	transform:translate(0);
	opacity: 1;
	cursor: pointer;
}
.user{
	margin-right:auto;
	margin-left: auto;
	height:fit-content;
	margin-top: auto;
	margin-bottom: auto;
}
.user ul a {
	font-family: Exo2-Regular;
	font-size: 20px;
	color:#ffffff;
	cursor: pointer;
	transition: all 0.2s;
}
.user ul a:hover{
	color: #d6d6d6;
}
  .dropdown-user {
	position: absolute;
	z-index: 1;
	padding: 10px;
	opacity: 0; 
	left: -999999px;
	width: fit-content;
	border-radius: 5px;
	border: 2px solid white;
	background-color:rgba(0, 0, 0, 0.8);
  }
  
  .dropdown-user a {
	color: white;
	text-decoration: none;
	display: block;
	text-align: center;

}
  .dropdown-user a:hover {
	color: #d6d6d6;
  }
  
    .dropdown2:hover .dropdown-user {
	left:1185px;
	transition: opacity 0.5s linear;  
	transform:translate(0);
	opacity: 1;
	cursor: pointer;
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
	margin-bottom:-40px;
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
