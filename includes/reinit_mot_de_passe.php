
<!-- update verification -->

		<?php
      $pseudo = $_GET['log'];

			if (isset($_POST['formsend'])){

				extract($_POST);

				if (!empty($password) && !empty($cpassword)){

					if ($password == $cpassword) {

						$options = [
    						'cost' => 12,
						];

						$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

						$q = $db->prepare("UPDATE user SET password='".$hashpass."' WHERE pseudo = :pseudo");
						$q->execute([
							'pseudo' => $pseudo
						  ]);
					  }

					}

					else{
						echo "Les mots de passes ne corespondent pas";
					}
          ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
				}

		?>
