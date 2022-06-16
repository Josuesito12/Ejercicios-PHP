<?php

$hora=$_POST['horas'];



switch($hora){
        
    case in_array($hora, range(10,12));
        echo "Horario Series";
        break;
    case in_array($hora, range(13,16));
        echo "Novelas Repetidas";
        break;
    case in_array($hora, range(17,19));
        echo "anime";
        break;
    case in_array($hora, range(20,22));
        echo "noticiero";
        break;
    case in_array($hora, range(23,24));
        echo "XXX";
        break;
   
        
     
}


?>