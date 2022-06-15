<?php

   $salario=$_POST['salario'];
   $horasT=$_POST['horas'];

  if($horasT>40){
      
        $extraH=$horasT-40; // extraer horas extra
        $salarioTope=$salario*40; // sacar salario de las 40 horas solamente
        $salarioExtra=$salario*0.50; // extraer el salario extra
        $salarioTotal=$salario+$salarioExtra; // sumar salario normal mas el extra extraido
        $extraSalario=$salarioTotal*$extraH; // multiplicar salario por los dias extra
        $total=$salarioTope+$extraSalario; // se suma a lo calculado de 40 dias
      
      
      
     
     
      echo "Su salario supero las 40 horas, por ende quedo calculado en" .$total;      
  }
  else {
      $calculo=($salario * $horasT);
      echo "su salario quedo por debajo de las 40 horas, por lo tanto quedo en  " .$calculo;
  }
      

?>