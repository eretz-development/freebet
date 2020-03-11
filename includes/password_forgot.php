<?php

  if (isset($_POST['form_password_forgot'])) {

    $q = $db->prepare("SELECT * FROM user WHERE email = :email");
    $q->execute(['email' => $_POST['lemail']]);
    $query = $q->rowCount();
    $result = $q->fetch();

    if ($query==1) {

      // Préparation du mail contenant le lien d'activation
      $destinataire = $_POST['lemail'];
      $sujet = "Changer votre mot de passe" ;
      $entete = "From: inscription@freebet.com" ;

      // Le lien d'activation est composé du pseudo(log) et de la clé(cle)
      $message = 'Bienvenue sur freebet,

      Pour modifiez le mot de passe de votre compte, veuillez cliquer sur le lien ci-dessous
      ou copier/coller dans votre navigateur Internet.

      http://eretz-development.com/freebet/includes/reinit_mot_de_passe_page.php?log='.urlencode($result['pseudo']).'


      ---------------
      Ceci est un mail automatique, Merci de ne pas y répondre.';

      //...
      // Fermeture de la connexion
      //...
      mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
      echo "Un mail vous a ete envoye, verifiez votre boite de reception pour changez votre mot de passe";
    }
  }

?>
