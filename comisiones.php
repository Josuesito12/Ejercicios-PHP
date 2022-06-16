<?php

$salario=$_POST['sueldo'];
$ventasT=$_POST['venta'];


switch($ventasT){
    
    case $ventasT >10000;

    $calculo=$ventasT*1.15;
    $total=$salario+$calculo;
    echo "su salario es de:".$salario ."y su comision por superar la meta es de ". $calculo . "dando un total de: ".$total;
    break;

   case $ventasT < 10000;
    
    $calculo=$ventasT*.05;
    $total=$salario+$calculo;
    echo "su salario es de:".$salario ."y su comision por no superar la meta es de ". $calculo . "dando un total de: ".$total;
    break;
  
  case $ventasT<5000;

   echo "su salario es de:".$salario ."y su comision no llego al minimo para generar una comision !!";

    break;
}

?>

