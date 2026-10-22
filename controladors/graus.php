<?php
//completa
include_once __DIR__ . "/../models/connectaBD.php";
include_once __DIR__ . "/../models/consultaGraus.php";
include_once __DIR__ . "/../vistes/opcionsGraus.php";

$con = connectaBD();
$rows = consultaGraus($con);
showDegrees($rows);
?>
