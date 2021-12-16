<?php
  if (isset($_GET['formsend_confirm_buy_am_25'])) {
    extract($_GET);
      if (isset($_SESSION['time_before_form_reward_am_25'])){
        if ((time() - $_SESSION['time_before_form_reward_am_25']) <= 300){
          echo "<p class='mise_error'>Cette action ne peut pas etre effectuer pour l'instant. Veuiller patienter 5 minutes entre deux echanges du meme produit</p>
          <div class='grid-container' style='display:none'>";

          ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
        } else {
          $_SESSION['time_before_form_reward_am_25'] = time();

          $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
          $q->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);
          $query = $q->fetch();

          if($query['stack'] >= 62500){
            $paiement = $query['stack'] - 62500;

            $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
            $a->execute([
              'pseudo' => $_SESSION['pseudo']
            ]);

            $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
        	  $q->execute
          	([
          		'pseudo' => $_SESSION['pseudo'],
          		'email' => $_SESSION['email'],
          		'reward_name' => 'amazon_25',
          		'reward_cost' => '62500',
          		'stack_before' => $query['stack'],
          		'stack_after' => $paiement
          	]);

            $b = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
            $b->execute([
              'pseudo' => $_SESSION['pseudo']
            ]);
            $result = $b->fetch();
            ?><meta http-equiv="refresh" content="4;URL=/freebet/"><?php
            // Préparation du mail contenant le lien d'activation
            $destinataire = $result['email'];
            $sujet = "Votre récompense Freebet" ;
            $mail = "noreply@freebet.com" ;
            $entete = 'From: '.$mail."\nContent-Type: text/html; charset=iso-8859-1";

            // Le lien d'activation est composé du pseudo(log) et de la clé(cle)
            $message = '
            <h1>Félicitation '.$_SESSION['pseudo'].',</h1>
            <br>
            Vous avez remporté un chèque cadeau chez Amazon d\'une valeur de 25 Euros !<br>
            <br>
            Pour activer votre chèque cadeau, vous devez:<br>
            1. Copiez le code du Chèque-cadeau ci-dessous.<br>
            2. Rendez-vous sur www.amazon.fr/gc/redeem. Il vous sera peut-être demandé de vous connecter à votre compte.<br>
            3. Collez le code et cliquez sur Ajouter à Mon compte.<br>
            <br>
            Le code de votre Chèque cadeau (Attention, il est strictement confidentiel): AS25-NJZ1JX-CZCP5
            <br>
            ---------------
            <br>Ceci est un mail automatique, Merci de ne pas y répondre.';
            //...
            // Fermeture de la connexion
            //...
            mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
            echo '<p class="mise_error">Un mail vous a été envoyé, vérifiez votre boite de réception pour recupérer votre récompense<br>(Si au bout de 5 minutes vous n\'avez recu aucun mail, verifiez vos spams)</p>
            <div class="grid-container" style="display:none">';
          } else {
            echo '<p class="mise_error">Vous n\'avez pas assez de points</p>
            <div class="grid-container" style="display:none">';
            ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
          }
        }
      } else {
        $_SESSION['time_before_form_reward_am_25'] = time();

        $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
        $q->execute([
          'pseudo' => $_SESSION['pseudo']
        ]);
        $query = $q->fetch();

        if($query['stack'] >= 62500){
          $paiement = $query['stack'] - 62500;

          $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
          $a->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);

          $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
      	  $q->execute
        	([
        		'pseudo' => $_SESSION['pseudo'],
        		'email' => $_SESSION['email'],
        		'reward_name' => 'amazon_25',
        		'reward_cost' => '62500',
        		'stack_before' => $query['stack'],
        		'stack_after' => $paiement
        	]);

          $b = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
          $b->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);
          $result = $b->fetch();
          ?><meta http-equiv="refresh" content="4;URL=/freebet/"><?php
          // Préparation du mail contenant le lien d'activation
          $destinataire = $result['email'];
          $sujet = "Votre récompense Freebet" ;
          $mail = "noreply@freebet.com" ;
          $entete = 'From: '.$mail."\nContent-Type: text/html; charset=iso-8859-1";

          // Le lien d'activation est composé du pseudo(log) et de la clé(cle)
          $message = '
          <h1>Félicitation '.$_SESSION['pseudo'].',</h1>
          <br>
          Vous avez remporté un chèque cadeau chez Amazon d\'une valeur de 25 Euros !<br>
          <br>
          Pour activer votre chèque cadeau, vous devez:<br>
          1. Copiez le code du Chèque-cadeau ci-dessous.<br>
          2. Rendez-vous sur www.amazon.fr/gc/redeem. Il vous sera peut-être demandé de vous connecter à votre compte.<br>
          3. Collez le code et cliquez sur Ajouter à Mon compte.<br>
          <br>
          Le code de votre Chèque cadeau (Attention, il est strictement confidentiel): AS25-NJZ1JX-CZCP5
          <br>
          ---------------
          <br>Ceci est un mail automatique, Merci de ne pas y répondre.';
          //...
          // Fermeture de la connexion
          //...
          mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
          echo '<p class="mise_error">Un mail vous a été envoyé, vérifiez votre boite de réception pour recupérer votre récompense<br>(Si au bout de 5 minutes vous n\'avez recu aucun mail, verifiez vos spams)</p>
          <div class="grid-container" style="display:none">';
        } else {
          echo '<p class="mise_error">Vous n\'avez pas assez de points</p>
          <div class="grid-container" style="display:none">';
          ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
        }
      }
  } elseif (isset($_GET['formsend_confirm_buy_am_50'])) {
    extract($_GET);
      if (isset($_SESSION['time_before_form_reward_am_50'])){
        if ((time() - $_SESSION['time_before_form_reward_am_50']) <= 300){
          echo "<p class='mise_error'>Cette action ne peut pas etre effectuer pour l'instant. Veuiller patienter 5 minutes entre deux echanges du meme produit</p>
          <div class='grid-container' style='display:none'>";

          ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
        } else {
          $_SESSION['time_before_form_reward_am_50'] = time();

          $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
          $q->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);
          $query = $q->fetch();

          if($query['stack'] >= 125000){
            $paiement = $query['stack'] - 125000;

            $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
            $a->execute([
              'pseudo' => $_SESSION['pseudo']
            ]);

            $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
        	  $q->execute
          	([
          		'pseudo' => $_SESSION['pseudo'],
          		'email' => $_SESSION['email'],
          		'reward_name' => 'amazon_50',
          		'reward_cost' => '125000',
          		'stack_before' => $query['stack'],
          		'stack_after' => $paiement
          	]);

            $b = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
            $b->execute([
              'pseudo' => $_SESSION['pseudo']
            ]);
            $result = $b->fetch();
            ?><meta http-equiv="refresh" content="4;URL=/freebet/"><?php
            // Préparation du mail contenant le lien d'activation
            $destinataire = $result['email'];
            $sujet = "Votre récompense Freebet" ;
            $mail = "noreply@freebet.com" ;
            $entete = 'From: '.$mail."\nContent-Type: text/html; charset=iso-8859-1";

            // Le lien d'activation est composé du pseudo(log) et de la clé(cle)
            $message = '
            <h1>Félicitation '.$_SESSION['pseudo'].',</h1>
            <br>
            Vous avez remporté un chèque cadeau chez Amazon d\'une valeur de 50 Euros !<br>
            <br>
            Pour activer votre chèque cadeau, vous devez:<br>
            1. Copiez le code du Chèque-cadeau ci-dessous.<br>
            2. Rendez-vous sur www.amazon.fr/gc/redeem. Il vous sera peut-être demandé de vous connecter à votre compte.<br>
            3. Collez le code et cliquez sur Ajouter à Mon compte.<br>
            <br>
            Le code de votre Chèque cadeau (Attention, il est strictement confidentiel): AS25-NJZ1JX-CZCP5
            <br>
            ---------------
            <br>Ceci est un mail automatique, Merci de ne pas y répondre.';
            //...
            // Fermeture de la connexion
            //...
            mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
            echo '<p class="mise_error">Un mail vous a été envoyé, vérifiez votre boite de réception pour recupérer votre récompense<br>(Si au bout de 5 minutes vous n\'avez recu aucun mail, verifiez vos spams)</p>
            <div class="grid-container" style="display:none">';
          } else {
            echo '<p class="mise_error">Vous n\'avez pas assez de points</p>
            <div class="grid-container" style="display:none">';
            ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
          }
        }
      } else {
        $_SESSION['time_before_form_reward_am_50'] = time();

        $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
        $q->execute([
          'pseudo' => $_SESSION['pseudo']
        ]);
        $query = $q->fetch();

        if($query['stack'] >= 125000){
          $paiement = $query['stack'] - 125000;

          $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
          $a->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);

          $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
      	  $q->execute
        	([
        		'pseudo' => $_SESSION['pseudo'],
        		'email' => $_SESSION['email'],
        		'reward_name' => 'amazon_50',
        		'reward_cost' => '125000',
        		'stack_before' => $query['stack'],
        		'stack_after' => $paiement
        	]);

          $b = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
          $b->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);
          $result = $b->fetch();
          ?><meta http-equiv="refresh" content="4;URL=/freebet/"><?php
          // Préparation du mail contenant le lien d'activation
          $destinataire = $result['email'];
          $sujet = "Votre récompense Freebet" ;
          $mail = "noreply@freebet.com" ;
          $entete = 'From: '.$mail."\nContent-Type: text/html; charset=iso-8859-1";

          // Le lien d'activation est composé du pseudo(log) et de la clé(cle)
          $message = '
          <h1>Félicitation '.$_SESSION['pseudo'].',</h1>
          <br>
          Vous avez remporté un chèque cadeau chez Amazon d\'une valeur de 50 Euros !<br>
          <br>
          Pour activer votre chèque cadeau, vous devez:<br>
          1. Copiez le code du Chèque-cadeau ci-dessous.<br>
          2. Rendez-vous sur www.amazon.fr/gc/redeem. Il vous sera peut-être demandé de vous connecter à votre compte.<br>
          3. Collez le code et cliquez sur Ajouter à Mon compte.<br>
          <br>
          Le code de votre Chèque cadeau (Attention, il est strictement confidentiel): AS25-NJZ1JX-CZCP5
          <br>
          ---------------
          <br>Ceci est un mail automatique, Merci de ne pas y répondre.';
          //...
          // Fermeture de la connexion
          //...
          mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
          echo '<p class="mise_error">Un mail vous a été envoyé, vérifiez votre boite de réception pour recupérer votre récompense<br>(Si au bout de 5 minutes vous n\'avez recu aucun mail, verifiez vos spams)</p>
          <div class="grid-container" style="display:none">';
        } else {
          echo '<p class="mise_error">Vous n\'avez pas assez de points</p>
          <div class="grid-container" style="display:none">';
          ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
        }
      }
  } elseif (isset($_GET['formsend_confirm_buy_am_150'])) {
    extract($_GET);
      if (isset($_SESSION['time_before_form_reward_am_150'])){
        if ((time() - $_SESSION['time_before_form_reward_am_150']) <= 300){
          echo "<p class='mise_error'>Cette action ne peut pas etre effectuer pour l'instant. Veuiller patienter 5 minutes entre deux echanges du meme produit</p>
          <div class='grid-container' style='display:none'>";

          ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
        } else {
          $_SESSION['time_before_form_reward_am_150'] = time();

          $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
          $q->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);
          $query = $q->fetch();

          if($query['stack'] >= 375000){
            $paiement = $query['stack'] - 375000;

            $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
            $a->execute([
              'pseudo' => $_SESSION['pseudo']
            ]);

            $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
        	  $q->execute
          	([
          		'pseudo' => $_SESSION['pseudo'],
          		'email' => $_SESSION['email'],
          		'reward_name' => 'amazon_150',
          		'reward_cost' => '375000',
          		'stack_before' => $query['stack'],
          		'stack_after' => $paiement
          	]);

            $b = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
            $b->execute([
              'pseudo' => $_SESSION['pseudo']
            ]);
            $result = $b->fetch();
            ?><meta http-equiv="refresh" content="4;URL=/freebet/"><?php
            // Préparation du mail contenant le lien d'activation
            $destinataire = $result['email'];
            $sujet = "Votre récompense Freebet" ;
            $mail = "noreply@freebet.com" ;
            $entete = 'From: '.$mail."\nContent-Type: text/html; charset=iso-8859-1";

            // Le lien d'activation est composé du pseudo(log) et de la clé(cle)
            $message = '
            <h1>Félicitation '.$_SESSION['pseudo'].',</h1>
            <br>
            Vous avez remporté un chèque cadeau chez Amazon d\'une valeur de 150 Euros !<br>
            <br>
            Pour activer votre chèque cadeau, vous devez:<br>
            1. Copiez le code du Chèque-cadeau ci-dessous.<br>
            2. Rendez-vous sur www.amazon.fr/gc/redeem. Il vous sera peut-être demandé de vous connecter à votre compte.<br>
            3. Collez le code et cliquez sur Ajouter à Mon compte.<br>
            <br>
            Le code de votre Chèque cadeau (Attention, il est strictement confidentiel): AS25-NJZ1JX-CZCP5
            <br>
            ---------------
            <br>Ceci est un mail automatique, Merci de ne pas y répondre.';
            //...
            // Fermeture de la connexion
            //...
            mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
            echo '<p class="mise_error">Un mail vous a été envoyé, vérifiez votre boite de réception pour recupérer votre récompense<br>(Si au bout de 5 minutes vous n\'avez recu aucun mail, verifiez vos spams)</p>
            <div class="grid-container" style="display:none">';
          } else {
            echo '<p class="mise_error">Vous n\'avez pas assez de points</p>
            <div class="grid-container" style="display:none">';
            ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
          }
        }
      } else {
        $_SESSION['time_before_form_reward_am_150'] = time();

        $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
        $q->execute([
          'pseudo' => $_SESSION['pseudo']
        ]);
        $query = $q->fetch();

        if($query['stack'] >= 375000){
          $paiement = $query['stack'] - 375000;

          $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
          $a->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);

          $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
      	  $q->execute
        	([
        		'pseudo' => $_SESSION['pseudo'],
        		'email' => $_SESSION['email'],
        		'reward_name' => 'amazon_150',
        		'reward_cost' => '375000',
        		'stack_before' => $query['stack'],
        		'stack_after' => $paiement
        	]);

          $b = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
          $b->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);
          $result = $b->fetch();
          ?><meta http-equiv="refresh" content="4;URL=/freebet/"><?php
          // Préparation du mail contenant le lien d'activation
          $destinataire = $result['email'];
          $sujet = "Votre récompense Freebet" ;
          $mail = "noreply@freebet.com" ;
          $entete = 'From: '.$mail."\nContent-Type: text/html; charset=iso-8859-1";

          // Le lien d'activation est composé du pseudo(log) et de la clé(cle)
          $message = '
          <h1>Félicitation '.$_SESSION['pseudo'].',</h1>
          <br>
          Vous avez remporté un chèque cadeau chez Amazon d\'une valeur de 150 Euros !<br>
          <br>
          Pour activer votre chèque cadeau, vous devez:<br>
          1. Copiez le code du Chèque-cadeau ci-dessous.<br>
          2. Rendez-vous sur www.amazon.fr/gc/redeem. Il vous sera peut-être demandé de vous connecter à votre compte.<br>
          3. Collez le code et cliquez sur Ajouter à Mon compte.<br>
          <br>
          Le code de votre Chèque cadeau (Attention, il est strictement confidentiel): AS25-NJZ1JX-CZCP5
          <br>
          ---------------
          <br>Ceci est un mail automatique, Merci de ne pas y répondre.';
          //...
          // Fermeture de la connexion
          //...
          mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
          echo '<p class="mise_error">Un mail vous a été envoyé, vérifiez votre boite de réception pour recupérer votre récompense<br>(Si au bout de 5 minutes vous n\'avez recu aucun mail, verifiez vos spams)</p>
          <div class="grid-container" style="display:none">';
        } else {
          echo '<p class="mise_error">Vous n\'avez pas assez de points</p>
          <div class="grid-container" style="display:none">';
          ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
        }
      }
  } elseif (isset($_GET['formsend_confirm_buy_am_200'])) {
    extract($_GET);
      if (isset($_SESSION['time_before_form_reward_am_200'])){
        if ((time() - $_SESSION['time_before_form_reward_am_200']) <= 300){
          echo "<p class='mise_error'>Cette action ne peut pas etre effectuer pour l'instant. Veuiller patienter 5 minutes entre deux echanges du meme produit</p>
          <div class='grid-container' style='display:none'>";

          ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
        } else {
          $_SESSION['time_before_form_reward_am_200'] = time();

          $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
          $q->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);
          $query = $q->fetch();

          if($query['stack'] >= 500000){
            $paiement = $query['stack'] - 500000;

            $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
            $a->execute([
              'pseudo' => $_SESSION['pseudo']
            ]);

            $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
        	  $q->execute
          	([
          		'pseudo' => $_SESSION['pseudo'],
          		'email' => $_SESSION['email'],
          		'reward_name' => 'amazon_200',
          		'reward_cost' => '500000',
          		'stack_before' => $query['stack'],
          		'stack_after' => $paiement
          	]);

            $b = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
            $b->execute([
              'pseudo' => $_SESSION['pseudo']
            ]);
            $result = $b->fetch();
            ?><meta http-equiv="refresh" content="4;URL=/freebet/"><?php
            // Préparation du mail contenant le lien d'activation
            $destinataire = $result['email'];
            $sujet = "Votre récompense Freebet" ;
            $mail = "noreply@freebet.com" ;
            $entete = 'From: '.$mail."\nContent-Type: text/html; charset=iso-8859-1";

            // Le lien d'activation est composé du pseudo(log) et de la clé(cle)
            $message = '
            <h1>Félicitation '.$_SESSION['pseudo'].',</h1>
            <br>
            Vous avez remporté un chèque cadeau chez Amazon d\'une valeur de 200 Euros !<br>
            <br>
            Pour activer votre chèque cadeau, vous devez:<br>
            1. Copiez le code du Chèque-cadeau ci-dessous.<br>
            2. Rendez-vous sur www.amazon.fr/gc/redeem. Il vous sera peut-être demandé de vous connecter à votre compte.<br>
            3. Collez le code et cliquez sur Ajouter à Mon compte.<br>
            <br>
            Le code de votre Chèque cadeau (Attention, il est strictement confidentiel): AS25-NJZ1JX-CZCP5
            <br>
            ---------------
            <br>Ceci est un mail automatique, Merci de ne pas y répondre.';
            //...
            // Fermeture de la connexion
            //...
            mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
            echo '<p class="mise_error">Un mail vous a été envoyé, vérifiez votre boite de réception pour recupérer votre récompense<br>(Si au bout de 5 minutes vous n\'avez recu aucun mail, verifiez vos spams)</p>
            <div class="grid-container" style="display:none">';
          } else {
            echo '<p class="mise_error">Vous n\'avez pas assez de points</p>
            <div class="grid-container" style="display:none">';
            ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
          }
        }
      } else {
        $_SESSION['time_before_form_reward_am_200'] = time();

        $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
        $q->execute([
          'pseudo' => $_SESSION['pseudo']
        ]);
        $query = $q->fetch();

        if($query['stack'] >= 500000){
          $paiement = $query['stack'] - 500000;

          $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
          $a->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);

          $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
      	  $q->execute
        	([
        		'pseudo' => $_SESSION['pseudo'],
        		'email' => $_SESSION['email'],
        		'reward_name' => 'amazon_200',
        		'reward_cost' => '500000',
        		'stack_before' => $query['stack'],
        		'stack_after' => $paiement
        	]);

          $b = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
          $b->execute([
            'pseudo' => $_SESSION['pseudo']
          ]);
          $result = $b->fetch();
          ?><meta http-equiv="refresh" content="4;URL=/freebet/"><?php
          // Préparation du mail contenant le lien d'activation
          $destinataire = $result['email'];
          $sujet = "Votre récompense Freebet" ;
          $mail = "noreply@freebet.com" ;
          $entete = 'From: '.$mail."\nContent-Type: text/html; charset=iso-8859-1";

          // Le lien d'activation est composé du pseudo(log) et de la clé(cle)
          $message = '
          <h1>Félicitation '.$_SESSION['pseudo'].',</h1>
          <br>
          Vous avez remporté un chèque cadeau chez Amazon d\'une valeur de 200 Euros !<br>
          <br>
          Pour activer votre chèque cadeau, vous devez:<br>
          1. Copiez le code du Chèque-cadeau ci-dessous.<br>
          2. Rendez-vous sur www.amazon.fr/gc/redeem. Il vous sera peut-être demandé de vous connecter à votre compte.<br>
          3. Collez le code et cliquez sur Ajouter à Mon compte.<br>
          <br>
          Le code de votre Chèque cadeau (Attention, il est strictement confidentiel): AS25-NJZ1JX-CZCP5
          <br>
          ---------------
          <br>Ceci est un mail automatique, Merci de ne pas y répondre.';
          //...
          // Fermeture de la connexion
          //...
          mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
          echo '<p class="mise_error">Un mail vous a été envoyé, vérifiez votre boite de réception pour recupérer votre récompense<br>(Si au bout de 5 minutes vous n\'avez recu aucun mail, verifiez vos spams)</p>
          <div class="grid-container" style="display:none">';
        } else {
          echo '<p class="mise_error">Vous n\'avez pas assez de points</p>
          <div class="grid-container" style="display:none">';
          ?><meta http-equiv="refresh" content="2;URL=/freebet/includes/recompense_page.php"><?php
        }
      }
  } elseif (isset($_GET['formsend_confirm_buy_airpods'])) {

    extract($_GET);

    $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
    $q->execute([
      'pseudo' => $_SESSION['pseudo']
    ]);
    $query = $q->fetch();

    if($query['stack'] >= 700000){
      $paiement = $query['stack'] - 700000;

      $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
      $a->execute([
        'pseudo' => $_SESSION['pseudo']
      ]);

      $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
  	  $q->execute
    	([
    		'pseudo' => $_SESSION['pseudo'],
    		'email' => $_SESSION['email'],
    		'reward_name' => 'airpods',
    		'reward_cost' => '700000',
    		'stack_before' => $query['stack'],
    		'stack_after' => $paiement
    	]);

      ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
    } else {
      echo "Vous n'avez pas assez de points";
    }
  } elseif (isset($_GET['formsend_confirm_buy_ps5'])) {

    extract($_GET);

    $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
    $q->execute([
      'pseudo' => $_SESSION['pseudo']
    ]);
    $query = $q->fetch();

    if($query['stack'] >= 1000000){
      $paiement = $query['stack'] - 1000000;

      $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
      $a->execute([
        'pseudo' => $_SESSION['pseudo']
      ]);

      $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
  	  $q->execute
    	([
    		'pseudo' => $_SESSION['pseudo'],
    		'email' => $_SESSION['email'],
    		'reward_name' => 'ps5',
    		'reward_cost' => '1000000',
    		'stack_before' => $query['stack'],
    		'stack_after' => $paiement
    	]);

      ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
    } else {
      echo "Vous n'avez pas assez de points";
    }
  } elseif (isset($_GET['formsend_confirm_buy_iphone11'])) {

    extract($_GET);

    $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
    $q->execute([
      'pseudo' => $_SESSION['pseudo']
    ]);
    $query = $q->fetch();

    if($query['stack'] >= 2000000){
      $paiement = $query['stack'] - 2000000;

      $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
      $a->execute([
        'pseudo' => $_SESSION['pseudo']
      ]);

      $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
  	  $q->execute
    	([
    		'pseudo' => $_SESSION['pseudo'],
    		'email' => $_SESSION['email'],
    		'reward_name' => 'iphone11',
    		'reward_cost' => '2000000',
    		'stack_before' => $query['stack'],
    		'stack_after' => $paiement
    	]);

      ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
    } else {
      echo "Vous n'avez pas assez de points";
    }
  } elseif (isset($_GET['formsend_confirm_buy_macbook'])) {

    extract($_GET);

    $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
    $q->execute([
      'pseudo' => $_SESSION['pseudo']
    ]);
    $query = $q->fetch();

    if($query['stack'] >= 3000000){
      $paiement = $query['stack'] - 3000000;

      $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
      $a->execute([
        'pseudo' => $_SESSION['pseudo']
      ]);

      $q = $db->prepare("INSERT INTO reward_history(pseudo,email,reward_name,reward_cost,stack_before,stack_after) VALUES(:pseudo,:email,:reward_name,:reward_cost,:stack_before,:stack_after)");
  	  $q->execute
    	([
    		'pseudo' => $_SESSION['pseudo'],
    		'email' => $_SESSION['email'],
    		'reward_name' => 'macbook',
    		'reward_cost' => '3000000',
    		'stack_before' => $query['stack'],
    		'stack_after' => $paiement
    	]);

      ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
    } else {
      echo "Vous n'avez pas assez de points";
    }
  } else {
    echo '<div class="grid-container">';
  }
?>
