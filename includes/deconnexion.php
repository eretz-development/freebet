<!-- deconnexion -->

<form method="post">
			    <svg style='cursor:pointer' onclick='myFunction()' id='deconnexion-icon' xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M5.375,0c-3.15264,0.59435 -5.42668,3.38522 -5.375,6.61538v158.76923c0,3.64363 2.97176,6.61538 6.61538,6.61538h99.23077c3.64363,0 6.61538,-2.97176 6.61538,-6.61538v-33.07692h-13.23077v26.46154h-86v-145.53846h86v26.46154h13.23077v-33.07692c0,-3.64363 -2.97176,-6.61538 -6.61538,-6.61538h-99.23077c-0.20673,0 -0.41346,0 -0.62019,0c-0.20673,0 -0.41346,0 -0.62019,0zM136.64904,53.33654c-0.72356,-0.02584 -1.42128,0.05169 -2.06731,0.41346c-1.31791,0.69772 -2.06731,2.01563 -2.06731,3.51442v15.29808c0,0 -67.80769,2.48077 -69.25481,3.51442c-2.11899,1.4988 -3.51442,5.86599 -3.51442,9.92308c0,4.08294 1.39544,9.04447 3.51442,10.54327c1.44712,1.03365 69.25481,2.89423 69.25481,2.89423v15.29808c0,1.4988 0.7494,2.81671 2.06731,3.51442c1.31791,0.69772 2.89423,0.62019 4.13462,-0.20673c16.02163,-10.82753 31.47476,-28.83894 32.04327,-29.5625c0.59435,-0.72356 1.03365,-1.57632 1.03365,-2.48077c0,-0.90445 -0.4393,-1.73137 -1.03365,-2.48077c-0.56851,-0.72356 -16.02163,-18.73497 -32.04327,-29.5625c-0.62019,-0.41346 -1.34375,-0.59435 -2.06731,-0.62019z"></path></g></g></svg>
				<input type="submit" name="deconnexion" id="deconnexion" style='display:none'>
			</form>
			<script>function myFunction(){
				var evt = document.createEvent("MouseEvents");
				evt.initMouseEvent("click", true, true, window,0, 0, 0, 0, 0, false, false, false, false, 0, null);
				document.getElementById("deconnexion").dispatchEvent(evt);}
			</script>
			<?php
				if (isset($_POST['deconnexion']))
				{
					session_unset();
					session_destroy();
					?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
				}
			?>

		

