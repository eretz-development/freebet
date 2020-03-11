<?php

if (isset($_POST['formsend_plus_pts'])){

  extract($_POST);

  $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
  $q->execute([
    'pseudo' => $_SESSION['pseudo']
  ]);
  $query = $q->fetch();

  $plus_pts = $query['stack'] + 100;

  $a = $db->prepare("UPDATE user_stack SET stack='".$plus_pts."' WHERE pseudo = :pseudo");
  $a->execute([
    'pseudo' => $_SESSION['pseudo']
  ]);

  ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/includes/plus_de_point_page.php">

  <script type="text/javascript">
    alert("Vous avez gagné 100 points");
  </script>
  <?php

}

?>
