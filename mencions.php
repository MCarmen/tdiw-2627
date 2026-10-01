<?php
  $graus = [
    ["id"=>1,"nom"=>"Eng. Informàtica"], 
    ["id"=>2,"nom"=>"Intel.ligència Artificial"]
  ];
  $mencions = [
    1=> [
      ["id"=>1,"nom"=>"Eng Software"], 
      ["id"=>2,"nom"=>"TIC"],
      ["id"=>3,"nom"=>"Computació"]],
    2=> [   
      ["id"=>4,"grau_id"=>2,"nom"=>"Machine Learning"],
      ["id"=>5,"grau_id"=>2,"nom"=>"Data mining"]]
  ];

  $grau = $_REQUEST['grau'];
  //print_r($graus[$grau]);
  
  foreach ($mencions[$grau] as $valor) {
    echo "<option value=".$valor['id'].">".$valor['nom']."</option>";
  }

?>