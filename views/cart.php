<?php
if(count($products) > 0):
  foreach ($products as $product):
?>
<p><?= $product?> </p>
<?php
  endforeach;
else:
?>
  <p>The cart is empty</p>
<?php
endif;
?>
<button onclick="clearMessage()">Go back shopping</button>