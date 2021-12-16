<body>
	<br>
	<div id="alert">
    <?php
      if (isset($_POST['form_password_forgot'])) {

        $q = $db->prepare("SELECT * FROM user WHERE email = :email");
        $q->execute(['email' => $_POST['lemail']]);
        $query = $q->rowCount();
        $result = $q->fetch();

        if ($query==1) {
          ?>
          <meta http-equiv="refresh" content="4;URL=/freebet/">
          <main>
          <?php
          $pseudo = base64_encode($result['pseudo']);
          // Préparation du mail contenant le lien d'activation
          $destinataire = $_POST['lemail'];
          $sujet = "Changer votre mot de passe" ;
          $mail = "noreply@freebet.com" ;
          $entete = 'From: '.$mail."\nContent-Type: text/html; charset=iso-8859-1";

          // Le lien d'activation est composé du pseudo(log) et de la clé(cle)
          $message = '
          <h1>Mot de passe oublié</h1>

          Nous avons appris que vous aviez perdu votre mot de passe. Si c\'est bien le cas, cliquez ci-dessous pour changer votre mot de passe:
          <br><a href="http://eretz-development.com/freebet/includes/reinit_mot_de_passe_page.php?log='.$pseudo.'">Cliquez ici</a><br>
          ---------------
          <br>Ceci est un mail automatique, Merci de ne pas y répondre.';
          //...
          ?></main><?php
          // Fermeture de la connexion
          //...
          mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
          echo 'Un mail vous a été envoyé, vérifiez votre boite de réception pour changer votre mot de passe';
        } else {
          echo 'Aucun compte n\'est lié à cet E-mail';
        }
      }

    ?>
	</div>
</body>

<style media="screen">
@font-face{
  font-family:'sporo';
  src: url(/freebet/font/Exo_2/Exo2-Regular.ttf);
}
#alert{
	font-size:15px;
	color:white;
	font-family:'sporo';
}
</style>
