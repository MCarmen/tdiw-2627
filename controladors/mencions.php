<?php
//completa
include_once __DIR__ . "/../models/connectaBD.php";
include_once __DIR__ . "/../models/consultaMencions.php";

$con = connectaBD();
/* $grau = 1;
if(isset($_REQUEST['grau'])){$grau = $_REQUEST['grau'];} */
//nullish coalescent operator (nullish operator)
$grau = $_REQUEST['grau'] ?? 1; 
$rows = consultaMencions($con, $grau);
include_once __DIR__ . "/../vistes/opcionsMencions.php";

?>
