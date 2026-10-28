<?php
  session_start();

  $wineToBuy = $_REQUEST['type'];

  if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
  }

  array_push($_SESSION['cart'], $wineToBuy);

  include_once __DIR__."/../../views/buy.php";
?>