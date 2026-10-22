<?php
function consultaMencions($con, $grau)
{
  //completa
  $sql = "SELECT * FROM mencions WHERE grau=$grau";
  $result = pg_query($con, $sql);
  $rows = pg_fetch_all($result);

  return $rows;
}
