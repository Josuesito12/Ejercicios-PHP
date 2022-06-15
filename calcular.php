<?php

   $salario=$_POST['salario'];
   $horasT=$_POST['horas'];

  if($horasT>40){
      
      $extra=$horasT-40; //extrae horas extras
      $calculo= ($salario * 40); // calcular salario tope 40
      $calculo2= ($extra*$salario); // se calcula lo extra
      $calculo3= $calculo2*0.50; // se extrae el 50 %
      $total= $calculo + $calculo3; // se suma el 50% al salario tope
      
     
      echo "Su salario supero las 40 horas, por ende quedo calculado en" .$total;      
  }
  else {
      $calculo=($salario * $horasT);
      echo "su salario quedo por debajo de las 40 horas, por lo tanto quedo en  " .$calculo;
  }
      

?>