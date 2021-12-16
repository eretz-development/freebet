<header id="header"><?php require_once 'en_tete.php'; ?></header>
<body>
  <main>
    <img class="logo" width="160px" src="/freebet/img/Freebet Logo.PNG"/>
    <p>
    <h1>Bienvenue sur Freebet</h1>
    <?php
    // Récupération des variables nécessaires à l'activation
    $pseudo = $_GET['log'];
    // Récupération de la clé correspondant au $login dans la base de données
    // On teste la valeur de la variable $actif récupérée dans la BDD
    if($actif == '1') // Si le compte est déjà actif on prévient
    {
        echo "Votre compte est déjà actif !";
    }
    else // Si ce n'est pas le cas on passe aux comparaisons
    {
      echo "Votre compte a bien été activé !";

      // La requête qui va passer notre champ actif de 0 à 1
      $stmt = $db->prepare("UPDATE user SET actif = 1 WHERE pseudo = :pseudo");
      $stmt->bindParam('pseudo', $pseudo);
      $stmt->execute();
    }
    ?>
    </p>
    <p id="log"><a href="login_page.php">Se connecter</a></p>
  </main>
  <?php require_once 'footer.php'; ?>
</body>
<style media="screen">
@font-face{
  font-family:'sporo';
  src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}
body{
	margin:0px;
	background-color: black; /* Used if the image is unavailable */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
	background-attachment: fixed;
}
a{
  text-decoration:none;
  color:white;
}
main{
  width:fit-content;
  margin-top:4vw;
  margin-left:auto;
  margin-right:auto;
  color:white;
  font-family:'sporo';
  text-align:center;
}
main p{
  margin-top:4vw;
  transition:all 0.2s;
}
#log{
  margin-right:auto;
  margin-left:auto;
  width:fit-content;
  font-size:1.2em;
  border:2px solid white;
  padding:6px;
}
#log:hover{
  font-size:1.1em;
  cursor:pointer;
}
</style>
