<?php


    $cantidad=$_POST['numero'];
    
    if ($cantidad>100) {
        
        
        $descuento=$cantidad*0.10;
        $total=$cantidad - $descuento;
        echo "por ser mayor a 100 el descuento es de 10 %, por ende su precio queda en: ".$total;
       }
     else {
        $descuento=$cantidad*0.02;
        $total=$cantidad - $descuento;
        echo "por ser menor a 100 el descuento es de 2 %, por ende su precio queda en: ".$total; 
     }
         

 
    
    ?>