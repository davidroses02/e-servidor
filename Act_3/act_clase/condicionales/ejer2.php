<?php  
    /**
     *  @author David Rosas
     *  Enunciado: Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch
     * 
     * 
     */

    $mes = 2;
    $año = 2000;
    $diasBisiesto = 0;

    if ( (($año % 4) == 0) || (($año % 100) == 0) && (($año % 400) == 0) ) {
        $diasBisiesto = 29;
    } else {
        $diasBisiesto = 28;
    }

    switch ($mes) {
        case 1:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 31 dias ";
            break;
        case 2:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , "$diasBisiesto" , ' dias ';
            break;
        case 3:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 31 dias ";
            break;
        case 4:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 30 dias ";
            break;
        case 5:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 31 dias ";
            break;
        case 6:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 30 dias ";
            break;
        case 7:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 31 dias ";
            break;
        case 8:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 31 dias ";
            break;
        case 9:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 30 dias ";
            break;
        case 10:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 31 dias ";
            break;
        case 11:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 30 dias ";
            break;
        case 12:
            echo "El mes " , "$mes " , "del" , " $año ", "posee " , " 30 dias ";
            break;
        default:
            echo "Ese mes es erróneo.";
            break;
    }
?>