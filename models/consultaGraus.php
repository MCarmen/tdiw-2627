<?php
function consultaGraus($con)
{
  //completa
  $sql = "SELECT * FROM graus";
  $result = pg_query($con, $sql);
  $rows = pg_fetch_all($result);

  return $rows;
}
