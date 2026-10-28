<?php
  $cookie_name = "cart";
  $wineToBuy = $_REQUEST['type'];

/* if(!isset($_COOKIE[$cookie_name])){
    $cookie_value = $wineToBuy;
  }else{
    $cookie_value = "$_COOKIE[$cookie_name],$wineToBuy";
  } */
  //Using the ternary operator:
  //$cookie_value = (!isset($_COOKIE[$cookie_name])) ? $wineToBuy : "$_COOKIE[$cookie_name],$wineToBuy";
  //Ternary operator
  $cookie_value = (!isset($_COOKIE[$cookie_name])) ? $wineToBuy : "$_COOKIE[$cookie_name],$wineToBuy";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

  include_once __DIR__."/../views/buy.php";
?>