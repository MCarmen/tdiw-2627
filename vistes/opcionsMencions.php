<?php
foreach ($rows as $row) :
?>
  <option value="<?= $row['id'] ?>"> <?= $row['nom'] ?> </option>

<?php
endforeach;
?>