<?php
session_start();

//Nullish operator
$products = $_SESSION['cart'] ?? [];
include_once __DIR__."/../../views/cart.php";
?>
