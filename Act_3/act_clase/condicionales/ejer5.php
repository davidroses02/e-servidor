<?php 

/**
     *  @author David Rosas
     *  Enunciado: Script que muestre una lista de enlaces en función del perfil de usuario:
     *   Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
     *   Perfil Usuario: Pagina1, Pagina2
     * 
     * 
     */

    $perfil = "Usuario";

    if (strcasecmp($perfil, "Administrador") === 0 ) {
        echo "pagina 1, pagina 2, pagina 3";
    } elseif (strcasecmp($perfil, "Usuario") === 0) {
        echo "pagina 1, pagina 2";
    }

?>