<?php

 $produc=$_POST['producto'];
 $unid=$_POST['unidades'];
 $prec=$_POST['precio'];


$neto=($prec*$unid)*1.15;

if ($neto>50){
    
    $descuento=$neto*0.05;
    $total=$neto-$descuento;
    echo "su desglose queda de la siguente manera"."<br>";
    echo "su producto fue el siguente: ".$produc ."<br>";
    echo "su compra supero el monto valido para un descuento, por ende queda en: ". $total;
    
}
   else {
       
     echo " su compra fue la siguente: "."<br>";
    echo $produc ."<br>"."y el monto es el siguente: " .$neto;
       
   }