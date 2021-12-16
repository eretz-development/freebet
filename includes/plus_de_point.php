<?php

if (isset($_GET['formsend_plus_pts'])){
  extract($_GET);
  if (isset($_SESSION['time_before_form_plus_point'])){
    if ((time() - $_SESSION['time_before_form_plus_point']) <= 13){
      echo "<h2>Vous ne pouvez pas effectuez cette action pour l'instant</h2>";
      echo "<h2>Veuillez reesayez dans quelques instants</h2>";

      ?>
      <meta http-equiv="refresh" content="2;URL=/freebet/includes/plus_de_point_page.php">
      <?php
    } else {
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
      echo '<h2>Vous avez gagné 100 points</h2>';

      $_SESSION['time_before_form_plus_point'] = time();
      ?>
      <meta http-equiv="refresh" content="2;URL=/freebet/includes/plus_de_point_page.php">
      <?php
    }
  } else {
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
    echo '<h2>Vous avez gagné 100 points</h2>';

    $_SESSION['time_before_form_plus_point'] = time();
    ?>
    <meta http-equiv="refresh" content="2;URL=/freebet/includes/plus_de_point_page.php">
    <?php
  }
} else {
  echo '<h1>A court de points ?</h1>
  <p>Visonnez une courte video de 15 a 30 secondes pour obtenir 100 points supplementaire</p>
  <button onclick="launch()" style="padding: 0;border: none;background: none;"><svg id="play" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M34.4,18.06v135.88l5.16,-3.01l105.2425,-61.92l5.0525,-3.01l-5.0525,-3.01l-105.2425,-61.92zM41.28,30.1l94.9225,55.9l-94.9225,55.9z"></path></g></g></svg></button>
  <form method="get" class="update">
    <input type="submit" name="formsend_plus_pts" id="formsend_plus_pts" class="button" style="display:none"><br>
  </form>';
}

?>
