<?php


  $string="Hello\\every\\one";
  $car='\\';

  
  function coupage($str,$c){
  
  	$tab=explode($c,$str);
  	print_r($tab);
  }

  echo "",coupage($string,$car), "</br>";
 return explode($c,$str);
?>