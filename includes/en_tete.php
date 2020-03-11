<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
	<title>Freebet</title>
	<meta charset="utf-8">
</head>

<body>
  	<!-- haut de page -->

	<?php
	  include 'database.php';
	  global $db;
	?>

			<div id="header">
				<div class="titre"><a href="/freebet">FREEBET</a></div>
				<nav class="menu_nav">
					<?php
						if (isset($_SESSION['email'])) {
					?>
		  	  <ul>
						<li class="dropbtn">
		            <a>Les Sports</a>
		            <ul class="dropdown-content" aria-label="submenu">
		              <li><a href="/freebet/includes/football.php">Football</a></li>
		              <li><a href="/freebet/includes/rugby.php">Rugby</a></li>
		              <li><a href="/freebet/includes/basket_ball.php">Basketball</a></li>
		              <li><a href="/freebet/includes/american_football.php">Football Americain</a></li>
		              <li><a href="/freebet/includes/hockey.php">Hockey</a></li>
		            </ul>
						</li>
						<li class="btn">
		    		        <a href="/freebet/includes/bet_page.php">Vos paris</a>
						</li>
					  <li class="btn">
		    		    <a href="/freebet/includes/recompense_page.php">Recompenses</a>
		    	  </li>
		        <li class="btn">
		    		        <a href="/freebet/includes/plus_de_point_page.php">Plus de points</a>
						</li>
						<li class="btn">
		    		        <a href="/freebet/includes/contact.php">Contacts</a>
		    	  </li>

		      </ul>

				<?php
					} else {
				?>
				<ul>
					<li class="dropbtn">
							<a>Les Sports</a>
							<ul class="dropdown-content" aria-label="submenu">
								<li><a href="/freebet/includes/football.php">Football</a></li>
								<li><a href="/freebet/includes/rugby.php">Rugby</a></li>
								<li><a href="/freebet/includes/basket_ball.php">Basketball</a></li>
								<li><a href="/freebet/includes/american_football.php">Football Americain</a></li>
								<li><a href="/freebet/includes/hockey.php">Hockey</a></li>
							</ul>
					</li>
					<li class="btn">
							<a href="/freebet/includes/recompense_page.php">Recompenses</a>
					</li>
					<li class="btn">
									<a href="/freebet/includes/contact.php">Contacts</a>
					</li>

				</ul>
				<?php
					}
				?>

				</nav>

	<div class="log">
		<?php

      if (isset($_SESSION['email'])) {

        $q = $db->query("SELECT * FROM user_stack WHERE pseudo ='".$_SESSION['pseudo']."' ");
        while ($user_stack = $q->fetch()) {

         ?> <a href="/freebet/includes/profile_parameter_page.php"> <div class='user'><?php echo $_SESSION['pseudo']." ".$user_stack['stack'];?> pts</div></a><div class="deco"><?php

          $adresse=$_SERVER['REQUEST_URI'];

          $findme = 'includes';
          $pos = strpos($adresse, $findme);
          if ($pos !== false) {
            require_once 'deconnexion.php';
          }

          else{
            require_once 'includes/deconnexion.php';
          }
        }?></div><?php
      }

      else{

        $adresse=$_SERVER['REQUEST_URI'];

        $findme   = 'includes';
        $pos = strpos($adresse, $findme);
        if ($pos !== false) {
          ?><div class="login_register">
                <button type="button" name="login"class="btn"><a href="login_page.php">Se connecter</a></button>
                <button type="button" name="register" class="btn"><a href="registration_page.php">S'inscrire</a></button>
          </div><?php
        }
        else{
          ?><div class="login_register">
                <button type="button" name="login" class="btn"><a href="includes/login_page.php">Se connecter</a></button>
                <button type="button" name="register" class="btn"><a href="includes/registration_page.php">S'inscrire</a></button>
          </div><?php
        }
      }
  ?>
       </div>
			</div>

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
.titre a{
    text-align: center;
    font-family:'sporo';
    color: white;
    margin: 10px;
    font-size: 70px;
    text-decoration: none;
    }

#header{
    height: fit-content;
    background-color: #557de9;
    display: flex;
    justify-content: space-around;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 2; /* Le contenu doit s'afficher en arrière plan. */
    }

#header a{
	text-decoration:none;
}
/*-------nav-------*/
nav.menu_nav{
    text-align: center;
}

   nav.menu_nav ul li.btn{
    list-style-type: none;
    display: inline-block;
    cursor: pointer;

  }

  nav.menu_nav ul li.btn a{
    color: white;
    background-color: #557de9;
    text-decoration: none;
    padding: 10px 20px;
    font-family:'sporo';
    font-size: 25px;
  }

  nav.menu_nav ul li.btn:hover a{
    color: #557de9;
    background-color: white;
    transition: 0.2s all;
  }
  nav.menu_nav ul li.dropbtn{
    list-style-type: none;
    display: inline-block;
    cursor: pointer;

  }
  nav.menu_nav ul li.dropbtn a{
    color: white;
    background-color: #557de9;
    text-decoration: none;
    padding: 10px 20px;
    font-family:'sporo';
    font-size: 25px;
  }

  nav.menu_nav ul li.dropbtn:hover a{
    color: #557de9;
    background-color: white;
    transition: 0.2s all;
  }

  ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 0px;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  margin-top:10px;
  font-family:'sporo';
  color:#557de9;
}
.dropbtn:hover .dropdown-content{
    display: block;
}
.dropdown-content a {
  display: block;
}
.dropdown-content li{
  list-style-type: none;
}
nav.menu_nav ul li.dropbtn li a:hover{
    color: white;
    background-color: #557de9;
    text-decoration: none;
    padding: 10px 20px;
    font-family:'sporo';
    font-size: 25px;
  background: #557de9;
  color:white;
}
.log{
  display:block;
  width:250px;
  text-align: center;
}
/*-------login/reg-------*/
    .login_register button.btn{
    padding:5px;
    margin:5px;
    background-color:transparent;
    width:130px ;
	  display:inline-block;
    cursor:pointer;
    border-radius:5px;
    border: 2px solid white;
    }
    .login_register button.btn a{
    color:white;
    text-decoration: none;
    font-family:'sporo';
    font-size:20px;
    }
    .login_register button.btn:hover{
    background-color:#719CE1;
    transition: 0.2s all;
    }
/*-------deconnexion-------*/
#info{

    padding:5px;
    width:120px;
	  display:flex;
    flex-direction: column;
    justify-content: center;
    color:white;
    font-family:'sporo';
    text-align:center;
}

#deconnexion:hover{
    background-color:#719CE1;
    transition: 0.2s all;
    }
#deconnexion{
  margin:5px;
    padding:5px;
    background-color:transparent;
    width:120px ;
    cursor:pointer;
    border-radius:5px;
    border: 2px solid white;
    color:white;
    font-size:20px;
    text-decoration: none;
    font-family:'sporo';

}
/*-------user-----*/
.user{
  margin-left:auto;
  margin-right:auto;
  margin-top:5px;
  padding: 5px;
	font-family:'font2';
	font-size: 16px;
  color:white;
  width:fit-content;

}
.user:hover{
  background-color:white;
  color:#557de9;
  border-radius:4px;
  cursor:pointer;
}
.deco{
  margin-top:5px;
  margin-bottom:5px;
}

/*-------tablau-------*/

	table{
		margin: auto;
		padding: 50px;
		border-collapse: collapse
	}

	th,tr,td{
		text-align: center;
		padding: 10px;
	}

	th{
		border-bottom: 5px dashed white;
	}
</style>
