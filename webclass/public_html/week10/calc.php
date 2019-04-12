<?php

  $apr = $_GET['apr'];
  
  $term = $_GET['term'];
  
  $amount = $_GET['amount'];
  
  
 
  $totalValue =  (($amount) * (($apr/100)/12) * pow(1 + (($apr/100)/12), ($term*12))) / (pow(1 + (($apr/100)/12), ($term*12))-1);
  
 
  
  echo "This is the Monthly Payment Value = $ " .number_format($totalValue, 2, '.', ',')."<br>";
  

?>