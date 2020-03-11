<?php

if (isset($_POST['formsend_confirm_buy_am_10'])){

  extract($_POST);

  $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
  $q->execute([
    'pseudo' => $_SESSION['pseudo']
  ]);
  $query = $q->fetch();

  if($query['stack'] >= 100){
    $paiement = $query['stack'] - 100;

    $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
    $a->execute([
      'pseudo' => $_SESSION['pseudo']
    ]);

    ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
  } else {
    $message = "Pas assez de points";
    echo "<script type='text/javascript'>alert('$message');</script>";  }

} elseif (isset($_POST['formsend_confirm_buy_am_25'])) {

  extract($_POST);

  $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
  $q->execute([
    'pseudo' => $_SESSION['pseudo']
  ]);
  $query = $q->fetch();

  if($query['stack'] >= 50000){
    $paiement = $query['stack'] - 50000;

    $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
    $a->execute([
      'pseudo' => $_SESSION['pseudo']
    ]);

    ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
  } else {
    $message = "Pas assez de points";
    echo "<script type='text/javascript'>alert('$message');</script>";  }

} elseif (isset($_POST['formsend_confirm_buy_am_50'])) {

  extract($_POST);

  $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
  $q->execute([
    'pseudo' => $_SESSION['pseudo']
  ]);
  $query = $q->fetch();

  if($query['stack'] >= 75000){
    $paiement = $query['stack'] - 75000;

    $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
    $a->execute([
      'pseudo' => $_SESSION['pseudo']
    ]);

    ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
  } else {
    $message = "Pas assez de points";
    echo "<script type='text/javascript'>alert('$message');</script>";  }

} elseif (isset($_POST['formsend_confirm_buy_st_10'])) {

  extract($_POST);

  $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
  $q->execute([
    'pseudo' => $_SESSION['pseudo']
  ]);
  $query = $q->fetch();

  if($query['stack'] >= 25000){
    $paiement = $query['stack'] - 25000;

    $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
    $a->execute([
      'pseudo' => $_SESSION['pseudo']
    ]);

    ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
  } else {
    $message = "Pas assez de points";
    echo "<script type='text/javascript'>alert('$message');</script>";  }

} elseif (isset($_POST['formsend_confirm_buy_st_25'])) {

  extract($_POST);

  $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
  $q->execute([
    'pseudo' => $_SESSION['pseudo']
  ]);
  $query = $q->fetch();

  if($query['stack'] >= 50000){
    $paiement = $query['stack'] - 50000;

    $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
    $a->execute([
      'pseudo' => $_SESSION['pseudo']
    ]);

    ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
  } else {
    $message = "Pas assez de points";
    echo "<script type='text/javascript'>alert('$message');</script>";  }

} elseif (isset($_POST['formsend_confirm_buy_st_50'])) {

  extract($_POST);

  $q = $db->prepare("SELECT * FROM user_stack WHERE pseudo = :pseudo");
  $q->execute([
    'pseudo' => $_SESSION['pseudo']
  ]);
  $query = $q->fetch();

  if($query['stack'] >= 75000){
    $paiement = $query['stack'] - 75000;

    $a = $db->prepare("UPDATE user_stack SET stack='".$paiement."' WHERE pseudo = :pseudo");
    $a->execute([
      'pseudo' => $_SESSION['pseudo']
    ]);
    ?><meta http-equiv="refresh" content="0.0001;URL=/freebet/"><?php
  } else {
    $message = "Pas assez de points";
    echo "<script type='text/javascript'>alert('$message');</script>";  }
}


?>
