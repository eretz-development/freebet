<header id="header"><?php require_once 'en_tete.php'; ?></header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
 
//...
// Votre code
//...
// Connexion à la base de données
//...
 
 
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


 
//...    
// Fermeture de la connexion    
//...
// Votre code
//...?>