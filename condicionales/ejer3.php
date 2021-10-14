<?php 

/**
     *  @author David Rosas
     *  Enunciado: Carga fecha de nacimiento en variables y calcula la edad.
     * 
     * 
     */

    $fechaSistema = date('Y-m-d');
    $fecha = "2000-10-05";
    
    $añoSistema = intval(substr($fechaSistema, 0 , 4));
    $año = intval(substr($fecha, 0 , 4));
    
    $mesSistema = intval(substr($fechaSistema, 5 , 6));
    $mes = intval(substr($fecha, 5 , 6));

    $diaSistema = intval(substr($fechaSistema, 8 , 9));
    $dia = intval(substr($fecha, 8 , 9));

    $resultado = 0;

    // Si la fecha del sistema es > a la de la fecha2 quiere decir que aún no ha cumpliado años.
    if ( $mesSistema > $mes ) {
        
        // Si la condición se cumple solo debemos realizar la resta entre los años
        $resultado = $añoSistema - $año;

        // Si los meses son iguales, debemos sacar conclusiones del dia.
    } elseif ($mesSistema == $mes){

        if ($diaSistema == $dia) { // si el mes y el dia son iguales, es el cumpleaños del usuario.
            echo "Es tu cumpleaños." , "<br>";
            $resultado = $añoSistema - $año;
        } elseif ($diaSistema > $dia) {  // si el dia es mayor, el cumpleaños ha pasado.
            $resultado = $añoSistema - $año;
        } else { // si el dia es menor, el cumpleaños no ha pasado.
            $resultado = $añoSistema - $año - 1;
        }

        // Esta última condición se cumple cuando el cumnpleaños del usuario ya ha pasado.
    } else {
        $resultado = $añoSistema - $año;
    }

    echo "El usuario tiene: " . "$resultado" . " años";

?>