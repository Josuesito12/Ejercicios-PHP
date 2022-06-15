<?php

  $minuT=$_POST['minutos'];

  $horas=$minuT/60;
  $dias= $minuT/1440;

 echo "la cantidad de minutos capturadas son el equivalente a horas: " .$horas . "<br>";
 echo"la cantidad de minutos capturadas son el equivalente a dias: " .$dias ."<br>";
  

?>