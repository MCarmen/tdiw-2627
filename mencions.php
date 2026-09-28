<?php
  $graus = array(
    array("id"=>1,"nom"=>"Eng. Informàtica"), 
    array("id"=>2,"nom"=>"Intel.ligència Artificial")
  );
  $mencions = array( 
    1=> array(
      array("id"=>1,"nom"=>"Eng Software"), 
      array("id"=>2,"nom"=>"TIC"),
      array("id"=>3,"nom"=>"Computació")),
    2=> array(   
      array("id"=>4,"grau_id"=>2,"nom"=>"Machine Learning"),
      array("id"=>5,"grau_id"=>2,"nom"=>"Data mining"))
  );

  $grau = $_REQUEST['grau'];
  //print_r($graus[$grau]);
  
  foreach ($mencions[$grau] as $valor) {
    echo "<option value=".$valor['id'].">".$valor['nom']."</option>";
  }

?>