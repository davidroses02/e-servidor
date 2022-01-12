<?php
   
   /**
    * @author David Rosas
    * Enunciado: Escribe un programa que genere e imprima 20 números aleatorios (0-100), mostrando también el 
    * mayor, el menor y la media.
    */
    $numero;
    $mayor = 0;
    $menor = 100;
    $suma = 0;
    $media = 0;

    for($i=0;$i<20;$i++){
        $numero[$i]=rand(0,100);
        if($numero[$i]>$mayor){
            $mayor=$numero[$i];
        }
        if($numero[$i]<$menor){
            $menor=$numero[$i];
        }
        $suma=$suma+$numero[$i];
        echo $numero[$i]. " ";
    }
    $media=$suma/100;
    echo "</br>";
    echo "Media es : ".$media."<br>";
    echo "Mayor es : ".$mayor."<br>";
    echo "Menor es : ".$menor."<br>";
?>