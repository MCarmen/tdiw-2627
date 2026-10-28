<?php
$products = array();
if(isset($_COOKIE['cart'])){
  $products = explode(',', $_COOKIE['cart']);
}
include_once __DIR__."/../views/cart.php";
?>
