<?php
//TODO1: Get the degree from the Request
$degree = 1;
if(isset($_REQUEST['grau'])){
  $degree = $_REQUEST['grau'];
}


//TODO2: Query the database to get requested degree's mentions
include_once __DIR__ . "/connectaBD.php";
$con = connectaBD();

$sql = "SELECT * FROM mencions WHERE grau=$degree";
$result = pg_query($con, $sql);
$rows = pg_fetch_all($result);
foreach ($rows as $row) :
  //Step3: Generate and option tag with the 'id' and the 'nom' of the degree register.
  //echo "<option value='".$row['id']."'>$row['nom']</option>";
?>
  <option value="<?= $row['id'] ?>"> <?= $row['nom'] ?> </option>

<?php
endforeach;
pg_close($con);
?>
